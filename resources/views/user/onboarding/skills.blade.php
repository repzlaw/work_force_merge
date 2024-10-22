<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Onboarding') }}
        </h2>
    </x-slot>

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
                                </div>
                            @endif
                        </div>
                        
                        <div class="flex items-center justify-center mt-6 gap-x-6">
                            <button type="button" id="add-skill" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Add skill
                            </button>
                        </div>

                        <div class="flex items-center justify-end mt-6 gap-x-6">
                            <a href="{{route('onboarding.education')}}" class="text-sm font-semibold leading-6 text-gray-900">Go back</a>
                            <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Finish
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
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

            $('.delete-skill-btn').click(function() {
                var block = $(this).parent();
                var skillId = $(this).data('skill-id'); // Assuming you have a data attribute holding the ID

                $.ajax({
                    url: '/delete-skill/' + skillId, // API endpoint
                    type: 'DELETE',
                    success: function(result) {
                        block.remove(); // Only remove the block on successful deletion
                    },
                    error: function(err) {
                        alert('Error deleting skill.');
                    }
                });
            });
        });
        </script>
        
</x-app-layout>
