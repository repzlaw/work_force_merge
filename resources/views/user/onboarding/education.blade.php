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
                        $startingIndex = count($user->educations);
                    @endphp
                   <h6>What is your educational background?</h6>
                    <form method="POST" action="{{ route('onboarding.education.store') }}">
                        @csrf
                        
                        <div id="education-container">
                            @foreach ($user->educations as $index => $education)
                            
                                <div class="pb-5 my-4 mb-5 education-block" id="education-block-{{$index}}">
                                    <input type="hidden" name="educations[{{$index}}][id]" value="{{ $education->id }}">

                                    <div class="sm:col-span-3">
                                        <label for="school_name{{$index}}" class="block text-sm font-medium leading-6 text-gray-900">
                                            Name of school
                                        </label>
                                        <div class="mt-2">
                                            <input type="text" value="{{ $education->school_name }}" name="educations[{{$index}}][school_name]" id="school_name{{$index}}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                    </div>

                                    <div class="mt-4 sm:col-span-3">
                                        <label for="year{{$index}}" class="block text-sm font-medium leading-6 text-gray-900">
                                            Year of graduation
                                        </label>
                                        <div class="mt-2">
                                            <input type="number" value="{{ $education->year }}" name="educations[{{$index}}][year]" id="year{{$index}}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                    </div>

                                    <div class="mt-4 sm:col-span-3">
                                        <label for="certificate{{$index}}" class="block text-sm font-medium leading-6 text-gray-900">
                                            Certificate
                                        </label>
                                        <div class="mt-2">
                                            <input type="text" value="{{ $education->certificate }}" name="educations[{{$index}}][certificate]" id="certificate{{$index}}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                    </div>

                                    <div class="mt-4 sm:col-span-3">
                                        <label for="course{{$index}}" class="block text-sm font-medium leading-6 text-gray-900">
                                            Course
                                        </label>
                                        <div class="mt-2">
                                            <input type="text" value="{{ $education->course }}" name="educations[{{$index}}][course]" id="course{{$index}}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                    </div>
                                    <button type="button" data-education-id="{{ $education->id }}" class="px-3 py-2 my-4 text-sm font-semibold text-white bg-red-500 rounded-md shadow-sm delete-education-btn hover:bg-red-600" data-index="{{$index}}">Delete</button>
                                    <br/>
                                </div>
                            @endforeach

                            @if ($startingIndex == 0)
                                <div class="pb-5 my-4 mb-5 education-block-0" id="education-block-0">
                                    <div id="new-education mb-4">
                                        <input type="hidden" name="educations[0][id]" value="null">

                                        <div class="sm:col-span-3">
                                            <label for="school_name" class="block text-sm font-medium leading-6 text-gray-900">
                                                Name of school
                                            </label>
                                            <div class="mt-2">
                                            <input type="text" name="educations[0][school_name]" id="school_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required>
                                            </div>
                                        </div>
                
                                        <div class="mt-4 sm:col-span-3">
                                            <label for="year" class="block text-sm font-medium leading-6 text-gray-900">
                                                Year of graduation
                                            </label>
                                            <div class="mt-2">
                                            <input type="number" name="educations[0][year]" id="year" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required>
                                            </div>
                                        </div>
                
                                        <div class="mt-4 sm:col-span-3">
                                            <label for="certificate" class="block text-sm font-medium leading-6 text-gray-900">
                                                Certificate 
                                            </label>
                                            <div class="mt-2">
                                            <input type="text" name="educations[0][certificate]" id="certificate" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required>
                                            </div>
                                        </div>
                
                                        <div class="mt-4 sm:col-span-3">
                                            <label for="course" class="block text-sm font-medium leading-6 text-gray-900">
                                                Course 
                                            </label>
                                            <div class="mt-2">
                                            <input type="text" name="educations[0][course]" id="course" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="px-3 py-2 my-4 text-sm font-semibold text-white bg-red-500 rounded-md shadow-sm delete-education-btn hover:bg-red-600" data-index="0">Delete</button>
                                    <br/>
                                </div>
                            @endif
                        </div>
                        
                        <div class="flex items-center justify-center mt-6 gap-x-6">
                            <button type="button" id="add-education" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Add institution
                            </button>
                        </div>

                        <div class="flex items-center justify-end mt-6 gap-x-6">
                            <a href="{{route('onboarding.salary')}}" class="text-sm font-semibold leading-6 text-gray-900">Go back</a>
                            <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Continue
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript to handle adding new education blocks -->
    <script>
        $(document).ready(function() {
            var currentIndex = {{ $startingIndex > 0 ? $startingIndex : 1 }};
        
            $('#add-education').click(function() {
                var newBlock = `
                    <div class="pb-5 my-4 mb-5 education-block" id="education-block-${currentIndex}">
                        <input type="hidden" name="educations[${currentIndex}][id]" value="null">
                        
                        <div class="sm:col-span-3">
                            <label for="school_name${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Name of School</label>
                            <div class="mt-2">
                                <input type="text" name="educations[${currentIndex}][school_name]" id="school_name${currentIndex}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
        
                        <div class="mt-4 sm:col-span-3">
                            <label for="year${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Year of Graduation</label>
                            <div class="mt-2">
                                <input type="number" name="educations[${currentIndex}][year]" id="year${currentIndex}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
        
                        <div class="mt-4 sm:col-span-3">
                            <label for="certificate${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Certificate</label>
                            <div class="mt-2">
                                <input type="text" name="educations[${currentIndex}][certificate]" id="certificate${currentIndex}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
        
                        <div class="mt-4 sm:col-span-3">
                            <label for="course${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
                            <div class="mt-2">
                                <input type="text" name="educations[${currentIndex}][course]" id="course${currentIndex}" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
                        <button type="button" class="px-3 py-2 my-4 text-sm font-semibold text-white bg-red-500 rounded-md shadow-sm delete-education-btn hover:bg-red-600" data-index="${currentIndex}">Delete</button>
                        <br/>
                    </div>
                `;
                
                $('#education-container').append(newBlock);
                
                // Bind delete function to new button
                $(`#education-block-${currentIndex} .delete-education-btn`).click(function() {
                    $(this).parent().remove();
                });
                
                currentIndex++;
            });

            $('.delete-education-btn').click(function() {
                var block = $(this).parent();
                var educationId = $(this).data('education-id'); // Assuming you have a data attribute holding the ID

                $.ajax({
                    url: '/delete-education/' + educationId, // API endpoint
                    type: 'DELETE',
                    success: function(result) {
                        block.remove(); // Only remove the block on successful deletion
                    },
                    error: function(err) {
                        alert('Error deleting education.');
                    }
                });
            });
        });
        </script>
        
</x-app-layout>
