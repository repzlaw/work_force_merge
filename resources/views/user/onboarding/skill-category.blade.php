<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Talent Onboarding 2</title>
    <link rel="stylesheet" href="../src/output.css" />
</head>

<body>
    <div class="container-small">
        <div class="grid grid-flow-row-dense grid-cols-2 mt-28">
            <form method="POST" action="{{ route('onboarding.skill-category.store') }}">
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
                                    What are your interested in?
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


                            <p class="gray-500">You can select only one</p>
                        </div>
                        <div class="grid grid-cols-3 gap-3  mt-9">
                            @foreach ($skillCategories as $category)
                                <div class="inline-flex justify-center rounded-xl talent-box-clickable">
                                    <div class="px-4 py-5">
                                        <input type="radio" name="skill_category" class="talent-box-button"
                                            id="getjob" value="{{ $category->id }}"
                                            {{ $category->id == $user->profile->skill_category_id ? 'selected' : '' }} />
                                        <div class="talent-input-checked">
                                            <img src="../src/assets/check.png" alt="" />
                                        </div>
                                        <img src="../src/assets/pen-tool-2.svg" class="mx-auto mb-4" alt="" />
                                        <p> {{ $category->name }}</p>
                                    </div>
                                </div>
                            @endforeach


                            {{-- <div class="inline-flex justify-center rounded-xl talent-box-clickable">
                            <div class="px-4 py-5 text-center">
                                <input type="radio" name="get-job" class="talent-box-button" id="hire-talent" />
                                <div class="talent-input-checked">
                                    <img src="../src/assets/check.png" alt="" />
                                </div>
                                <img src="../src/assets/apple.svg" class="mx-auto mb-4" alt="" />
                                <p>Product</p>
                            </div>
                        </div>
                        <div class="inline-flex justify-center rounded-xl talent-box-clickable">
                            <div class="px-4 py-5 text-center">
                                <input type="radio" name="get-job" class="talent-box-button" id="hire-talent" />
                                <div class="talent-input-checked">
                                    <img src="../src/assets/check.png" alt="" />
                                </div>
                                <img src="../src/assets/code.svg" class="mx-auto mb-4" alt="" />
                                <p>Engineering</p>
                            </div>
                        </div>
                        <div class="inline-flex justify-center rounded-xl talent-box-clickable">
                            <div class="px-4 py-5 text-center">
                                <input type="radio" name="get-job" class="talent-box-button" id="hire-talent" />
                                <div class="talent-input-checked">
                                    <img src="../src/assets/bitcoin-convert.svg" alt="" />
                                </div>
                                <img src="../src/assets/code.svg" class="mx-auto mb-4" alt="" />
                                <p>Crypto & Web3</p>
                            </div>
                        </div>
                        <div class="inline-flex justify-center rounded-xl talent-box-clickable">
                            <div class="px-4 py-5 text-center">
                                <input type="radio" name="get-job" class="talent-box-button" id="hire-talent" />
                                <div class="talent-input-checked">
                                    <img src="../src/assets/bitcoin-convert.svg" alt="" />
                                </div>
                                <img src="../src/assets/timer-start.svg" class="mx-auto mb-4" alt="" />
                                <p>Freelancing</p>
                            </div>
                        </div>
                        <div class="inline-flex justify-center rounded-xl talent-box-clickable">
                            <div class="px-4 py-5 text-center">
                                <input type="radio" name="get-job" class="talent-box-button" id="hire-talent" />
                                <div class="talent-input-checked">
                                    <img src="../src/assets/bitcoin-convert.svg" alt="" />
                                </div>
                                <img src="../src/assets/happyemoji.svg" class="mx-auto mb-4" alt="" />
                                <p>People and Culture</p>
                            </div>
                        </div> --}}

                        </div>
                        <div class="flex flex-wrap items-center justify-center mt-9"></div>
                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <a href="{{ route('dashboard') }}" class="gray-600 font-bold">Go Back</a>
                        <button type="submit"
                            class="btncapitalize full-radius btn-blue btn inline-block">Continue</button>
                    </div>
                    {{-- <div class="mt-40 text-center mb-10">
                        <p class="gray-500 font-medium">
                            Already have an account? <a href="#" class="gray-800">Log In</a>
                        </p>
                    </div> --}}
                </div>
            </form>
            <div>
                <div class="fixed right-0 top-0">
                    <img src="../src/assets/right-frame.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../src/js/index.js"></script>
</body>

</html>
