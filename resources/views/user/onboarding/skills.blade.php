<!DOCTYPE html>
<html lang="en">

<<<<<<< Updated upstream
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-100 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @php
                        $startingIndex = $user_skills ? count($user_skills->skills) : 0;
                    @endphp
                    <h4 class="mb-4 text-gray-900">What are you skills?</h4>
                    
                    <form method="POST" action="{{ route('onboarding.skills.store') }}">
                        @csrf
                        
                        <div id="skill-container">
                            @isset($user_skills)
                                @foreach ($user_skills->skills as $index => $individual_skill)
                                
                                    <div class="pb-5 my-4 mb-5 skill-block" id="skill-block-{{$index}}">
                                        {{-- <input type="hidden" name="skills[{{$index}}][id]" value="{{ $skill->id }}"> --}}

                                        <div class="sm:col-span-3">
                                            <label for="skill{{$index}}" class="block text-sm font-medium leading-6 text-gray-900">
                                                Skill
                                            </label>
                                            <div class="mt-2">
                                                <select id="skill" name="skills[{{$index}}][skill]" autocomplete="skill-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                                    <option value="">Select a skill</option>
                                                    @foreach ($skills as $skill)
                                                        <option value="{{ $skill->id }}" {{ $skill->id == $individual_skill['skill'] ? 'selected' : '' }}>{{ $skill->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mt-4 sm:col-span-3">
                                            <label for="rating{{$index}}" class="block text-sm font-medium leading-6 text-gray-900">
                                                What would you rate yourself?
                                            </label>
                                            <div class="mt-2">
                                                <input type="number" value="{{ $individual_skill['rating'] }}" name="skills[{{$index}}][rating]" id="rating{{$index}}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                            </div>
                                        </div>

                                        <div class="mt-4 sm:col-span-3">
                                            <label for="experience{{$index}}" class="block text-sm font-medium leading-6 text-gray-900">
                                                How many years of experience do you have with this skill?
                                            </label>
                                            <div class="mt-2">
                                                <input type="number" value="{{ $individual_skill['experience'] }}" name="skills[{{$index}}][experience]" id="experience{{$index}}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                            </div>
                                        </div>

                                        <button type="button" data-skill-id="{{ $index }}" class="px-3 py-2 my-4 text-sm font-semibold text-white bg-red-500 rounded-md shadow-sm delete-skill-btn hover:bg-red-600" data-index="{{$index}}">Delete</button>
                                        <br/>
                                    </div>
                                @endforeach
                                
                            @endisset

                            @if ($startingIndex == 0)
                                <div class="pb-5 my-4 mb-5 skill-block-0" id="skill-block-0">
                                    <div id="new-skill mb-4">
                                        <input type="hidden" name="skills[0][id]" value="null">

                                        <div class="sm:col-span-3">
                                            <label for="skill" class="block text-sm font-medium leading-6 text-gray-900">
                                                Skill
                                            </label>
                                            {{-- <div class="mt-2">
                                            <input type="text" name="skills[0][skill]" id="skill" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required> --}}
                                            <div class="mt-2">
                                                <select id="skill" name="skills[0][skill]" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                required>
                                                    <option value="">Select a skill</option>
                                                    @foreach ($skills as $skill)
                                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                
                                        <div class="mt-4 sm:col-span-3">
                                            <label for="rating" class="block text-sm font-medium leading-6 text-gray-900">
                                                What would you rate yourself?
                                            </label>
                                            <div class="mt-2">
                                            <input type="number" name="skills[0][rating]" id="rating" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required>
                                            </div>
                                        </div>
                
                                        <div class="mt-4 sm:col-span-3">
                                            <label for="experience" class="block text-sm font-medium leading-6 text-gray-900">
                                                How many years of experience do you have with this skill?
                                            </label>
                                            <div class="mt-2">
                                            <input type="number" name="skills[0][experience]" id="experience" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required>
                                            </div>
                                        </div>
                
                                    </div>
                                    <button type="button" class="px-3 py-2 my-4 text-sm font-semibold text-white bg-red-500 rounded-md shadow-sm delete-skill-btn hover:bg-red-600" data-index="0">Delete</button>
                                    <br/>
=======
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Talent Onboarding 7</title>
    <link rel="stylesheet" href="../src/output.css" />
</head>

<body>
    <div class="container-small">
        <div class="grid grid-flow-row-dense grid-cols-2 mt-28">
            <div>
                <div class="bc-gray-100 full-radius progress-bar">
                    <span class="bc-primary-yellow block full-radius" style="width: 30%; height: 10px"></span>
                </div>
                <p class="gray-500 mt-9">Welcome to Work-Force Forge</p>
                <h3 class="text-3xl font-bold gray-800 mt-4">Welcome, {{ Auth::user()->name }}
                </h3>
                <div class="border talent-box-container">
                    <div class="talent-onboarding-title">
                        <div class="flex items-center justify-between">
                            <h1 class="gray-800 font-medium text-3xl mb-4">
                                What are you skills?
                            </h1>

                            <ul class="flex onboarding-avtar">
                                <li>
                                    <img src="../src/assets/avtar-1.png" class="full-radius" alt="" />
                                </li>
                                <li>
                                    <img src="../src/assets/avtar-2.png" class="full-radius" alt="" />
                                </li>
                                <li>
                                    <img src="../src/assets/avtar-3.png" class="full-radius" alt="" />
                                </li>
                            </ul>
                        </div>
                        <p class="gray-500">
                            This helps us match you with the right job.
                        </p>
                    </div>
                    <div class="rounded-xl border p-5 mt-7">
                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="row-span-4 col-span-4">
                                <div class="form-control">
                                    <label for="skill" class="gray-500 font-medium">Skill 1</label>
                                    <div class="form-input-group">
                                        <input type="text" name="skill" id="skill" class="form-input m-0"
                                            placeholder="E.g. Protptyping" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="gray-500 text-xs">Suggestions</p>
                                    <ul class="mt-2">
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Figma
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Sketch
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Protopie
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Illustrator
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            After Effects
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Photoshop
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Invision
                                        </li>
                                    </ul>
>>>>>>> Stashed changes
                                </div>
                                <div class="form-control mt-6">
                                    <label for="experience" class="gray-500 font-medium">How many years of experience do
                                        you have with this experience?</label>
                                    <div class="form-input-group">
                                        <input type="text" name="experience" id="experience" class="form-input m-0"
                                            placeholder="E.g. Protptyping" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row-span-3 text-right">
                                <p class="gray-500 mb-4">What would you rate yourself?</p>
                                <ul class="flex justify-end">
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-xl border p-5 mt-4">
                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="row-span-4 col-span-4">
                                <div class="form-control">
                                    <label for="skill" class="gray-500 font-medium">Skill 1</label>
                                    <div class="form-input-group">
                                        <input type="text" name="skill" id="skill" class="form-input m-0"
                                            placeholder="E.g. Protptyping" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="gray-500 text-xs">Suggestions</p>
                                    <ul class="mt-2">
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Figma
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Sketch
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Protopie
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Illustrator
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            After Effects
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Photoshop
                                        </li>
                                        <li
                                            class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">
                                            Invision
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-control mt-6">
                                    <label for="experience" class="gray-500 font-medium">How many years of experience
                                        do you have with this experience?</label>
                                    <div class="form-input-group">
                                        <input type="text" name="experience" id="experience"
                                            class="form-input m-0" placeholder="E.g. Protptyping"
                                            autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row-span-3 text-right">
                                <p class="gray-500 mb-4">What would you rate yourself?</p>
                                <ul class="flex justify-end">
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                    <li class="ml-3">
                                        <img class="w-6" src="../src/assets/star.svg" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-7">
                        <a href="#" class="capitalize full-radius font-bold btn btn-dark-red red"><img
                                src="../src/assets/trash.svg" class="mr-2.5" alt=""> Remove Skill</a>
                        <a href="#" class="capitalize full-radius font-bold btn btn-dark-blue ">Add another
                            skill</a>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-5">
                    <a href="{{ route('onboarding.education') }}" class="gray-600 font-bold">Go Back</a>
                    <<button type="submit" class="btncapitalize full-radius btn-blue btn inline-block">Finish
                        </button>
                </div>
                <div class="mt-40 text-center mb-10">
                    <p class="gray-500 font-medium">
                        Already have an account? <a href="#" class="gray-800">Log In</a>
                    </p>
                </div>
            </div>
            <div>
                <div class="fixed right-0 top-0 talent-onbaording-banner md:block hidden">
                    <img src="../src/assets/right-frame.png" alt="" />
                </div>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream
    <!-- JavaScript to handle adding new skill blocks -->
    <script>
        $(document).ready(function() {
            var currentIndex = {{ $startingIndex > 0 ? $startingIndex : 1 }};
        
            $('#add-skill').click(function() {
                var newBlock = `
                    <div class="pb-5 my-4 mb-5 skill-block" id="skill-block-${currentIndex}">
                        <input type="hidden" name="skills[${currentIndex}][id]" value="null">
                        
                        <div class="sm:col-span-3">
                            <label for="skill${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Name of School</label>
                            <div class="mt-2">
                                <select id="skill" name="skills[${currentIndex}][skill]" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                required>
                                    <option value="">Select a skill</option>
                                    @foreach ($skills as $skill)
                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
        
                        <div class="mt-4 sm:col-span-3">
                            <label for="rating${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">
                                What would you rate yourself?
                            </label>
                            <div class="mt-2">
                                <input type="number" name="skills[${currentIndex}][rating]" id="rating${currentIndex}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
        
                        <div class="mt-4 sm:col-span-3">
                            <label for="experience${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">
                            How many years of experience do you have with this skill?
                            </label>
                            <div class="mt-2">
                                <input type="number" name="skills[${currentIndex}][experience]" id="experience${currentIndex}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
        
                        <button type="button" class="px-3 py-2 my-4 text-sm font-semibold text-white bg-red-500 rounded-md shadow-sm delete-skill-btn hover:bg-red-600" data-index="${currentIndex}">Delete</button>
                        <br/>
                    </div>
                `;
                
                $('#skill-container').append(newBlock);
                
                // Bind delete function to new button
                $(`#skill-block-${currentIndex} .delete-skill-btn`).click(function() {
                    $(this).parent().remove();
                });
                
                currentIndex++;
            });
=======
</body>
>>>>>>> Stashed changes

</html>
