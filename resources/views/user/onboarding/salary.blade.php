<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Talent Onboarding 5</title>
    <link rel="stylesheet" href="../src/output.css" />
</head>

<body>
    <div class="container-small">
        <div class="grid grid-flow-row-dense grid-cols-2 mt-28">
            <form method="POST" action="{{ route('onboarding.salary.store') }}">
                @csrf

                <div>
                    <div class="bc-gray-100 full-radius progress-bar">
                        <span class="bc-primary-yellow block full-radius" style="width: 30%; height: 10px"></span>
                    </div>
                    <p class="gray-500 mt-9">Welcome to Work-Force Forge</p>
                    <h3 class="text-3xl font-bold gray-800 mt-4">Welcome, {{ Auth::user()->name }}</h3>
                    <div class="border talent-box-container">
                        <div class="talent-onboarding-title">
                            <div class="flex items-center justify-between">
                                <h1 class="gray-800 font-medium text-3xl mb-4">
                                    What is your expected salary?
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
                        <div class="flex mt-2.5 mb-9">
                            <ul class="switch-tabs m-0">
                                <input type="radio" name="type" value="Monthly"
                                    {{ 'Monthly' == $user->salary?->type ? 'selected' : '' }} class="invisible"
                                    id="monthly" style="display:none" />
                                <input type="radio" name="type" value="Hourly"
                                    {{ 'Hourly' == $user->salary?->type ? 'selected' : '' }}
                                    class="invisible talent-box-button" id="hourly" style="display:none" />
                                <input type="radio" name="type" value="Annually"
                                    {{ 'Annually' == $user->salary?->type ? 'selected' : '' }}
                                    class="invisible talent-box-button" id="annually" style="display:none" />
                                <label for="monthly">
                                    <li class="active" id="monthly">Monthly</li>
                                </label>
                                <label for="hourly">
                                    <li id="hourly">Hourly</li>
                                </label>
                                <label for="annually">
                                    <li id="annually">Annually</li>
                                </label>

                            </ul>
                        </div>
                        <div class="form-control input-left-icon md:w-4/6">
                            <label for="salary">Your expected salary</label>
                            <div class="form-input-group">
                                <div class="input_icon input-left-partition">
                                    <select id="currency" name="currency" autocomplete="currency"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                        required>
                                        <option value="USD"
                                            {{ 'USD' == $user->salary?->currency ? 'selected' : '' }}>USD</option>
                                        <option value="NGN"
                                            {{ 'NGN' == $user->salary?->currency ? 'selected' : '' }}>NGN</option>
                                        <option value="EUR"
                                            {{ 'EUR' == $user->salary?->currency ? 'selected' : '' }}>EUR</option>
                                    </select>
                                </div>
                                <input type="number" value="{{ $user->salary?->amount }}" name="amount" \
                                    id="salary" class="form-input m-0" placeholder="1200" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <a href="{{ route('onboarding.about') }}" class="gray-600 font-bold">Go Back</a>
                        <button type="submit" class="btncapitalize full-radius btn-blue btn inline-block">Continue
                        </button>
                    </div>
                    {{-- <div class="mt-40 text-center mb-10">
                        <p class="gray-500 font-medium">
                            Already have an account? <a href="#" class="gray-800">Log In</a>
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
