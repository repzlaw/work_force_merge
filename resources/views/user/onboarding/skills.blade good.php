    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Talent Onboarding 7</title>
        <link rel="stylesheet" href="../src/output.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    @php
        $startingIndex = count($skills);
    @endphp

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
                        <form method="POST" action="{{ route('onboarding.skills.store') }}">
                            @csrf

                            <div id="skill-container">
                                @foreach ($skills as $index => $skill)
                                    <div id="skill-block-{{ $index }}">
                                        <input type="hidden" name="skills[{{ $index }}][id]"
                                            value="{{ $skill->id }}">
                                        <div class="rounded-xl border p-5 mt-7">
                                            <div class="grid grid-rows-3 grid-flow-col gap-4">
                                                <div class="row-span-4 col-span-4">
                                                    <div class="form-control">
                                                        <label for="skill" class="gray-500 font-medium">Skill
                                                            1</label>
                                                        <div class="form-input-group">
                                                            <input type="text" value="{{ $skill->skill_name }}"
                                                                name="skills[{{ $index }}][skill_name]"
                                                                id="skill_name{{ $index }}"
                                                                class="form-input m-0" placeholder="E.g. Prototyping"
                                                                autocomplete="off" />
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="gray-500 text-xs">Suggestions</p>
                                                        <ul class="mt-2">
                                                            <!-- Suggestion items here -->
                                                        </ul>
                                                    </div>
                                                    <div class="form-control mt-6">
                                                        <label for="experience" class="gray-500 font-medium">How many
                                                            years
                                                            of experience do you have with this skill?</label>
                                                        <div class="form-input-group">
                                                            <input type="number" value="{{ $skill->experience }}"
                                                                name="skills[{{ $index }}][experience]"
                                                                id="experience{{ $index }}"
                                                                class="form-input m-0" placeholder="E.g. Prototyping"
                                                                autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-span-3 text-right">
                                                    <p class="gray-500 mb-4">What would you rate yourself?</p>
                                                    <input type="number" value="{{ $skill->rate }}"
                                                        name="skills[{{ $index }}][rate]"
                                                        id="rate{{ $index }}" class="form-input m-0"
                                                        placeholder="E.g. Prototyping" autocomplete="off" />

                                                    <ul class="flex justify-end">
                                                        <!-- Rating stars here -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between mt-7">
                                            <button type="button" data-skill-id="{{ $skill->id }}"
                                                class="delete-skill-btn capitalize full-radius font-bold btn btn-dark-red red">
                                                <img src="../src/assets/trash.svg" class="mr-2.5" alt="" />
                                                Remove
                                                Skill
                                            </button>
                                        </div>
                                    </div>
                                @endforeach

                                @if ($startingIndex == 0)
                                    <div id="skill-block-0">
                                        <input type="hidden" name="skills[0][id]" value="null" />
                                        <div class="rounded-xl border p-5 mt-7">
                                            <div class="grid grid-rows-3 grid-flow-col gap-4">
                                                <div class="row-span-4 col-span-4">
                                                    <div class="form-control">
                                                        <label for="skill" class="gray-500 font-medium">Skill
                                                            1</label>
                                                        <div class="form-input-group">
                                                            <input type="text" name="skills[0][skill_name]"
                                                                id="skill_name" autocomplete="given-name"
                                                                class="form-input m-0" placeholder="E.g. Protptyping"
                                                                autocomplete="off" />
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
                                                        <label for="experience" class="gray-500 font-medium">How
                                                            many
                                                            years of
                                                            experience do
                                                            you have with this skill?</label>
                                                        <div class="form-input-group">

                                                            <input type="number" name="skills[0][experience]"
                                                                id="experience" class="form-input m-0"
                                                                placeholder="E.g. Protptyping" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-span-3 text-right">
                                                    <p class="gray-500 mb-4">What would you rate yourself?</p>

                                                    <input type="number" name="skills[0][rate]" id="rate"
                                                        class="form-input m-0" placeholder="E.g. Protptyping"
                                                        autocomplete="off" />

                                                    <ul class="flex justify-end">

                                                        <li class="ml-3">
                                                            <img class="w-6" src="../src/assets/star.svg"
                                                                alt="" />
                                                        </li>
                                                        <li class="ml-3">
                                                            <img class="w-6" src="../src/assets/star.svg"
                                                                alt="" />
                                                        </li>
                                                        <li class="ml-3">
                                                            <img class="w-6" src="../src/assets/star.svg"
                                                                alt="" />
                                                        </li>
                                                        <li class="ml-3">
                                                            <img class="w-6" src="../src/assets/star.svg"
                                                                alt="" />
                                                        </li>
                                                        <li class="ml-3">
                                                            <img class="w-6" src="../src/assets/star.svg"
                                                                alt="" />
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between mt-7">
                                            <button type="button"
                                                class="delete-skill-btn capitalize
                                            full-radius font-bold btn btn-dark-red red"><img
                                                    src="../src/assets/trash.svg" class="mr-2.5" alt=""
                                                    data-index="0"> Remove
                                                Skill</button>

                                        </div>
                                    </div>
                                @endif

                            </div>
                            <div class="flex items-center justify-between mt-7">
                                <button type="button" id="add-skill"
                                    class="capitalize full-radius font-bold btn btn-dark-blue ">Add another
                                    skill</button>
                            </div>

                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <a href="{{ route('onboarding.education') }}" class="gray-600 font-bold">Go Back</a>
                        <button type="submit" class="btncapitalize full-radius btn-blue btn inline-block">Finish
                        </button>
                    </div>
                    </form>

                </div>
                <div>
                    <div class="fixed right-0 top-0 talent-onbaording-banner md:block hidden">
                        <img src="../src/assets/right-frame.png" alt="" />
                    </div>
                </div>
            </div>
        </div>






    </body>

    </html>

    <script>
        $(document).ready(function() {
            var currentIndex = {{ $startingIndex > 0 ? $startingIndex : 1 }};

            // Function to add a new skill block
            $('#add-skill').click(function() {
                var newBlock = `
                <div id="skill-block-${currentIndex}">
                    <input type="hidden" name="skills[${currentIndex}][id]" value="null">
                    <div class="rounded-xl border p-5 mt-7">
                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="row-span-4 col-span-4">
                                <div class="form-control">
                                    <label for="skill" class="gray-500 font-medium">Skill 1</label>
                                    <div class="form-input-group">
                                        <input type="text"
                                            name="skills[${currentIndex}][skill_name]"
                                            id="skill_name${currentIndex}" class="form-input m-0"
                                            placeholder="E.g. Prototyping" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="gray-500 text-xs">Suggestions</p>
                                    <ul class="mt-2">
                                        <li class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">Figma</li>
                                        <li class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">Sketch</li>
                                        <li class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">Protopie</li>
                                        <li class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">Illustrator</li>
                                        <li class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">After Effects</li>
                                        <li class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">Photoshop</li>
                                        <li class="inline-flex px-2.5 py-3 text-xs gray-800 font-medium mr-2.5 mb-2 input-box">Invision</li>
                                    </ul>
                                </div>
                                <div class="form-control mt-6">
                                    <label for="experience" class="gray-500 font-medium">How many years of experience do you have with this skill?</label>
                                    <div class="form-input-group">
                                        <input type="number"
                                            name="skills[${currentIndex}][experience]"
                                            id="experience${currentIndex}" class="form-input m-0"
                                            placeholder="E.g. Prototyping" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row-span-3 text-right">
                                <p class="gray-500 mb-4">What would you rate yourself?</p>
                                <input type="number"
                                    name="skills[${currentIndex}][rate]" id="rate${currentIndex}"
                                    class="form-input m-0" placeholder="E.g. Prototyping"
                                    autocomplete="off" />

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
                        <button type="button" class="delete-skill-btn capitalize full-radius font-bold btn btn-dark-red red" data-index="${currentIndex}">
                            <img src="../src/assets/trash.svg" class="mr-2.5" alt="" /> Remove Skill
                        </button>
                    </div>
                </div>`;

                $('#skill-container').append(newBlock);
                currentIndex++;
            });
            $(document).on('click', '.delete-skill-btn', function() {
                var skillId = $(this).data('skill-id'); // Get skill ID from data attribute
                var blockId = $(this).closest('div[id^="skill-block-"]').attr('id'); // Get parent block ID

                console.log('Deleting skill with ID:', skillId); // For debugging
                console.log('Deleting block with ID:', blockId); // For debugging

                // Remove the skill block from the DOM
                $('#' + blockId).remove();
            });
            // Function to delete a skill block
            // $(document).on('click', '.delete-skill-btn', function() {
            //     var index = $(this).data('index');
            //     console.log('Deleting block with index:', index);

            //     $('#skill-block-' + index).remove();
            // });
        });
    </script>
