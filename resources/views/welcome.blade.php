<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    {{-- <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" /> --}}
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
                        <a href="#" class="capitalize gray-500 font-medium mr-7">get hired</a>
                    </li>
                    <li>
                        <a href="#" class="capitalize gray-500 font-medium mr-7">discovered talent</a>
                    </li>
                    <li>
                        <a href="#" class="capitalize gray-500 font-medium mr-7">contact</a>
                    </li>
                    <li>
                        <a href="#" class="capitalize full-radius btn btn-dark-blue w-36 mr-4">login</a>
                    </li>
                    <li>
                        <a href="#" class="capitalize full-radius btn-blue btn w-36">join us now</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Header end here -->

    <!-- Home page Banner -->
    <main class="mt-14">
        <div class="container-small">
            <div class="w-3/4 mx-auto text-center">
                <h1 class="text-8xl font-extrabold px-10 mb-5">
                    Hiring <span class="primary-blue">Redefined:</span> It's About Time
                </h1>
                <div><img src="../src/assets/banner-line.png" alt="" /></div>
                <div class="flex justify-between relative">
                    <div class="py-3 px-4 inline-flex rounded-2xl banner-ticket">
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar05.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar06.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar02.png" alt="" />
                        </span>
                        <p class="gray-900 font-medium text-left ml-8 inline-block">
                            <a href="#" class="primary-blue">20+</a> Teams Have<br />Been
                            Formed.
                        </p>
                    </div>
                    <p class="text-lg w-6/12 mx-auto gray-500 mt-6">
                        We got tired of how tiring job and talent hunting was. So we
                        decided to change the game!
                    </p>
                    <div class="py-3 px-4 inline-flex rounded-2xl banner-ticket banner-ticket-right">
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar05.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar06.png" alt="" />
                        </span>
                        <span class="border-4 border-white banner-ticket-img">
                            <img src="../src/assets/avatar02.png" alt="" />
                        </span>
                        <p class="gray-900 font-medium text-left ml-8 inline-block">
                            <a href="#" class="primary-blue">20+</a> Teams Have<br />Their
                            Dream Job.
                        </p>
                    </div>
                </div>
                <ul class="flex justify-center mb-14 mt-10">
                    <li>
                        <img src="../src/assets/star-fill.svg" class="w-9 mr-2" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="w-9 mr-2" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="w-9 mr-2" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="w-9 mr-2" alt="" />
                    </li>
                    <li>
                        <img src="../src/assets/star-fill.svg" class="w-9 mr-2" alt="" />
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
                        <label for="talent" class="text-xl mb-4 gray-800 font-medium">Search for a Talent</label>
                        <div class="form-input-icon">
                            <input type="text" name="talent" id="talent" class="form-input m-0"
                                placeholder="Search for Talent" autocomplete="off" />
                            <span class="input_icon input_icon_left">Roles
                                <img src="../src/assets/chevron-down.svg" class="ml-2" alt="arrow" /></span>
                            <span class="input_icon input_icon_riht btn btn-blue">Search
                                <img src="../src/assets/search-white.svg" class="ml-2" alt="search icon" /></span>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="hired" class="text-xl mb-4 gray-800 font-medium">Get Hired</label>
                        <div class="form-input-icon">
                            <input type="text" name="hired" id="hired" class="form-input m-0"
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
    <section class="bc-gray-100 py-24">
        <div class="container-small">
            <div class="text-center">
                <p class="font-medium gray-500 mb-8">
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
            <div class="text-white relative business-women-banner">
                <div class="w-3/4">
                    <h1 class="mb-7">Explore career paths and succeed in your job!</h1>
                    <p class="text-lg w-3/4">
                        Find work for every stage of your career, while being in full
                        control of when, where, and how you work.
                    </p>
                </div>
                <div class="py-3 pl-2 pr-4 bc-white rounded-lg inline-flex flex-col business-woman-ticket">
                    <ul class="flex mb-3">
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                        <li><img src="../src/assets/star-fill.svg" alt="star" /></li>
                    </ul>
                    <ul class="flex mb-3 business-women-avtar">
                        <li>
                            <img src="../src/assets/avtar-1.png" class="rounded-full border-white" alt="star" />
                        </li>
                        <li>
                            <img src="../src/assets/avtar-2.png" class="rounded-full border-white" alt="star" />
                        </li>
                        <li>
                            <img src="../src/assets/avtar-3.png" class="rounded-full" alt="star" />
                        </li>
                        <li>
                            <img src="../src/assets/avtar-4.png" class="rounded-full" alt="star" />
                        </li>
                        <li>
                            <a href="#"
                                class="rounded-full text-white text-sm h-full flex items-center justify-center bc-primary-blue">+5k</a>
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
            <div class="text-center w-3/4 mx-auto">
                <div class="capitalize bc-blue-100 inline-block full-radius px-6 py-2 blue-600 font-medium">
                    your dream role
                </div>
                <h1 class="text-6xl mt-4 mb-4">
                    Connect with Leading Employers Worldwide
                </h1>
                <p class="mb-8">
                    We partnered with thousands of
                    <a href="#" class="primary-blue font-medium">US, Canada, UK, Austria, Ireland and
                        Australian</a>
                    companies. We match up your skills to the right company. Click on
                    the preferred job below to express interest and we will link you up
                    with the right organization in search of your skill set in no time!
                </p>
                <ul class="flex justify-center flex-wrap">
                    <li>
                        <a href="#" class="inline-block bc-indigo-100 p-3 indigo-500 full-radius mr-4 mb-4">SMMA
                            (Social Media Marketing Assistant)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block bc-indigo-100 p-3 indigo-500 full-radius mr-4 mb-4">Software Developer
                            (Laravel, PHP, Javascript Framerworks)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block bc-indigo-100 p-3 indigo-500 full-radius mr-4 mb-4">VA</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block bc-indigo-100 p-3 indigo-500 full-radius mr-4 mb-4">Video Editor</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block bc-indigo-100 p-3 indigo-500 full-radius mr-4 mb-4">Shopify
                            Designer</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block bc-indigo-100 p-3 indigo-500 full-radius mr-4 mb-4">Sales Assistant</a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block bc-indigo-100 p-3 indigo-500 full-radius mr-4 mb-4">Product Manager</a>
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
                <div class="recommendations_box ml-0">
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
                                <div class="text-sm gray-500 flex items-center">
                                    Slack Technologies
                                    <img src="../src/assets/Ellipse.svg" alt="Ellipse" class="mx-2" />
                                    <span>Paris</span>
                                </div>
                                <div class="gray-800 text-xl font-bold">UI/UX Designer</div>
                            </div>
                        </div>
                        <ul>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Fulltime
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Remote
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Senior Level
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                Project Work
                            </li>
                            <li class="inline-flex text-xs mr-2 mb-2 font-medium badge transparent-badge">
                                2-3 Years
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="gray-500 font-medium">
                            <span class="primary-blue text-xl font-bold">$5,500</span>
                            /mo
                        </div>
                        <a href="#" class="btn-blue btn slate-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="inline-block mx-auto">
                    <a href="#" class="btn btn-blue inline-block full-radius w-72">Register to Apply</a>
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
                    <span class="badge transparent-bc-badge text-xl py-2 px-6 text-white">For Recruiters
                    </span>
                    <h1 class="text-6xl mb-8 mt-6 text-white">
                        Take Away the Guess Work of Finding Great Talent
                    </h1>
                    <p class="text-white">
                        Tap into a massive pool of independent talent for any team, big or
                        small. Achieve quick wins or complete major transformations.
                    </p>
                    <div class="mt-28">
                        <a href="#" class="btn inline-block bc-white full-radius">Get Started Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- For Recruiters End -->

    <!-- save time and Money -->
    <section class="mt-40">
        <div class="container-small">
            <div class="grid gap-x-8 gap-y-4 grid-cols-2">
                <div>
                    <div>
                        <img src="../src/assets/women-tea.png" class="rounded-lg" alt="women-with-tea" />
                    </div>
                    <div class="px-16 py-20">
                        <h1 class="mb-4 gray-800 text-4xl font-medium">Save Money</h1>
                        <p class="text-lg gray-500">
                            Cost of using so many platforms during the hiring and onboarding
                            process can be cut down when you use Workforce Merge.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="pl-12 pr-36 py-14 mb-8">
                        <div class="rounded-3xl bc-amber-100 p-9 inline-block mb-10">
                            <img src="../src/assets/hourglass 1.png" alt="" />
                        </div>
                        <h1 class="mb-4 gray-800 text-4xl font-medium">Saves Time</h1>
                        <p class="text-lg gray-500">
                            Finding the right talent that fits your culture and skill
                            required is made easier. Sign up to get value in no time at all.
                        </p>
                    </div>
                    <div class="pl-12 pr-36 py-14">
                        <div class="rounded-3xl bc-amber-100 p-9 inline-block mb-10">
                            <img src="../src/assets/hands.png" alt="" />
                        </div>
                        <h1 class="mb-4 gray-800 text-4xl font-medium">
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
                <div class="capitalize bc-blue-100 inline-block full-radius px-6 py-2 blue-600 font-medium">
                    your dream job
                </div>
                <h1 class="text-6xl mt-4 mb-4">We’re redefining hiring</h1>
                <div class="bc-blue-700 py-20 px-32 rounded-xl mt-16">
                    <div class="grid gap-x-8 gap-y-4 grid-cols-2">
                        <div class="text-white w-3/4 mx-auto mb-20">
                            <div class="bg-white p-7 rounded-3xl inline-block mb-10">
                                <img src="../src/assets/cv.png" alt="cv" />
                            </div>
                            <p class="text-4xl">A Candidate-Centric Journey</p>
                            <p>
                                Simplify the hiring process with a streamlined platform that
                                puts candidates first.
                            </p>
                        </div>
                        <div class="text-white w-3/4 mx-auto mb-20">
                            <div class="bc-amber-100 p-7 rounded-3xl inline-block mb-10">
                                <img src="../src/assets/people.png" alt="cv" />
                            </div>
                            <p class="text-4xl">Smarter Hiring Decisions</p>
                            <p>
                                Leverage real-time data and analytics to optimize your hiring
                                strategy and measure ROI.
                            </p>
                        </div>
                        <div class="text-white w-3/4 mx-auto">
                            <div class="bc-yellow-200 p-7 rounded-3xl inline-block mb-10">
                                <img src="../src/assets/brand.png" alt="cv" />
                            </div>
                            <p class="text-4xl">Build a Strong Employer Brand</p>
                            <p>
                                Attract top talent and improve employee retention with a
                                powerful employer brand and culture-first approach.
                            </p>
                        </div>
                        <div class="text-white w-3/4 mx-auto">
                            <div class="bc-purple-200 p-7 rounded-3xl inline-block mb-10">
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
                <div class="bc-violet-300 pt-8 mr-12" style="border-radius: 32px">
                    <div><img src="../src/assets/robot.png" alt="robot" /></div>
                </div>
                <div>
                    <div class="capitalize bc-blue-100 inline-block full-radius px-6 py-2 blue-600 font-medium mt-4">
                        We Aim To Please
                    </div>
                    <h1 class="text-6xl gray-800 font-medium w-3/5 mt-4">
                        What Our Users Say About Us
                    </h1>
                    <div class="my-10">
                        <ul class="flex slide-dots">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-3xl gray-800 font-bold">Layla Abas</h2>
                            <p class="primary-blue font-medium">Product Manager</p>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-4">
                                <a href="#" class="inline-block full-radius border py-2 px-8"><img
                                        src="../src/assets/arrow-left-black.svg" alt="" /></a>
                            </div>
                            <div>
                                <a href="#" class="inline-block full-radius border py-2 px-8"><img
                                        src="../src/assets/arrow-right-black.svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <p class="gray-500 font-medium mt-8">
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
    <section class="my-40 relative find-job-platform">
        <div class="container-small">
            <div class="bc-slate-200 py-20 px-14" style="border-radius: 45px">
                <div class="grid gap-x-8 gap-y-4 grid-cols-2">
                    <div>
                        <p class="inline-block bc-primary-blue text-lg text-white px-6 py-2 full-radius">
                            Let’s Find Your Dream Job
                        </p>
                        <h1 class="text-6xl my-4 w-3/4 font-bold gray-800">
                            Ready To Take Your Career To The Next Level?
                        </h1>
                        <p class="gray-500 font-medium">
                            Stop searching, start finding. Work-Force Merge goes beyond
                            basic job boards. Get matched with the perfect opportunities and
                            land your dream job faster. Sign up today!
                        </p>
                    </div>
                    <div>
                        <div
                            class="bc-blue-100 rounded-xl py-2 px-4 w-72 find-job-platform-ticket find-job-platform-ticket-fixed">
                            <div class="flex items-center justify-between">
                                <span class="gray-500 font-medium">Dribbble</span>
                                <span><img src="../src/assets/dribble.svg" class="ml-20" alt="" /></span>
                            </div>
                            <p class="gray-800 font-bold text-xl w-3/4">
                                Senior Product Manager
                            </p>
                        </div>
                        <div class="bc-green-100 rounded-xl py-2 px-4 w-72 find-job-platform-ticket">
                            <div class="flex items-center justify-between">
                                <span class="gray-500 font-medium">Figma</span>
                                <span><img src="../src/assets/figma.svg" class="ml-20" alt="" /></span>
                            </div>
                            <p class="gray-800 font-bold text-xl w-3/4">
                                Snr. Motion Designer
                            </p>
                        </div>
                        <img src="../src/assets/banner-small-blue.svg" alt="" />
                        <div class="flex w find-job-platform-form">
                            <div class="form-control">
                                <div class="form-input-icon input-left-icon">
                                    <input type="email" name="email" id="email"
                                        class="form-input m-0 full-radius" placeholder="Enter your email"
                                        autocomplete="off" />
                                    <span class="input_icon input_icon_left">
                                        <img src="../src/assets/envelope.svg" class="ml-2" alt="arrow" /></span>
                                </div>
                            </div>
                            <a href="#" class="btn-blue btn inline-block full-radius">get started</a>
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
            <div class="grid gap-x-8 gap-y-4 grid-cols-2">
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
