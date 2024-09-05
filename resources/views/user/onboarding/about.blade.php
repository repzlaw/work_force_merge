<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Talent Onboarding 4</title>
    <link rel="stylesheet" href="../src/output.css" />
</head>

<body>
    <div class="container-small">
        <div class="grid grid-flow-row-dense grid-cols-2 mt-28">
            <form method="POST" action="{{ route('onboarding.about.store') }}">
                @csrf
                <div>
                    <div class="bc-gray-100 full-radius progress-bar">
                        <span class="bc-primary-yellow block full-radius" style="width: 30%; height: 10px"></span>
                    </div>
                    <p class="gray-500 mt-9">Welcome to Work-Force Forge</p>
                    <h3 class="text-3xl font-bold gray-800 mt-4">
                        Welcome, {{ Auth::user()->name }}

                    </h3>
                    <div class="border talent-box-container">
                        <div class="talent-onboarding-title">
                            <div class="flex items-center justify-between">
                                <h1 class="gray-800 font-medium text-3xl mb-4">
                                    Tell us a bit about how you work
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

                        <div class="mt-7 md:w-9/12">
                            <div class="form-control">
                                <label for="motivates">What motivates you towards getting things
                                    done?</label>
                                <div class="form-input-group mb-4">
                                    <input type="text" value="{{ $user->profile->motivation }}" name="motivation"
                                        id="motivation" autocomplete="given-name" class="form-input" required>
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="project">Enter links to previous projects you’ve
                                    worked on</label>
                                <div class="form-input-group mb-4">
                                    <textarea rows="5" type="text" name="project_links" id="project_links" autocomplete="given-name"
                                        class="form-input" required>{{ $user->profile->project_links }}</textarea>
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="methodologies">What are your methodologies?</label>
                                <div class="form-input-group mb-4">
                                    <textarea rows="5" type="text" name="methodologies" id="methodologies" autocomplete="given-name"
                                        class="form-input" required>{{ $user->profile->methodologies }}</textarea>
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="portfolio">Portfolio link</label>
                                <div class="form-input-group mb-4">
                                    <input type="text" value="{{ $user->profile->portfolio_link }}"
                                        name="portfolio_link" autocomplete="given-name" id="portfolio"
                                        class="form-input" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <a href="{{ route('onboarding.skill-category') }}" class="gray-600 font-bold">Go Back</a>
                        <button type="submit" class="btncapitalize full-radius btn-blue btn inline-block">Continue
                        </button>
                    </div>
                    {{-- <div class="mt-40 text-center mb-10">
                        <p class="gray-500 font-medium">
                            Already have an account?
                            <a href="#" class="gray-800">Log In</a>
                        </p>
                    </div> --}}
                </div>
            </form>

            <div>
                <div class="fixed right-0 top-0 talent-onbaording-banner md:block hidden">
                    <img src="../src/assets/right-frame.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
