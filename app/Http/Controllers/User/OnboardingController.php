<?php

namespace App\Http\Controllers\User;

use App\Models\Skill;
use App\Models\Education;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\SkillCategory;
use App\Http\Controllers\Controller;
use App\Models\UserSkill;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\Redirect;

class OnboardingController extends Controller
{
    public $user;
    public $onboardingUrl;

    public function __construct() 
    {
        $this->user = Auth::user();

        $this->onboardingUrl = [
            'skill-category',
            'about',
            'salary',
            'education',
            'skills',
        ];

    }
    
    public function index() 
    {
        $url = 'onboarding.' . $this->onboardingUrl[$this->user->profile->stage];

        return redirect()->route($url);
    }

    public function skillCategoryView() : View 
    {
        $skillCategories = SkillCategory::all();

        return view('user.onboarding.skill-category', [
            'user' => $this->user,
            'skillCategories' => $skillCategories,
        ]);
    }

    public function skillCategoryStore(Request $request)
    {
        $request->validate([
            'skill_category' => 'required',
        ]);

        $this->user->profile->update([
            'skill_category_id' => $request->skill_category,
            'stage' => $this->user->profile->stage > 0 ? $this->user->profile->stage : 1
        ]);

        return redirect()->route('onboarding.about');
    }
    
    public function aboutView() : View 
    {
        return view('user.onboarding.about', [
            'user' => $this->user,
        ]);
    }

    public function aboutStore(Request $request)
    {
        $request->validate([
            'motivation'     => 'required',
            'project_links'  => 'required',
            'methodologies'  => 'required',
            'portfolio_link' => 'required',
        ]);

        $this->user->profile->update([
            'motivation'     => $request->motivation,
            'project_links'  => $request->project_links,
            'methodologies'  => $request->methodologies,
            'portfolio_link' => $request->portfolio_link,
            'stage' => $this->user->profile->stage > 1 ? $this->user->profile->stage : 2
        ]);

        return redirect()->route('onboarding.salary');
    }

    public function salaryView() : View 
    {
        return view('user.onboarding.salary', [
            'user' => $this->user,
        ]);
    }

    public function salaryStore(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'currency' => 'required',
            'amount' => 'required',
        ]);

        $this->user->salary()->updateOrCreate([
            'user_id' => $this->user->id
            ],
            [
            'type' => $request->type,
            'currency' => $request->currency,
            'amount' => $request->amount,
        ]);

        $this->user->profile->update([
            'stage' => $this->user->profile->stage > 2 ? $this->user->profile->stage : 3
        ]);

        return redirect()->route('onboarding.education');
    }

    public function educationView() : View 
    {
        return view('user.onboarding.education', [
            'user' => $this->user,
        ]);
    }

    public function educationStore(Request $request)
    {
        $data = $request->all();

        // Validation rules
        $request->validate([
            'educations.*.school_name' => 'required|string|max:255',
            'educations.*.year' => 'required|numeric|digits:4|min:1900|max:' . date('Y'),
            'educations.*.certificate' => 'required|string|max:255',
            'educations.*.course' => 'required|string|max:255',
        ]);

        // Process each education entry
        foreach ($data['educations'] as $education) {
            if (!isNull($education['id'])) {
                // Update existing record
                Education::find($education['id'])->update([
                    'user_id' => $this->user->id,
                    'school_name' => $education['school_name'],
                    'year' => $education['year'],
                    'certificate' => $education['certificate'],
                    'course' => $education['course']
                ]);
            } else {
                Education::create([
                    'user_id' => $this->user->id,
                    'school_name' => $education['school_name'],
                    'year' => $education['year'],
                    'certificate' => $education['certificate'],
                    'course' => $education['course']
                ]);
            }
        }

        $this->user->profile->update([
            'stage' => $this->user->profile->stage > 3 ? $this->user->profile->stage : 4
        ]);

        return redirect()->route('onboarding.skills');
    }

    public function educationDelete($id)
    {
        $education = $this->user->educations()->find($id);

        if ($education) {
            $education->delete();
        }

        return true;
    }

    public function skillsView() : View 
    {
        $user_skills = UserSkill::where('user_id', $this->user->id)->first();
        $skills = Skill::where('skill_category_id', $this->user->profile->skill_category_id)->get();

        return view('user.onboarding.skills', [
            'user' => $this->user,
            'skills' => $skills,
            'user_skills' => $user_skills,
        ]);
    }

    public function skillsStore(Request $request)
    {
        $data = $request->all();

        // Validate the incoming request
        $request->validate([
            'skills.*.skill' => 'required|string|max:255',
            'skills.*.rating' => 'required|numeric',
            'skills.*.experience' => 'required|numeric',
        ]);

        // Prepare the skills array from the request
        $skills = array_map(function ($skill) {
            return [
                'skill' => $skill['skill'],
                'rating' => $skill['rating'],
                'experience' => $skill['experience'],
            ];
        }, $data['skills']);

        // Update the user document
        UserSkill::updateOrCreate(
            [
                'user_id' => $this->user->id
            ],
            [
                'skills' => $skills,
            ]
        );


        // Optionally update other user profile settings
        $this->user->profile->update([
            'stage' => max($this->user->profile->stage, 5)
        ]);

        return redirect()->route('dashboard');
    }

    public function skillDelete($index)
    {
        // Fetch the UserSkill document for the authenticated user
        $userSkill = UserSkill::where('user_id', $this->user->id)->first();
    
        if (!$userSkill) {
            return false;
        }
    
        // Copy the skills array to a local variable
        $skills = $userSkill->skills;
    
        // Check if the index exists in the skills array
        if (isset($skills[$index])) {
            // Remove the skill at the specified index
            array_splice($skills, $index, 1);
    
            // Reassign the modified array back to the model's property
            $userSkill->skills = $skills;
    
            // Save the modified document
            $userSkill->save();
    
            return true;
        }
    
        return false;
    }
}
