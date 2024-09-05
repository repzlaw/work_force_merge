<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Talent Onboarding 6</title>
    <link rel="stylesheet" href="../src/output.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-small">
        <div class="grid grid-flow-row-dense grid-cols-2 mt-28">
            <div>
                <div class="bc-gray-100 full-radius progress-bar">
                    <span class="bc-primary-yellow block full-radius" style="width: 30%; height: 10px"></span>
                </div>
                <p class="gray-500 mt-9">Welcome to Work-Force Forge</p>
                <h3 class="text-3xl font-bold gray-800 mt-4">Welcome, {{ Auth::user()->name }}</h3>
                @php
                    $startingIndex = count($user->educations);
                @endphp
                <form method="POST" action="{{ route('onboarding.education.store') }}">
                    @csrf
                    <div class="border talent-box-container">
                        <div class="talent-onboarding-title">
                            <div class="flex items-center justify-between">
                                <h1 class="gray-800 font-medium text-3xl mb-4">
                                    What is your educational background?
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

                        <div id="education-container">
                            @foreach ($user->educations as $index => $education)
                                <div class="pb-5 my-4 mb-5 education-block" id="education-block-{{ $index }}">
                                    <input type="hidden" name="educations[{{ $index }}][id]"
                                        value="{{ $education->id }}">

                                    <div class="grid grid-rows-3 grid-flow-col gap-4">
                                        <div class="row-span-5 col-span-5">
                                            <div class="form-control">
                                                <label for="school_name{{ $index }}">Name of school</label>
                                                <div class="form-input-group">
                                                    <input type="text" value="{{ $education->school_name }}"
                                                        name="educations[{{ $index }}][school_name]"
                                                        id="school_name{{ $index }}" autocomplete="off"
                                                        class="form-input m-0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-span-3">
                                            <div class="form-control">
                                                <label for="year{{ $index }}">Year of graduation</label>
                                                <div class="form-input-group">
                                                    <input type="number" value="{{ $education->year }}"
                                                        name="educations[{{ $index }}][year]" min="1900"
                                                        max="{{ date('Y') }}" id="year{{ $index }}"
                                                        autocomplete="off" class="form-input m-0" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-rows-3 grid-flow-col gap-4">
                                        <div class="row-span-3">
                                            <div class="form-control input-left-icon">
                                                <label for="certificate{{ $index }}">Certificate</label>
                                                <div class="form-input-group">
                                                    <input type="text" value="{{ $education->certificate }}"
                                                        name="educations[{{ $index }}][certificate]"
                                                        id="certificate{{ $index }}" autocomplete="off"
                                                        class="form-input m-0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-span-5 col-span-5">
                                            <div class="form-control input-left-icon">
                                                <label for="course{{ $index }}">Course</label>
                                                <div class="form-input-group">
                                                    <input type="text" value="{{ $education->course }}"
                                                        name="educations[{{ $index }}][course]"
                                                        id="course{{ $index }}" autocomplete="off"
                                                        class="form-input m-0" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mt-7">
                                        <button type="button" data-education-id="{{ $education->id }}"
                                            class="delete-education-btn capitalize full-radius font-bold btn btn-dark-red red">
                                            Remove Record </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if ($startingIndex == 0)
                            <div class="pb-5 my-4 mb-5 education-block" id="education-block-0">
                                <input type="hidden" name="educations[0][id]" value="null">

                                <div class="grid grid-rows-3 grid-flow-col gap-4">
                                    <div class="row-span-5 col-span-5">
                                        <div class="form-control">
                                            <label for="school">Name of school</label>
                                            <div class="form-input-group">
                                                <input type="text" name="educations[0][school_name]" id="school"
                                                    class="form-input m-0" placeholder="E.g. WFM University"
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-span-3">
                                        <div class="form-control">
                                            <label for="graduation">Year of graduation</label>
                                            <div class="form-input-group">
                                                <input type="text" name="educations[0][year]" id="graduation"
                                                    class="form-input m-0" placeholder="2000" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-rows-3 grid-flow-col gap-4">
                                    <div class="row-span-3">
                                        <div class="form-control input-left-icon">
                                            <label for="certificate">Certificate</label>
                                            <div class="form-input-group">
                                                <input type="text" name="educations[0][certificate]"
                                                    id="certificate" class="form-input m-0" placeholder="E.g B.Sc"
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-span-5 col-span-5">
                                        <div class="form-control input-left-icon">
                                            <label for="course">Course</label>
                                            <div class="form-input-group">
                                                <input type="text" name="educations[0][course]" id="course"
                                                    class="form-input m-0" placeholder="E.g. Computer Science"
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="mt-3 flex items-center justify-between">
                            <button type="button" id="add-education"
                                class="capitalize full-radius font-bold btn btn-dark-blue">Add
                                another institution</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-5">
                        <a href="{{ route('onboarding.salary') }}" class="gray-600 font-bold">Go Back</a>
                        <button type="submit"
                            class="btncapitalize full-radius btn-blue btn inline-block">Continue</button>
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

    <!-- JavaScript to handle adding and removing education blocks -->
    <script>
        $(document).ready(function() {
            var currentIndex = {{ $startingIndex > 0 ? $startingIndex : 1 }};

            $('#add-education').click(function() {
                var newBlock = `
                    <div class="pb-5 my-4 mb-5 education-block" id="education-block-${currentIndex}">
                        <input type="hidden" name="educations[${currentIndex}][id]" value="null">

                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="row-span-5 col-span-5">
                                <div class="form-control">
                                    <label for="school_name${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Name of School</label>
                                    <div class="mt-2">
                                        <input type="text" name="educations[${currentIndex}][school_name]" id="school_name${currentIndex}" class="form-input m-0" placeholder="E.g. WFM University" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row-span-3">
                                <div class="form-control">
                                    <label for="year${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Year of Graduation</label>
                                    <div class="mt-2">
                                        <input type="number" name="educations[${currentIndex}][year]" id="year${currentIndex}" class="form-input m-0" placeholder="2000" min="1900" max="${new Date().getFullYear()}" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="row-span-3">
                                <div class="form-control input-left-icon">
                                    <label for="certificate${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Certificate</label>
                                    <div class="mt-2">
                                        <input type="text" name="educations[${currentIndex}][certificate]" id="certificate${currentIndex}" class="form-input m-0" placeholder="E.g B.Sc" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row-span-5 col-span-5">
                                <div class="form-control input-left-icon">
                                    <label for="course${currentIndex}" class="block text-sm font-medium leading-6 text-gray-900">Course</label>
                                    <div class="mt-2">
                                        <input type="text" name="educations[${currentIndex}][course]" id="course${currentIndex}" class="form-input m-0" placeholder="E.g. Computer Science" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-7">
                            <button type="button" data-index="${currentIndex}" class="delete-education-btn capitalize full-radius font-bold btn btn-dark-red red">Remove Record</button>
                        </div>
                    </div>
                `;
                $('#education-container').append(newBlock);
                currentIndex++;
            });

            $(document).on('click', '.delete-education-btn', function() {
                $(this).closest('.education-block').remove();
            });
        });
    </script>
</body>

</html>
