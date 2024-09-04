<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="../src/output.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="flex items-center justify-between py-6 navbar">
                <div class="logo">
                    <a href="#"><img src="../src/assets/WFM-logo.svg" alt="logo" /></a>
                </div>
                <ul class="flex items-center justify-center header-menu">
                    <li>
                        <a href="#" class="font-medium capitalize gray-500 mr-7">get hired</a>
                    </li>
                    <li>
                        <a href="#" class="font-medium capitalize gray-500 mr-7">discovered talent</a>
                    </li>
                    <li>
                        <a href="#" class="font-medium capitalize gray-500 mr-7">contact</a>
                    </li>
                    @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/dashboard') }}" class="mr-4 capitalize full-radius btn btn-dark-blue w-36">
                                Dashboard </a>
                        @else
                            <a href="{{ route('login') }}" class="mr-4 capitalize full-radius btn btn-dark-blue w-36">
                                Log
                                in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="capitalize full-radius btn-blue btn w-36">join us
                                    now</a>
                                </a>
                            @endif
                        @endauth
                    @endif

                </ul>
            </div>
        </div>
    </header>
    <!-- Header end here -->

    <!-- Home page Banner -->
    <main class="mt-14">
        <div class="container-small">
            <div class="w-3/4 mx-auto text-center">
                <h1 class="px-10 mb-5 font-extrabold text-8xl">
                    Hiring <span class="primary-blue">Redefined:</span> It's About Time
                </h1>
                <div><img src="../src/assets/banner-line.png" alt="" /></div>
                <div class="relative flex justify-between">
                    <div class="inline-flex px-4 py-3 rounded-2xl banner-ticket">
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar05.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar06.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar02.png" alt="" />
                        </span>
                        <p class="inline-block ml-8 font-medium text-left gray-900">
                            <a href="#" class="primary-blue">20+</a> Teams Have<br />Been
                            Formed.
                        </p>
                    </div>
                    <p class="w-6/12 mx-auto mt-6 text-lg gray-500">
                        We got tired of how tiring job and talent hunting was. So we
                        decided to change the game!
                    </p>
                    <div class="inline-flex px-4 py-3 rounded-2xl banner-ticket banner-ticket-right">
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar05.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar06.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar02.png" alt="" />
                        </span>
                        <p class="inline-block ml-8 font-medium text-left gray-900">
                            <a href="#" class="primary-blue">20+</a> Teams Have<br />Their
                            Dream Job.
                        </p>
                    </div>
                </div>
                <ul class="flex justify-center mt-10 mb-14">
                    <li>
                        <img src="../src/assets/star-fill.svg" class="mr-2 w-9" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="mr-2 w-9" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="mr-2 w-9" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="mr-2 w-9" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="mr-2 w-9" alt="" />
                    </li>
                </ul>
                <div class="flex items-center justify-between banner-arrow">
                    <div><img src="../src/assets/banner-small-blue.svg" alt="" /></div>
                    <div>
                        <img src="../src/assets/banner-small-yellow.svg" alt="" />
                    </div>
                </div>
                <div class="flex items-center justify-center mt-4 mb-6 banner-form">
                    <div class="form-control">
                        <label for="talent" class="mb-4 text-xl font-medium gray-800">Search for a Talent</label>
                        <div class="form-input-icon">
                            <input type="text" name="talent" id="talent" class="m-0 form-input"
                                placeholder="Search for Talent" autocomplete="off" />
                            <span class="input_icon input_icon_left">Roles
                                <img src="../src/assets/chevron-down.svg" class="ml-2" alt="arrow" /></span>
                            <span class="input_icon input_icon_riht btn btn-blue">Search
                                <img src="../src/assets/search-white.svg" class="ml-2" alt="search icon" /></span>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="hired" class="mb-4 text-xl font-medium gray-800">Get Hired</label>
                        <div class="form-input-icon">
                            <input type="text" name="hired" id="hired" class="m-0 form-input"
                                placeholder="Search for Job" autocomplete="off" />
                            <span class="input_icon input_icon_left">Roles
                                <img src="../src/assets/chevron-down.svg" class="ml-2" alt="arrow" /></span>
                            <span class="input_icon input_icon_riht btn btn-blue">Search
                                <img src="../src/assets/search-white.svg" class="ml-2" alt="search icon" /></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Home page Banner end -->

    <!-- Social proof section -->
    <section class="py-24 bc-gray-100">
        <div class="container-small">
            <div class="text-center">
                <p class="mb-8 font-medium gray-500">
                    Join 4,000+ companies already growing
                </p>
                <ul class="flex items-center justify-between px-8">
                    <li>
                        <a href="#"><img src="../src/assets/coinbase.svg" alt="coinbase" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/spotify.svg" alt="spotify" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/slack.png" alt="slack" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/dropbox.svg" alt="dropbox" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/webflow.png" alt="web-flow" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/zoom.svg" alt="zoom" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Social proof section end -->

    <!-- Business Women   -->
    <section class="mt-40 business-women">
        <div class="container-small">
            <div class="relative text-white business-women-banner">
                <div class="w-3/4">
                    <h1 class="mb-7">Explore career paths and succeed in your job!</h1>
                    <p class="w-3/4 text-lg">
                        Find work for every stage of your career, while being in full
                        control of when, where, and how you work.
                    </p>
                </div>
                <div class="inline-flex flex-col py-3 pl-2 pr-4 rounded-lg bc-white business-woman-ticket">
                    <ul class="flex mb-3">
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                    </ul>
                    <ul class="flex mb-3 business-women-avtar">
                        <li>
                            <img src="../src/assets/avtar-1.png" class="border-white rounded-full" alt="star" />
                        </li>
                        <li>
                            <img src="../src/assets/avtar-2.png" class="border-white rounded-full" alt="star" />
                        </li>
                        <li>
                            <img src="../src/assets/avtar-3.png" class="rounded-full" alt="star" />
                        </li>
                        <li>
                            <img src="../src/assets/avtar-4.png" class="rounded-full" alt="star" />
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full text-sm text-white rounded-full bc-primary-blue">+5k</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Business Women end   -->
    <!-- Dream Role-->
    <section class="my-40">
        <div class="container-small">
            <div class="w-3/4 mx-auto text-center">
                <div class="inline-block px-6 py-2 font-medium capitalize bc-blue-100 full-radius blue-600">
                    your dream role
                </div>
                <h1 class="mt-4 mb-4 text-6xl">
                    Connect with Leading Employers Worldwide
                </h1>
                <p class="mb-8">
                    We partnered with thousands of
                    <a href="#" class="font-medium primary-blue">US, Canada, UK, Austria, Ireland and
                        Australian</a>
                    companies. We match up your skills to the right company. Click on
                    the preferred job below to express interest and we will link you up
                    with the right organization in search of your skill set in no time!
                </p>
                <ul class="flex flex-wrap justify-center">
                    <li>
                        <a href="#" class="inline-block p-3 mb-4 mr-4 bc-indigo-100 indigo-500 full-radius">SMMA
                            (Social Media Marketing Assistant)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block p-3 mb-4 mr-4 bc-indigo-100 indigo-500 full-radius">Software Developer
                            (Laravel, PHP, Javascript Framerworks)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block p-3 mb-4 mr-4 bc-indigo-100 indigo-500 full-radius">VA</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block p-3 mb-4 mr-4 bc-indigo-100 indigo-500 full-radius">Video Editor</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block p-3 mb-4 mr-4 bc-indigo-100 indigo-500 full-radius">Shopify
                            Designer</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block p-3 mb-4 mr-4 bc-indigo-100 indigo-500 full-radius">Sales Assistant</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block p-3 mb-4 mr-4 bc-indigo-100 indigo-500 full-radius">Product Manager</a>
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="ml-0 recommendations_box">
                    <div class="mb-9 recommendations_box-inside bc-blue-100">
                        <div class="flex items-center justify-between">
                            <div class="text-xs font-medium badge">20 May, 2024</div>
                            <div class="small-badge">
                                <img src="../src/assets/bookmark.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex mt-3 mb-9">
                            <div>
                                <img src="../src/assets/slack.svg" alt="" class="mr-3" />
                            </div>
                            <div>
                                <div class="flex items-center text-sm gray-500">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="text-xl font-bold gray-800">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex mb-2 mr-2 text-xs font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-medium gray-500">
                            <span class="text-xl font-bold primary-blue">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="inline-block mx-auto">
                    <a href="#" class="inline-block btn btn-blue full-radius w-72">Register to Apply</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Dream Role End -->

    <!-- For Recruiters  -->
    <section>
        <div class="container-small">
            <div class="recruiters_section">
                <div class="w-2/4">
                    <span class="px-6 py-2 text-xl text-white badge transparent-bc-badge">For Recruiters
                    </span>
                    <h1 class="mt-6 mb-8 text-6xl text-white">
                        Take Away the Guess Work of Finding Great Talent
                    </h1>
                    <p class="text-white">
                        Tap into a massive pool of independent talent for any team, big or
                        small. Achieve quick wins or complete major transformations.
                    </p>
                    <div class="mt-28">
                        <a href="#" class="inline-block btn bc-white full-radius">Get Started Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- For Recruiters End -->

    <!-- save time and Money -->
    <section class="mt-40">
        <div class="container-small">
            <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                <div>
                    <div>
                        <img src="../src/assets/women-tea.png" class="rounded-lg" alt="women-with-tea" />
                    </div>
                    <div class="px-16 py-20">
                        <h1 class="mb-4 text-4xl font-medium gray-800">Save Money</h1>
                        <p class="text-lg gray-500">
                            Cost of using so many platforms during the hiring and onboarding
                            process can be cut down when you use Workforce Merge.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="pl-12 mb-8 pr-36 py-14">
                        <div class="inline-block mb-10 rounded-3xl bc-amber-100 p-9">
                            <img src="../src/assets/hourglass 1.png" alt="" />
                        </div>
                        <h1 class="mb-4 text-4xl font-medium gray-800">Saves Time</h1>
                        <p class="text-lg gray-500">
                            Finding the right talent that fits your culture and skill
                            required is made easier. Sign up to get value in no time at all.
                        </p>
                    </div>
                    <div class="pl-12 pr-36 py-14">
                        <div class="inline-block mb-10 rounded-3xl bc-amber-100 p-9">
                            <img src="../src/assets/hands.png" alt="" />
                        </div>
                        <h1 class="mb-4 text-4xl font-medium gray-800">
                            Unified Platform
                        </h1>
                        <p class="text-lg gray-500">
                            We assist you through Talent Search, Interviews, Tests(Skill
                            checks), Onboarding and more
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- save time and Money end -->

    <!-- dream job-->
    <section class="my-40">
        <div class="container-small">
            <div class="text-center">
                <div class="inline-block px-6 py-2 font-medium capitalize bc-blue-100 full-radius blue-600">
                    your dream job
                </div>
                <h1 class="mt-4 mb-4 text-6xl">We’re redefining hiring</h1>
                <div class="px-32 py-20 mt-16 bc-blue-700 rounded-xl">
                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                        <div class="w-3/4 mx-auto mb-20 text-white">
                            <div class="inline-block mb-10 bg-white p-7 rounded-3xl">
                                <img src="../src/assets/cv.png" alt="cv" />
                            </div>
                            <p class="text-4xl">A Candidate-Centric Journey</p>
                            <p>
                                Simplify the hiring process with a streamlined platform that
                                puts candidates first.
                            </p>
                        </div>
                        <div class="w-3/4 mx-auto mb-20 text-white">
                            <div class="inline-block mb-10 bc-amber-100 p-7 rounded-3xl">
                                <img src="../src/assets/people.png" alt="cv" />
                            </div>
                            <p class="text-4xl">Smarter Hiring Decisions</p>
                            <p>
                                Leverage real-time data and analytics to optimize your hiring
                                strategy and measure ROI.
                            </p>
                        </div>
                        <div class="w-3/4 mx-auto text-white">
                            <div class="inline-block mb-10 bc-yellow-200 p-7 rounded-3xl">
                                <img src="../src/assets/brand.png" alt="cv" />
                            </div>
                            <p class="text-4xl">Build a Strong Employer Brand</p>
                            <p>
                                Attract top talent and improve employee retention with a
                                powerful employer brand and culture-first approach.
                            </p>
                        </div>
                        <div class="w-3/4 mx-auto text-white">
                            <div class="inline-block mb-10 bc-purple-200 p-7 rounded-3xl">
                                <img src="../src/assets/businessman.png" alt="cv" />
                            </div>
                            <p class="text-4xl">Find Your Perfect Hire</p>
                            <p>
                                Our advanced matching technology identifies top talent based
                                on hard and soft skills, ensuring you find the perfect fit for
                                your team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dream job end -->

    <!-- aim to please -->
    <section>
        <div class="container-small">
            <div class="flex items-start px-14">
                <div class="pt-8 mr-12 bc-violet-300" style="border-radius: 32px">
                    <div><img src="../src/assets/robot.png" alt="robot" /></div>
                </div>
                <div>
                    <div class="inline-block px-6 py-2 mt-4 font-medium capitalize bc-blue-100 full-radius blue-600">
                        We Aim To Please
                    </div>
                    <h1 class="w-3/5 mt-4 text-6xl font-medium gray-800">
                        What Our Users Say About Us
                    </h1>
                    <div class="my-10">
                        <ul class="flex slide-dots">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="flex items-start justify-between">
                        <div>
                            <h2 class="text-3xl font-bold gray-800">Layla Abas</h2>
                            <p class="font-medium primary-blue">Product Manager</p>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-4">
                                <a href="#" class="inline-block px-8 py-2 border full-radius"><img
                                        src="../src/assets/arrow-left-black.svg" alt="" /></a>
                            </div>
                            <div>
                                <a href="#" class="inline-block px-8 py-2 border full-radius"><img
                                        src="../src/assets/arrow-right-black.svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <p class="mt-8 font-medium gray-500">
                        "Struggled to find relevant jobs for weeks. Signed up for
                        Work-Force Merge and landed interviews in half the time! Their
                        filters and personalized recommendations made all the difference.
                        Highly recommend!"
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- aim to please end -->

    <!-- figma dribble job section -->
    <section class="relative my-40 find-job-platform">
        <div class="container-small">
            <div class="py-20 bc-slate-200 px-14" style="border-radius: 45px">
                <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                    <div>
                        <p class="inline-block px-6 py-2 text-lg text-white bc-primary-blue full-radius">
                            Let’s Find Your Dream Job
                        </p>
                        <h1 class="w-3/4 my-4 text-6xl font-bold gray-800">
                            Ready To Take Your Career To The Next Level?
                        </h1>
                        <p class="font-medium gray-500">
                            Stop searching, start finding. Work-Force Merge goes beyond
                            basic job boards. Get matched with the perfect opportunities and
                            land your dream job faster. Sign up today!
                        </p>
                    </div>
                    <div>
                        <div
                            class="px-4 py-2 bc-blue-100 rounded-xl w-72 find-job-platform-ticket find-job-platform-ticket-fixed">
                            <div class="flex items-center justify-between">
                                <span class="font-medium gray-500">Dribbble</span>
                                <span><img src="../src/assets/dribble.svg" class="ml-20" alt="" /></span>
                            </div>
                            <p class="w-3/4 text-xl font-bold gray-800">
                                Senior Product Manager
                            </p>
                        </div>
                        <div class="px-4 py-2 bc-green-100 rounded-xl w-72 find-job-platform-ticket">
                            <div class="flex items-center justify-between">
                                <span class="font-medium gray-500">Figma</span>
                                <span><img src="../src/assets/figma.svg" class="ml-20" alt="" /></span>
                            </div>
                            <p class="w-3/4 text-xl font-bold gray-800">
                                Snr. Motion Designer
                            </p>
                        </div>
                        <img src="../src/assets/banner-small-blue.svg" alt="" />
                        <div class="flex w find-job-platform-form">
                            <div class="form-control">
                                <div class="form-input-icon input-left-icon">
                                    <input type="email" name="email" id="email"
                                        class="m-0 form-input full-radius" placeholder="Enter your email"
                                        autocomplete="off" />
                                    <span class="input_icon input_icon_left">
                                        <img src="../src/assets/envelope.svg" class="ml-2" alt="arrow" /></span>
                                </div>
                            </div>
                            <a href="#" class="inline-block btn-blue btn full-radius">get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- figma dribble job section end -->

    <!-- Footer end here -->
    <footer>
        <div class="container-small">
            <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <a href="#"><img src="../src/assets/WFM-logo.svg" alt="" /></a>
                    </div>
                    <ul class="flex footer-menu">
                        <li><a href="#" class="font-medium gray-500">pricing</a></li>
                        <li><a href="#" class="font-medium gray-500">contact</a></li>
                    </ul>
                </div>
                <ul class="flex justify-end footer-social-media">
                    <li>
                        <a href="#"><img src="../src/assets/instagram.svg" alt="instagram" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/facebook.svg" alt="facebook" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/google-big.svg" alt="google" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="../src/assets/twitter.svg" alt="twitter" /></a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center justify-between pt-14 footer-copy-right">
                <div>
                    <p class="font-medium gray-500">
                        @2024 Work-Force Merge, All Rights Reserved
                    </p>
                </div>
                <ul class="flex footer-menu">
                    <li>
                        <a href="#" class="font-medium gray-500">Terms of Service</a>
                    </li>
                    <li><a href="#" class="font-medium gray-500">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
