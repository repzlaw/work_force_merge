<?php

namespace App\Http\Controllers\User;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SkillCategory;
use Illuminate\Support\Facades\Auth;
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

        return redirect()->route('dashboard');
        // return redirect()->route('onboarding.education');
    }
}
