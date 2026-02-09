<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Explaining Strategy</title>

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"  type="image/x-icon">

        <meta name="description" content="The Explaining Strategy LIVE online course is aimed at connecting the dots of the key concepts, theories, and frameworks that are placed at the foundation of the Strategy, providing an integrative view that allows us to separate the signal from the noise in understanding how Strategy should best be built and managed, powered by AI.">
        <meta property="og:title" content="Explaining Strategy">
        <meta property="og:description" content="The Explaining Strategy LIVE online course is aimed at connecting the dots of the key concepts, theories, and frameworks that are placed at the foundation of the Strategy, providing an integrative view that allows us to separate the signal from the noise in understanding how Strategy should best be built and managed, powered by AI.">
        <meta property="og:image" content="https://explaining-strategy.com/images/hero/cover_image.jpg">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://explaining-strategy.com">

        <meta name="google" value="notranslate">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@m_ionescu">
        <meta name="twitter:title" content="Explaining Strategy">
        <meta name="twitter:description" content="The Explaining Strategy LIVE online course is aimed at connecting the dots of the key concepts, theories, and frameworks that are placed at the foundation of the Strategy, providing an integrative view that allows us to separate the signal from the noise in understanding how Strategy should best be built and managed, powered by AI.">
        <meta name="twitter:image" content="https://explaining-strategy.com/images/hero/cover_image.jpg">
        <meta name="robots" content="max-image-preview:large">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/figtree.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/prompt.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/roboto.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/poppins.css') }}" />

        <!-- Cookies & Compliance -->
        <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/37782721ccb4d4999565c214/script.js"></script>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .parallax, .parallax1 { background-image: url("{{ asset('images/hero/meeting-quote.jpg') }}"); height: 400px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; }
            .parallax1 { background-image: url("{{ asset('images/hero/meeting-quote1.jpg') }}"); }
            .home-section { background-color: black; background-image: url("{{ asset('images/hero/full-background17.jpg') }}"); background-position: top right -100px; background-repeat: no-repeat; }
            .dark-switch {  display: block; } .menu-switch {  display: none; }
            .shadow { box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }
            @media screen and (max-width: 1366px) { .parallax, .parallax1 { background-attachment: scroll; }}
            @media screen and (max-width: 1200px) { .parallax, .parallax1 { height: 300px; }}
            @media screen and (max-width: 1058px) { .parallax, .parallax1 { height: 200px; }}
            @media screen and (max-width: 992px) { .home-section { background-image: none !important; } .dark-switch { display: none; } .menu-switch { display: block; }}
        </style>
    </head>
    <body class="antialiased font-poppins min-w-[360px] w-full max-w-full inset-0 bg-white dark:bg-[#14102C] content-center" dir="{{ (App::isLocale('ar') ? 'rtl' : 'ltr') }}"
          x-data="{ scrolledFromTop: false, showModal: 'showModal' }"
          x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
          @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
          @keydown.escape="showModal = false"
    >
        <!-- Header start -->
        <header class="fixed top-0 flex items-center mx:auto px-4 sm:px-6 lg:px-8 w-full max-w-full justify-between pl-4 pt-2 z-50 "
                :class="scrolledFromTop ? ' bg-white dark:bg-[#14102C] bg-opacity-80 dark:bg-opacity-60 backdrop-blur-sm' : ' bg-[#F2F0FE] dark:bg-[#14102C] bg-opacity-90 dark:bg-opacity-70'">
            <!-- Logo -->
            <div class="min-w-[100px]">
                <a href="#home" class="menu-scroll block py-2 ml-2" :class="scrolledFromTop && '!py-4 lg:!py-2'">
                    <img src="{{ asset('images/logo/logo-course.png') }}" alt="logo" width="137" height="57" />
                </a>
            </div>

            <!-- Menu -->
            <div x-data="{ navbarOpen: false, dropdownOpen: false }"
                 class="flex items-center justify-end px-2">
            <!-- Menu button -->
                <button id="navbarToggler"
                        @click="navbarOpen = !navbarOpen"
                        :class="navbarOpen && 'navbarTogglerActive'"
                        class="absolute lg:hidden right-4 top-1/2 block -translate-y-1/2 rounded-xl px-2 py-[6px] ring-primary focus:ring-2">
                            <span :class="navbarOpen && 'rotate-45 top-[7px]' "
                                  class="relative my-[6px] block h-[2px] w-[30px] bg-black dark:bg-white"></span>
                    <span :class="navbarOpen && 'opacity-0' "
                          class="relative my-[6px] block h-[2px] w-[30px] bg-black dark:bg-white"></span>
                    <span :class="navbarOpen && 'top-[-8px] rotate-[135deg]' "
                          class="relative my-[6px] block h-[2px] w-[30px] bg-black dark:bg-white"></span>
                </button>

                <!-- Menu items -->
                <nav id="navbarCollapse" :class="!navbarOpen && 'hidden'"
                     class="absolute top-full lg:absolute lg:top-0 mt-1 right-[10px] lg:right-[350px] xl:right-[450px] lg:block lg:w-[550px] xl:w-[580px] lg:max-w-full px-4 pt-6 pb-4 lg:pt-2 bg-white dark:bg-[#14102C] lg:bg-transparent dark:lg:bg-transparent">
                    <ul class="block lg:flex text-3xl lg:text-lg font-roboto">
                        <li class="menu-switch items-center text-gray-700 dark:text-gray-300">
                            <div class="w-[120px] mx-auto md:w-full mr-4 mb-4">
                                <label for="darkTogglerMenu" class="flex px-2 h-11 cursor-pointer items-center justify-center rounded-full bg-white dark:bg-gray-800 rounded-xl bg-opacity-20 dark:bg-[#1E2763]">
                                    <input type="checkbox" name="darkToggler" id="darkTogglerMenu" class="sr-only" aria-label="darkToggler"/>
                                    <span class="flex h-8 w-8 mr-4 items-center justify-center rounded-full bg-white dark:bg-gray-800 rounded-xl text-white dark:bg-transparent dark:text-gray-300">
                                        <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M4.50663 3.2267L3.30663 2.03337L2.36663 2.97337L3.55996 4.1667L4.50663 3.2267ZM2.66663 7.00003H0.666626V8.33337H2.66663V7.00003ZM8.66663 0.366699H7.33329V2.33337H8.66663V0.366699ZM13.6333 2.97337L12.6933 2.03337L11.5 3.2267L12.44 4.1667L13.6333 2.97337ZM11.4933 12.1067L12.6866 13.3067L13.6266 12.3667L12.4266 11.1734L11.4933 12.1067ZM13.3333 7.00003V8.33337H15.3333V7.00003H13.3333ZM7.99996 3.6667C5.79329 3.6667 3.99996 5.46003 3.99996 7.6667C3.99996 9.87337 5.79329 11.6667 7.99996 11.6667C10.2066 11.6667 12 9.87337 12 7.6667C12 5.46003 10.2066 3.6667 7.99996 3.6667ZM7.33329 14.9667H8.66663V13H7.33329V14.9667ZM2.36663 12.36L3.30663 13.3L4.49996 12.1L3.55996 11.16L2.36663 12.36Z"/>
                                        </svg>
                                    </span>
                                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-grey text-gray-700 dark:bg-white dark:bg-gray-800 rounded-xl dark:text-white">
                                        <svg class="fill-current" width="13" height="15" viewBox="0 0 13 15">
                                            <path d="M10.6111 12.855C11.591 12.1394 12.3151 11.1979 12.7723 10.1623C10.4824 10.4065 8.1342 9.46314 6.67948 7.47109C5.22476 5.47905 5.04093 2.95516 5.97054 0.848179C4.84491 0.968503 3.72768 1.37162 2.74781 2.08719C-0.224105 4.25747 -0.874706 8.43084 1.29558 11.4028C3.46586 14.3747 7.63923 15.0253 10.6111 12.855Z"/>
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        </li>
                        <li class="text-gray-700 dark:text-gray-300">
                            <a href="#home" @click="navbarOpen = !navbarOpen" class="scroll-menu menu-scroll flex py-2 lg:ml-7 lg:inline-flex lg:py-5 xl:ml-10 2xl:ml-12 text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                <span class="hidden lg:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                </span>
                                <span class="block lg:hidden">Home</span>
                            </a>
                        </li>
                        <li class="text-gray-700 dark:text-gray-300">
                            <a href="#overview" @click="navbarOpen = !navbarOpen" class="scroll-menu menu-scroll flex py-2 lg:ml-7 lg:inline-flex lg:py-5 xl:ml-10 2xl:ml-12 text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                Overview
                            </a>
                        </li>
                        <li>
                            <a href="#curriculum" @click="navbarOpen = !navbarOpen" class="scroll-menu menu-scroll flex py-2 lg:ml-7 lg:inline-flex lg:py-5 xl:ml-10 2xl:ml-12 text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                Curriculum
                            </a>
                        </li>
                        <li>
                            <a href="#schedule" @click="navbarOpen = !navbarOpen" class="scroll-menu menu-scroll flex py-2 lg:ml-7 lg:inline-flex lg:py-5 xl:ml-10 2xl:ml-12 text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                Schedule
                            </a>
                        </li>
                        <li>
                            <a href="#enroll" @click="navbarOpen = !navbarOpen" class="scroll-menu menu-scroll flex py-2 lg:ml-7 lg:inline-flex lg:py-5 xl:ml-10 2xl:ml-12 text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                Enrollment
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/certificates') }}" @click="navbarOpen = !navbarOpen" class="flex py-2 lg:ml-7 lg:inline-flex lg:py-5 xl:ml-10 2xl:ml-12 text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                Certification
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Buttons section -->
                <div class="absolute right-[60px] lg:right-4 flex w-[240px] px-4">
                    <!-- Dark toggler -->
                    <div class="dark-switch w-full max-w-[150px] mr-4">
                        <label for="darkToggler" class="flex max-w-[150px] px-2 h-11 cursor-pointer items-center justify-center rounded-full bg-gray-400 dark:bg-blue-900 rounded-full dark:bg-[#1E2763]">
                            <input type="checkbox" name="darkToggler" id="darkToggler" class="sr-only" aria-label="darkToggler"/>
                            <span class="flex h-8 w-8 mr-4 items-center justify-center bg-blue-200 dark:bg-transparent text-gray-700 dark:text-blue-200 rounded-full">
                                <svg class="text-orange-500" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M4.50663 3.2267L3.30663 2.03337L2.36663 2.97337L3.55996 4.1667L4.50663 3.2267ZM2.66663 7.00003H0.666626V8.33337H2.66663V7.00003ZM8.66663 0.366699H7.33329V2.33337H8.66663V0.366699ZM13.6333 2.97337L12.6933 2.03337L11.5 3.2267L12.44 4.1667L13.6333 2.97337ZM11.4933 12.1067L12.6866 13.3067L13.6266 12.3667L12.4266 11.1734L11.4933 12.1067ZM13.3333 7.00003V8.33337H15.3333V7.00003H13.3333ZM7.99996 3.6667C5.79329 3.6667 3.99996 5.46003 3.99996 7.6667C3.99996 9.87337 5.79329 11.6667 7.99996 11.6667C10.2066 11.6667 12 9.87337 12 7.6667C12 5.46003 10.2066 3.6667 7.99996 3.6667ZM7.33329 14.9667H8.66663V13H7.33329V14.9667ZM2.36663 12.36L3.30663 13.3L4.49996 12.1L3.55996 11.16L2.36663 12.36Z"/>
                                </svg>
                            </span>
                            <span class="flex h-8 w-8 items-center justify-center bg-transparent dark:bg-white text-gray-700 dark:text-blue-200 rounded-full ">
                                <svg class="text-orange-500" width="13" height="15" viewBox="0 0 13 15">
                                    <path d="M10.6111 12.855C11.591 12.1394 12.3151 11.1979 12.7723 10.1623C10.4824 10.4065 8.1342 9.46314 6.67948 7.47109C5.22476 5.47905 5.04093 2.95516 5.97054 0.848179C4.84491 0.968503 3.72768 1.37162 2.74781 2.08719C-0.224105 4.25747 -0.874706 8.43084 1.29558 11.4028C3.46586 14.3747 7.63923 15.0253 10.6111 12.855Z"/>
                                </svg>
                            </span>
                        </label>
                    </div>

                    <div class="sm:flex z-10 ml-auto mr-4 md:mr-0">
                        <a href="https://explaining-strategy.disco.co/login" target="_blank" title="Login to Disco" class="flex h-11 px-6 py-2 items-center justify-center bg-white dark:bg-gray-800 rounded-xl border border-gray-400 text-base font-semibold text-gray-700 hover:bg-gray-200 hover:border-black dark:hover:border-gray-600 hover:text-orange-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-orange-300">
                            Login
                        </a>
                    </div>
                </div>
                <!-- End buttons section -->
            </div>
        <!-- End menu -->
        </header>
        <!-- Header end -->

        <div id="content" class="relative top-30 z-0 h-full w-full">

            <!-- Hero Section start -->
            <div id="home" class="home-section w-full max-w-full z-10 mx-auto px-4 sm:px-6 lg:px-8 text-left pt-20 xs:pt-30 lg:pt-40 pb-2 min-h-screen lg:min-h-[100svh] bg-[url('https://www.explaining-strategy.com/images/hero/full-background17.jpg')] bg-no-repeat bg-right bg-cover">
                <div class="w-full">
                    <div class="w-full items-center">
                        <!-- Hero text -->
                        <div class="w-full lg:w-3/5 px-4 z-10">
                            <div class="mb-4 w-full pb-4">
                                <h1 class="w-full font-bold text-3xl leading-tight md:leading-tight xs:text-center lg:text-left sm:max-w-lg mx-4 sm:ml-0 mb-4 ml-0 text-ocre">
                                    <span class="font-lg text-blue-700 dark:text-orange-400">The AI-Powered Strategy</span>
                                </h1>
                                <div class="w-full text-lg text-white mb-8">
                                    <p class="mb-4">
                                        Strategy is not simple, but it is built on simple concepts. This practice-focused live course helps us clarify these concepts and how they are assembled into a logical construct that AI can now take control of, with humans-in-the-loop.
                                    </p>
                                    <p class="mb-6">
                                        <a href="https://www.linkedin.com/in/mionescu/" target="_blank" title="LinkedIn Profile" class="text-orange-500 hover:text-orange hover:underline"><b>Mihai Ionescu</b></a>
                                        has worked for the past almost 20 years to connect the dots of
                                        Strategy's relevant concepts, theories, and best practices, putting together an integrative Strategy workflow that today is AI-powered.
                                    </p>
                                    <p class="mb-4">
                                        <span class="font-bold text-orange dark:text-ocre">THE ONLY STRATEGY COURSE WITH PRACTICE SESSIONS 100% AI-POWERED!</span>
                                    </p>
                                </div>
                                <h1 class="sm:flex gap-8 text-2xl items-center lg:text-left sm:max-w-xl mt-8 mb-8">
                                    <div class="font-lg text-blue-700 dark:text-orange-400 font-bold text-ocre">
                                        April 7-30, 2026
                                    </div>
                                    <div class="flex flex-row item-center justify-center gap-2 mt-2">
                                        <a href="https://rapidstrategy.ai" target="_blank">
                                            <img src="{{ asset('images/hero/RapidStrategy_logo.png') }}" alt="Open"
                                                 class="w-[120px] h-[120px]">
                                        </a>
                                        <a href="#enroll" class="scroll-menu menu-scroll">
                                            <img src="{{ asset('images/hero/fair-pricing.png') }}" alt="Enroll!"
                                                 class="w-[120px] h-[120px] rounded-full">
                                        </a>
                                    </div>
                                </h1>
                                <div class="hidden md:flex items-center gap-8 mt-12">
                                    <a href="#enroll" class="scroll-menu whitespace-nowrap menu-scroll mt-6 py-2 px-10 text-base font-bold rounded-xl transition-all rounded-xl border text-gray-200 hover:bg-gray-200 hover:border-black dark:hover:border-gray-600 hover:text-orange-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-orange-300">
                                        Enroll Now
                                    </a>
                                    <div class="text-center">
                                        <div class="whitespace-nowrap text-center text-white -mt-2 mb-3">
                                            Watch Intro
                                        </div>
                                        <button class-="px-3 py-1 text-center" x-data x-on:click="$dispatch('open-modal')">
                                    <span class="w-[60px] h-[60px] rounded-full inline-flex items-center justify-center rounded-full border text-gray-200 hover:bg-gray-200 hover:border-black dark:hover:border-gray-600 hover:text-orange-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-orange-300">
                                        <svg class="fill-current" width="15" height="18" viewBox="0 0 15 18">
                                            <path d="M15 9L-8.15666e-07 17.6603L-5.85622e-08 0.339746L15 9Z"/>
                                        </svg>
                                    </span>
                                        </button>
                                    </div>
                                    <!-- Countdown Timer -->
                                    <div class="flex flex-wrap items-center justify-start">
                                        <div class="w-full">
                                            <div class="countdown whitespace-nowrap text-white text-center">
                                                Time until course start:<br />
                                                <a href="#schedule" class="scroll-menu menu-scroll text-base text-orange-500 transition-all hover:text-orange-500">
                                                    <div class="gap-8 justify-center">
                                                        <div class="flex flex-wrap my-2 py-2 justify-center gap-4 bg-white dark:bg-gray-800 rounded-full ml-auto mr-auto bg-opacity-20 rounded-full w-60 z-30"
                                                             x-data="timer()" x-init="countdown()">
                                                            <div class="flex w-12 h-12 content-center rounded-full">
                                                                <div class="text-white m-auto  text-center leading-none">
                                                                    <div id="days" class="block font-bold text-xl -mt-1 invisible" x-text="days">0</div>
                                                                    <div class="block text-xs -mt-1">Days</div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-12 h-12 content-center rounded-full">
                                                                <div class="text-white m-auto text-center">
                                                                    <div id="hours" class="block font-bold text-xl -mt-1 1 invisible" x-text="hours">0</div>
                                                                    <div class="block text-xs -mt-1">Hours</div>
                                                                </div>
                                                            </div>
                                                            <div class="flex w-12 h-12 content-center rounded-full">
                                                                <div class="text-white m-auto text-center">
                                                                    <div id="minutes" class="block font-bold text-xl -mt-1 1 invisible" x-text="minutes">0</div>
                                                                    <div class="block text-xs -mt-1">Min</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouncer button -->
                <div class="bouncer w-full mt-8 px-4">
                    <div class="hidden lg:block items-center">
                        <div class="animate-bounce w-8 mx-auto">
                            <a href="#overview" class="scroll-menu menu-scroll text-center">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="md:ml-auto md:mr-auto h-6 w-6 bi bi-chevron-double-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="white"></path>
                                    <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero end -->

            <!-- Overview Section start -->
            <div class="w-full min-w-[360px] max-w-full pt-[120px] pb-16 z-10 mx:auto px-4 sm:px-6 lg:px-8 bg-white dark:bg-[#14102C]">
                <!-- Features Top Section -->
                <div id="overview" class="mx-auto pt-[120px] mb-12 max-w-[590px] text-center">
            <span class="mb-3 text-3xl font-bold uppercase text-orange-500">
                OVERVIEW
            </span>
                    <h2 class="my-4 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                        A Course to Remember
                    </h2>
                    <p class="text-lg font-medium text-gray-700 dark:text-gray-300">
                        This is not a motivational lecture. It is a course that provides a solid, practice-based, instrumental blueprint for managing the Strategy. It is the first ever Strategy course with practice sessions that are 100% AI-powered. How do we do this? By using the new breakthrough <a href="https://rapidstrategy.ai">RapidStrategy</a> platform.
                    </p>
                </div>
                <!-- Features Row 1 -->
                <div class="-mx-4 flex flex-wrap">
                    <!-- Feature 1 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[250px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="pt-4">
                                <h3 class="mb-3 text-xl font-bold text-black dark:text-ocre sm:text-3xl lg:text-xl xl:text-3xl">
                                    <div class="flex w-full justify-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="37" width="55" viewBox="0 0 640 512" class="mt-[2px]">
                                                <path opacity="1" fill="#8b5cf6" d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                                            </svg>
                                        </div>
                                        <div class="font-lg text-blue-700 dark:text-orange-400 font-thin">Integrative</div>
                                    </div>
                                </h3>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    Strategy is inherently integrative. That is why this course provides a framework and toolset for managing
                                    the full Strategy cycle, from formulation to execution, and back, enabled by experimentation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[250px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="pt-4">
                                <h3 class="mb-3 text-xl font-bold text-black dark:text-ocre sm:text-3xl lg:text-xl xl:text-3xl">
                                    <div class="flex w-full justify-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="37" width="55" viewBox="0 0 640 512">
                                                <path opacity="1" fill="#8b5cf6" d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.7 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/>
                                            </svg>
                                        </div>
                                        <div class="font-lg text-blue-700 dark:text-orange-400 font-thin">Interactive</div>
                                    </div>
                                </h3>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    A course delivered LIVE, online, with two types of sessions: Course Sessions and Practice Sessions.
                                    The AI-powered practice environment allows us to accommodate multiple participants, each working on his/her own Case Study.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[250px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="pt-4">
                                <h3 class="mb-3 text-xl font-bold text-black dark:text-ocre sm:text-3xl lg:text-xl xl:text-3xl">
                                    <div class="flex w-full justify-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="35" width="50" viewBox="0 0 640 512">
                                                <path opacity="1" fill="#8b5cf6" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                            </svg>
                                        </div>
                                        <div class="font-lg text-blue-700 dark:text-orange-400 font-thin">Cohort-Based</div>
                                    </div>
                                </h3>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    One Courses session + one Practice session per week. Five weeks, with a Kick-off session before and a Wrap-up after.
                                    Four time-zone based cohorts, with the sessions scheduled at comfortable times for all participants.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[250px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="pt-4">
                                <h3 class="mb-3 text-xl font-bold text-black dark:text-ocre sm:text-3xl lg:text-xl xl:text-3xl">
                                    <div class="flex w-full justify-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="42" width="60" viewBox="0 0 256 256">
                                                <path opacity="1" fill="#8b5cf6" d="M152,96H104a8,8,0,0,0-8,8v48a8,8,0,0,0,8,8h48a8,8,0,0,0,8-8V104A8,8,0,0,0,152,96Zm-8,48H112V112h32Zm88,0H216V112h16a8,8,0,0,0,0-16H216V56a16,16,0,0,0-16-16H160V24a8,8,0,0,0-16,0V40H112V24a8,8,0,0,0-16,0V40H56A16,16,0,0,0,40,56V96H24a8,8,0,0,0,0,16H40v32H24a8,8,0,0,0,0,16H40v40a16,16,0,0,0,16,16H96v16a8,8,0,0,0,16,0V216h32v16a8,8,0,0,0,16,0V216h40a16,16,0,0,0,16-16V160h16a8,8,0,0,0,0-16Zm-32,56H56V56H200v95.87s0,.09,0,.13,0,.09,0,.13V200Z"/>
                                            </svg>
                                        </div>
                                        <div class="font-lg text-blue-700 dark:text-orange-400 font-thin">AI-powered</div>
                                    </div>
                                </h3>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    The 32 stages of Strategy's cycle workflow allow us to have our workstream guided by AI.
                                    This turns the famous "Generate Strategy" button into a reality that we use within course's practice sessions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[250px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="pt-4">
                                <h3 class="mb-3 text-xl font-bold text-black dark:text-ocre sm:text-3xl lg:text-xl xl:text-3xl">
                                    <div class="flex w-full justify-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="66" viewBox="0 0 24 24">
                                                <path fill="none" stroke="#8b5cf6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                            </svg>
                                        </div>
                                        <div class="font-lg text-blue-700 dark:text-orange-400 font-thin pt-1">Fair Pricing</div>
                                    </div>
                                </h3>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    A course tailored to anyone's pocket, wherever they live in the free world. The enrollment fee
                                    is calculated based on your country's GDP per capita, using <a href="https://www.worldbank.org/en/programs/icp/brief/VC_Uses" target="_blank" class="text-orange-500">World Bank</a>'s data and the Purchasing Power Parity index.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 6 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3 z-10">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[250px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="pt-4">
                                <h3 class="mb-3 text-xl font-bold text-black dark:text-ocre sm:text-3xl lg:text-xl xl:text-3xl">
                                    <div class="flex w-full justify-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="42" width="60" viewBox="0 0 24 24">
                                                <path fill="none" stroke="#8b5cf6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
                                            </svg>
                                        </div>
                                        <div class="font-lg text-blue-700 dark:text-orange-400 font-thin">Multilingual</div>
                                    </div>
                                </h3>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    The Explaining Strategy course provides the participants with the ability to watch the course sessions
                                    font-lg text-blue-700 dark:text-orange-400d in their own language, in real time. The session transcript notes are also multilingual.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feedback Top Section -->
                <div id="overview" class="mx-auto pt-[120px] mb-2 max-w-[590px] text-center">
                    <h2 class="my-4 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                        The Feedback
                    </h2>
                    <p class="text-lg font-medium text-gray-700 dark:text-gray-300">
                        The previous nine course editions have provided very valuable calibration data, but also a good feedback
                        from many of the 300+ Strategy practitioners and consultants from five continents and 46 countries who have enrolled in the course.
                    </p>
                </div>
                <!-- Participants Map -->
                <div class="mx-auto pt-2 pb-12 items-center">
                    <img src="{{ asset('images/hero/participants_map-l.png') }}" alt="diagram" class="lg:w-4/5 md:w-full mx-auto dark:hidden"/>
                    <img src="{{ asset('images/hero/participants_map-dark.png') }}" alt="diagram" class="hidden lg:w-4/5 md:w-full mx-auto dark:block"/>
                </div>
                <!-- Feedback -->
                <div class="-mx-4 mt-8 flex flex-wrap">
                    <!-- Feedback 1 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Khalid_Noor.jpeg') }}" width="80" height="80" class="rounded-full" alt="Khalid Noor">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "The Strategy program has been very rigorous with deep insight into the practice of Strategy.
                                    Applying all the knowledge to a case study helped clarify this."<br /><br />
                                    <a href="https://www.linkedin.com/in/khalidnoor/" target="_blank" class="text-orange-500"><b>Khalid Noor</b></a>, Consultant, Chief Finance Officer (Pakistan)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 2 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Dan_Stamate.jpg') }}" width="80" height="80" class="rounded-full" alt="Dan Stamate">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "The course was indeed exceptional and helped us, the trainees, to significantly
                                    improve our Strategy knowledge and to get a very useful toolkit."<br /><br />
                                    <a href="https://www.linkedin.com/in/dan-stamate-b0381a16/" target="_blank" class="text-orange-500"><b>Dan Stamate</b></a>, Freelance Business Consultant and Trainer (Romania)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 3 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Marc_Woerner.jpeg') }}" width="80" height="80" class="rounded-full" alt="Marc Woerner">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "A special thanks for customizing for us and the patience for deep explaining!
                                    In my opinion the most sophisticated concept I have seen. A lot of work has been done!"<br /><br />
                                    <a href="https://www.linkedin.com/in/marc-woerner/" target="_blank" class="text-orange-500"><b>Marc Woerner</b></a>, Business Development and Key Account Manager (Germany)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 4 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Andrew_Constable.jpeg') }}" width="80" height="80" class="rounded-full" alt="Andrew_Constable">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "The Strategy Clockwork is a great process for a well-thought-out and in-depth strategy management process."<br /><br />
                                    <a href="https://www.linkedin.com/in/andrewconstable-mba/" target="_blank" class="text-orange-500"><b>Andrew Constable</b></a>, Principal Managing Partner (United Kingdom)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 5 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Paolo_Matteini.jpeg') }}" width="80" height="80" class="rounded-full" alt="Paolo Matteini">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "Thanks for sharing with us your experience and knowledge. Excellent job!"<br /><br />
                                    <a href="https://www.linkedin.com/in/paolo-matteini/" target="_blank" class="text-orange-500"><b>Paolo Matteini</b></a>,  Executive General Manager (Italy)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 6 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3 z-10">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Sheraz_Anwar.jpeg') }}" width="80" height="80" class="rounded-full" alt="Sheraz Anwar">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "Thanks a lot for your productive insights on strategy cycle. Great experience indeed. Your expertise makes this course very helpful. "<br /><br />
                                    <a href="https://www.linkedin.com/in/sheraz-anwar-49570913/" target="_blank" class="text-orange-500"><b>Sheraz Anwar</b></a>, Group Strategic Excellence Manager (Saudi Arabia)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 7 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Ahmad_Salman_Khan.jpg') }}" width="80" height="80" class="rounded-full" alt="Ahmad Salman Khan">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "Completing the 'Explaining The Strategy' course has led to so many 'Aha!' moments for me, each one uncovering layers of depth and nuance that challenge conventional thinking."<br /><br />
                                    <a href="https://www.linkedin.com/in/ahmad-salman-khan-m-b-a-ib-sc-eng-i-pfmp-i-pgmp-iglobal-prize-winner-6595ba50/" target="_blank" class="text-orange-500"><b>Ahmad Salman Khan</b></a>, Senior O&M Enablement Manager (Saudi Arabia)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 8 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Debasis_Sengupta.jpg') }}" width="80" height="80" class="rounded-full" alt="Debasis Sengupta">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "This is a great course. I learned a lot, and now I understand the workflow of Strategy formulation and execution. The visual representations are very useful."<br /><br />
                                    <a href="https://www.linkedin.com/in/debasissenguptaa/" target="_blank" class="text-orange-500"><b>Debasis Sengupta</b></a>,  Leadership Coach and Trainer (India)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 9 -->
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3 z-10">
                        <div class="mx-auto mb-14 max-w-[370px] min-h-[316px] text-center px-4 py-4 bg-blue-400 dark:bg-gray-800 rounded-xl bg-opacity-10 shadow">
                            <div class="mb-3 text-xl font-bold text-black dark:text-white sm:text-3xl lg:text-xl xl:text-3xl">
                                <div class="flex w-full -scroll-mt-20 justify-center">
                                    <img src="{{ asset('images/feedback/Mariana_Radov.jpg') }}" width="80" height="80" class="rounded-full" alt="Mariana Radov">
                                </div>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700 dark:text-gray-300 text-lg lg:text-base">
                                    "The course provided a comprehensive and structured framework that combined theoretical knowledge with practical applications."<br /><br />
                                    <a href="https://www.linkedin.com/in/mariana-radov-27736b41/" target="_blank" class="text-orange-500"><b>Mariana Radov</b></a>, Expert in Management Consulting (Rep. Moldova)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Overview Section end -->

            <!-- Curriculum Section start -->
            <section id="curriculum" class="w-full min-w-[360px] max-w-full mx:auto px-4 sm:px-6 lg:px-8 align-center bg-[#F2F0FE] dark:bg-[#14102C]">
                <div class="w-full pb-12 px-2 bg-[#F2F0FE] dark:bg-[#14102C]">
                    <div class="pt-[120px] md:w-3/4 text-center items-center ml-auto mr-auto">
                <span class="mb-3 text-3xl font-bold uppercase text-orange-500">
                    CURRICULUM
                </span>
                        <h2 class="my-4 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                            The Strategy Clockwork
                        </h2>
                        <p class="text-lg lg:text-base max-w-[800px] mx-auto font-medium text-gray-700 dark:text-gray-300 lg:max-width:60%">
                            The course is based on a unique, <b>integrative framework</b> that links the main
                            Strategy Formulation and Strategy Execution processes, enabled by Strategy Experimentation.
                            A framework covering the full Strategy cycle. During this course we explore this cycle in detail and experiment
                            with its inter-linked concepts, theories, methodology stages, and templates, using our dedicated AI workhorse.
                        </p>
                    </div>
                </div>

                <div class="border-box pb-8 w-full min-w-[360px] bg-[#F2F0FE] dark:bg-[#14102C]">
                    <div>
                        <div class="w-full px-2 content-center">
                            <img src="{{ asset('images/hero/strategy-clockwork.png') }}" alt="diagram" class="block w-full lg:w-4/5 mx-auto dark:hidden"/>
                            <img src="{{ asset('images/hero/strategy-clockwork-dark.png') }}" alt="diagram" class="hidden w-full lg:w-4/5 mx-auto dark:block"/>
                        </div>
                    </div>
                </div>
                <!-- Parallax image -->
                <div class="parallax1 hidden lg:block w-full min-w-[360px] content-center"></div>
            </section>

            <!-- Course Module 1 -->
            <section class="w-full min-w-[360px] max-w-full pb-8 mx:auto px-4 sm:px-6 lg:px-8 align-center bg-[#F2F0FE] dark:bg-[#14102C]">
                <div class="w-full pb-12 px-2 bg-[#F2F0FE] dark:bg-[#14102C]">
                    <div class="py-4 px-2 sm:py-4 lg:px-8 xl:px-14">
                        <div class="-mx-4 flex flex-wrap items-center">
                            <div class="w-full lg:w-1/2">
                                <div class="mb-4 flex items-center justify-center lg:mb-0">
                                    <div id="chart">
                                        <img src="{{ asset('images/hero/strategy-formulation-1.png') }}" alt="diagram" class="w-full mx-auto dark:hidden"/>
                                        <img src="{{ asset('images/hero/strategy-formulation-1-dark.png') }}" alt="diagram" class="hidden w-full mx-auto dark:block"/>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <div class="mb-4">
                                <span class="mb-3 mt-3 text-lg font-bold uppercase text-orange-500 sm:text-xl">
                                  MODULE #1
                                </span>
                                    <h2 class="mb-3 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Strategy Formulation 1
                                    </h2>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300">
                                        In the <b>Course Session</b> we discuss the Strategy Experimentation stages (Product Experimentation, Choices Experimentation),
                                        and the first two Strategy Formulation stages: Trends & Signals Spyglass (Strategic Analysis and Scenario Planning), and the Choices Compass (selection of the Strategic Choices mix).
                                        The session also introduces the Penta Model, which is the reference cognitive model for Strategic Choices employed within the Choices Compass.
                                    </p>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 mt-4">
                                        In the <b>Practice Session</b>, we ask the AI model to build in each Case Study the Strategy model components, by using the Opportunities & Threats,
                                        the Paramount Challenges, the Strategic Horizon (industry inflection point), Scenario Planning, and the Strategic Choices selection.
                                        Then, each participant validates and refines them, as human-in-the-loop (HITL).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Course Module 2 -->
            <section class="w-full min-w-[360px] max-w-full pb-8 mx:auto px-4 sm:px-6 lg:px-8 align-center bg-[#F2F0FE] dark:bg-[#14102C]">
                <div class="w-full pb-12 px-2 bg-[#F2F0FE] dark:bg-[#14102C]">
                    <div class="py-4 px-2 sm:py-4 lg:px-8 xl:px-14">
                        <div class="-mx-4 flex flex-wrap items-center">
                            <div class="w-full px-2 lg:w-1/2">
                                <div class="pt-8 mb-2">
                                <span class="mb-3 mt-6 text-lg font-bold uppercase text-orange-500 sm:text-xl">
                                  MODULE #2
                                </span>
                                    <h2 class="mb-3 mt-3 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Strategy Formulation 2
                                    </h2>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300">
                                        In the <b>Course Session</b> we clarify the methodology for identifying the Activities & Capabilities required to support the Strategic Choices,
                                        and for determining the Strategic Gaps (Positioning & Coherence). We analyze the causality dependencies in closing the gaps and break them
                                        down on execution cycles. Finally, we validate the Feasibility of executing our Strategy and the viability of the resulting Business Model.
                                    </p>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 mt-4">
                                        In the <b>Practice Session</b>, we ask the AI model to build in each Case Study the Strategy model components, by using Strategic Choices to Value Propositions translation,
                                        the Required Capabilities system, the Strategic Gaps, the Gaps Closing Planning, and the Feasibility & Viability Validation.
                                        Then, each participant validates and refines them, as human-in-the-loop (HITL).
                                    </p>
                                </div>
                            </div>
                            <div class="w-full px-2 lg:w-1/2">
                                <div class="mb-4 flex items-center justify-center lg:mb-0">
                                    <div id="chart">
                                        <img src="{{ asset('images/hero/strategy-formulation-2.png') }}" alt="diagram" class="w-full mx-auto dark:hidden"/>
                                        <img src="{{ asset('images/hero/strategy-formulation-2-dark.png') }}" alt="diagram" class="hidden w-full mx-auto dark:block"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Course Module 3 -->
            <section class="w-full min-w-[360px] max-w-full pb-8 mx:auto px-4 sm:px-6 lg:px-8 align-center bg-[#F2F0FE] dark:bg-[#14102C]">
                <div class="w-full pb-12 px-2 bg-[#F2F0FE] dark:bg-[#14102C]">
                    <div class="py-4 px-2 sm:py-4 lg:px-8 xl:px-14">
                        <div class="-mx-4 flex flex-wrap items-center">
                            <div class="w-full px-2 lg:w-1/2">
                                <div class="mb-4 flex items-center justify-center lg:mb-0">
                                    <div id="chart">
                                        <img src="{{ asset('images/hero/strategy-execution-1.png') }}" alt="diagram" class="w-full mx-auto dark:hidden"/>
                                        <img src="{{ asset('images/hero/strategy-execution-1-dark.png') }}" alt="diagram" class="hidden w-full mx-auto dark:block"/>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-1/2">
                                <div class="mb-4">
                                <span class="mb-3 mt-3 text-lg font-bold uppercase text-orange-500 sm:text-xl">
                                  MODULE #3
                                </span>
                                    <h2 class="mb-3 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Strategic Planning
                                    </h2>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300">
                                        In the <b>Course Session</b> we discuss the Strategic Planning methodology, developed from the Kaplan-Norton BSC framework,
                                        the Organizational Alignment and the Operational Integration processes. We also explore the Strategy Dialogue (open strategy) best practices
                                        and the Strategy Communication process.
                                    </p>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 mt-4">
                                        In the <b>Practice Session</b>, we watch AI use the Strategic Gaps for building the components of the Strategic Plan model for each participant's Case Study,
                                        based on several practice toolkits, including Strategic Gaps-to-Objectives, the Strategy Map, Initiatives, and Scorecards, together with the Organizational Alignment,
                                        Operational Integration, and Strategy Communication. Then, each participant validates and refines them, as human-in-the-loop (HITL).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Course Module 4 -->
            <section class="w-full min-w-[360px] max-w-full pb-8 mx:auto px-4 sm:px-6 lg:px-8 align-center bg-[#F2F0FE] dark:bg-[#14102C]">
                <div class="w-full pb-12 px-2 bg-[#F2F0FE] dark:bg-[#14102C]">
                    <div class="py-4 px-2 sm:py-4 lg:px-8 xl:px-14">
                        <div class="-mx-4 flex flex-wrap items-center">
                            <div class="w-full px-2 lg:w-1/2">
                                <div class="pt-8 mb-2">
                                <span class="mb-3 mt-6 text-lg font-bold uppercase text-orange-500 sm:text-xl">
                                  MODULE #4
                                </span>
                                    <h2 class="mb-3 mt-3 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Strategic Plan Execution
                                    </h2>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300">
                                        In the <b>Course Session</b> we clarify the methodology for Strategic Initiative's Realization and the Progress Review best practices,
                                        resulting in Corrective Actions. We also clarify the role of the Hypotheses Register in adapting the Strategy model and the Strategic Plan model,
                                        exploring the Early Warning System and the Strategy Adaptation process.
                                    </p>
                                    <p class="text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 mt-4">
                                        In the <b>Practice Session</b>, we practice within each cohort team on the Strategic Plan execution's monitoring for the Case Study driven by AI,
                                        employing a sequence of templates available in the practice workspace. The laser-focused structured prompts allow the AI model to make Corrective Actions
                                        recommendations. Then, each participant, the human-in-the-loop (HITL), validates AI's recommendations.
                                    </p>
                                </div>
                            </div>
                            <div class="w-full px-2 lg:w-1/2">
                                <div class="mb-4 flex items-center justify-center lg:mb-0">
                                    <div id="chart">
                                        <img src="{{ asset('images/hero/strategy-execution-2.png') }}" alt="diagram" class="w-full mx-auto dark:hidden"/>
                                        <img src="{{ asset('images/hero/strategy-execution-2-dark.png') }}" alt="diagram" class="hidden w-full mx-auto dark:block"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="workflow" class="w-full min-w-[360px] max-w-full pb-16 mx:auto px-4 sm:px-6 lg:px-8 align-center bg-white dark:bg-[#14102C]">
                <div class="py-4 md:w-3/4 text-center items-center ml-auto mr-auto">
                    <h2 class="my-4 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                        The Practice Workflow
                    </h2>
                    <div class="grid grid-cols-1 lg:grid-cols-5">
                        <div class="col-span-1 py-2 hidden lg:block">
                            <a href="https://rapidstrategy.ai" target="_blank" class="pr-4">
                                <img src="{{ asset('images/hero/RapidStrategy_logo.png') }}" alt="RapidStrategy" width="120" height="120" class="objet-cover ml-auto mr-4" />
                            </a>
                        </div>
                        <div class="col-span-1 lg:col-span-4 text-lg text-center lg:text-left max-w-[1000px] mx-auto lg:ml-0 text-gray-700 dark:text-gray-300 lg:max-width:60%">
                            The course is <b>Practice-Focused</b>. There are four Practice Sessions that translate the Course Sessions
                            content into a step-by-step AI-powered journey through Strategy Formulation and Strategic Planning. The <a href="https://rapidstrategy.ai" target="_blank" class="text-orange hover:text-blue dark:hover:text-white">RapidStrategy</a>
                            platform allows us to practice 28 out of the 32 steps of Strategy cycle's workflow, becoming a workspace that helps the course participants develop the Strategy and the Strategic Plan
                            guided by AI recommendations for each participant's Case Study. The platform allows the course participants to build their own Case Studies, based on real companies known to them,
                            or on any well-known companies, or on several Case Studies built into the platform.
                        </div>
                    </div>
                </div>

                <div class="border-box pt-4 pb-8 w-full min-w-[360px] bg-white dark:bg-[#14102C]">
                    <div>
                        <div class="w-full content-center my-2">
                            <img src="{{ asset('images/hero/workflow1-l.png') }}" alt="diagram" class="lg:w-4/5 md:w-full mx-auto dark:hidden"/>
                            <img src="{{ asset('images/hero/workflow1-d.png') }}" alt="diagram" class="hidden lg:w-4/5 md:w-full mx-auto dark:block"/>
                        </div>
                        <div class="w-full content-center my-2">
                            <img src="{{ asset('images/hero/workflow2-l.png') }}" alt="diagram" class="lg:w-4/5 md:w-full mx-auto dark:hidden"/>
                            <img src="{{ asset('images/hero/workflow2-d.png') }}" alt="diagram" class="hidden lg:w-4/5 md:w-full mx-auto dark:block"/>
                        </div>
                        <div class="w-full content-center my-2">
                            <img src="{{ asset('images/hero/workflow3-l.png') }}" alt="diagram" class="lg:w-4/5 md:w-full mx-auto dark:hidden"/>
                            <img src="{{ asset('images/hero/workflow3-d.png') }}" alt="diagram" class="hidden lg:w-4/5 md:w-full mx-auto dark:block"/>
                        </div>
                        <div class="w-full content-center mt-6 mb-2">
                            <img src="{{ asset('images/hero/RapidStrategy-screen.png') }}" alt="diagram" class="lg:w-4/5 md:w-full mx-auto"/>
                        </div>
                    </div>
                </div>
                <!-- Parallax image -->
                <div class="parallax hidden lg:block w-full min-w-[360px] content-center"></div>
            </section>

            <!-- Schedule Section start -->
            <section id="schedule" class="w-full min-w-[360px] max-w-full pb-4 mx:auto px-4 sm:px-6 lg:px-8 align-center bg-white dark:bg-[#14102C]">
                <div class="w-full pb-12 px-2 bg-white dark:bg-[#14102C]">
                    <div class="pt-[120px] text-center md:w-3/4 ml-auto mr-auto">
                    <span class="mb-3 text-3xl font-bold uppercase text-orange-500">
                        SCHEDULE
                    </span>
                        <h2 class="mt-4 mb-3 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                            The Cohorts
                        </h2>
                        <p class="text-lg lg:text-base font-medium text-left text-gray-700 dark:text-gray-300 lg:max-width:60%">
                            The course sessions are scheduled for four cohorts, on the same days. Tuesdays for the Course Sessions
                            and Thursdays for the Practice Sessions. For the latter, we use an application (<a href="https://rapidstrategy.ai" target="_blank" class="text-orange-500 hover:text-orange hover:underline">RapidStrategy</a>) that facilitate the logical decisions
                            (based on the <a href="https://strategyclockwork.com" target="_blank" class="text-orange-500 hover:text-orange hover:underline">Strategy Clockwork</a> framework), for building each participant's Case Study models.
                        </p>
                        <p class="text-lg lg:text-base font-medium text-left text-gray-300-1 mt-2 dark:text-gray-300 lg:max-width:60%">
                            Since the cohorts are time-zone-based, the three-hour sessions start at comfortable times for all participants.
                            One cohort for the Americas, one for Europe, Middle East, and Africa (EMEA), one for Asia, and one for the Pacific area.
                        </p>
                        <p class="text-lg lg:text-base font-medium text-left text-gray-300-1 mt-2 dark:text-gray-300 lg:max-width:60%">
                            Between the sessions, the teams have chat channels available on the <a href="https://disco.co" target="_blank" class="text-orange-500 hover:text-orange hover:underline">Disco</a> learning platform
                            that we use for this course.
                            The course uses the 24/7-available multilingual video-conferencing facility provided by <a href="https://meet.google.com" target="_blank" class="text-orange-500 hover:text-orange hover:underline">Google Meet</a>.
                        </p>
                    </div>
                </div>

                <div class="border-box min-w-[360px] w-full bg-white dark:bg-[#14102C]">
                    <div>
                        <div class="w-full content-center px-2">
                            <img src="{{ asset('images/hero/Course_Dates_April2026-light.png') }}" alt="diagram" class="block w-full lg:w-3/5 mx-auto dark:hidden"/>
                            <img src="{{ asset('images/hero/Course_Dates_April2026-dark.png') }}" alt="diagram" class="hidden w-full lg:w-3/5 mx-auto dark:block"/>
                        </div>
                    </div>
                </div>

            </section>

            <section class="w-full min-w-[360px] max-w-full pb-8 mx:auto px-4 sm:px-6 lg:px-8 align-center bg-[#F2F0FE] dark:bg-[#14102C]">
                <div class="w-full pt-4 pb-0 mt-8 px-2 bg-[#F2F0FE] dark:bg-[#14102C] text-left md:text-center items-center">
                    <div class="max-w-[800px] mx-auto text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300">
                        The timings of the sessions have been chosen for covering all time-zones with business hours and evening hours alternatives.
                        It is not mandatory to join your region's cohort. If you can acomodate other cohorts' times, pick the one that works best for you.
                        The cohort times are 6 hours apart.
                    </div>
                </div>

                <div class="border-box py-4 min-w-[360px] max-w-full bg-[#F2F0FE] dark:bg-[#14102C]">
                    <div>
                        <div class="w-full content-center px-2 lg:px-10">
                            <img src="{{ asset('images/hero/Course_Times_April2026-light.png') }}" alt="diagram" class="block w-full lg:w-4/5 mx-auto dark:hidden"/>
                            <img src="{{ asset('images/hero/Course_Times_April2026-dark.png') }}" alt="diagram" class="hidden w-full lg:w-4/5 mx-auto dark:block"/>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Schedule Section end -->

            <!-- Enrollment Fees -->
            <section id="enroll" class="w-full min-w-[360px] max-w-full pt-[120px] pb-8 z-10 mx:auto px-4 sm:px-6 lg:px-8 bg-light-bg dark:bg-[#14102C]">
                <div class="mb-4">
                    <div class="mx-auto max-w-[590px] text-center">
                    <span class="mb-3 text-3xl font-bold uppercase text-orange-500">
                        ENROLLMENT
                    </span>
                    </div>
                </div>
                <!-- Details -->
                <div class="border-box min-w-[360px]">
                    <div class="bg-light-bg dark:bg-[#14102C] px-4 mb-8 sm:px-2">
                        <div class="mx-0 md:-mx-4 flex flex-wrap items-start">
                            <div class="w-full mt-4 px-6 lg:w-1/2">
                                <div class="inset-y-0 left-0 text-gray-700 dark:text-gray-300">
                                    <h2 class="mb-3 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Enrollment Fee
                                    </h2>
                                    <div class="mb-4">
                                <span class="mb-3 mt-3 text-lg font-bold uppercase text-orange-500 sm:text-xl">
                                  INDIVIDUAL (FULL FEE)
                                </span>
                                        <p class="text-lg lg:text-base font-medium">
                                            This fee is applicable for individual enrollments. Starting from this course edition, we employ a consistent
                                            <b>Fair Pricing Policy</b> that is applicable for each country, based on GDP per capita (<a href="https://www.worldbank.org/en/programs/icp/brief/VC_Uses" target="_blank" class="text-orange-500 hover:text-orange hover:underline">World Bank</a>) and Purchasing Power Parity.
                                            Select your country to get the specific enrollment fee.
                                            The course is not available in certain restricted countries (Russia, Belarus, Iran, N.Korea, etc.).
                                        </p>
                                        <p class="text-lg lg:text-base mb-3 mt-3 font-bold sm:text-xl">
                                            Reference enrollment fee: <b>1,350 USD</b>.
                                        </p>
                                        <livewire:welcome/>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-4 px-6 lg:w-1/2 vertical-align-top">
                                <div class="inset-y-0 left-0 text-black dark:text-white">
                                    <h2 class="mb-3 text-3xl font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Get Onboard!
                                    </h2>
                                    <div class="mb-4">
                                <span class="mb-3 mt-3 text-lg font-bold uppercase text-orange-500 sm:text-xl">
                                  Enrollment Steps
                                </span>
                                        <p class="text-lg lg:text-base mb-4 font-medium text-gray-700 dark:text-gray-300">
                                            Enroll in your region's cohort below (APAC, EMEA, or AMERICAS). You can also enroll in other cohorts, as long as there are still seats available there.
                                            Check first the sessions times, in the <a href="#schedule" class="text-orange-500 hover:text-orange hover:underline">Schedule</a> section above, to see if they suit your daily agenda.
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            Click your region's globe image below, then go through these steps:
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            <b>1.</b> Click the <span class="text-orange font-bold dark:text-ocre dark:font-normal">Register Now</span> button<br />
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            <b>2.</b> Acknowledge the terms & conditions (Disco.co)<br />
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            <b>3.</b> Enter your name and e-mail address<br />
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            <b>4.</b> Click the <span class="text-orange font-bold dark:text-ocre dark:font-normal">Start Application</span> button<br />
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            <b>5.</b> Answer the localization question (your country’s name)<br />
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            <b>6.</b> Enter the <b>discount code</b> applicable (see Enrollment Fee) and the card details for pre-authorization.<br />
                                        </p>
                                        <p class="text-lg lg:text-base mb-2 font-medium text-gray-700 dark:text-gray-300">
                                            The card will be charged only upon enrollment approval (usually, within the same day).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Enrollment Links -->
                        <div class="flex flex-wrap justify-center -mx-4 mt-4">
                            <!-- AMERICAS Enrollment -->
                            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                                <div class="mx-auto mb-14 max-w-[270px] text-center">
                                    <div class="mx-auto mb-2 flex h-50 w-50 items-center justify-center">
                                        <a href="https://explaining-strategy.disco.co/p/a10-explaining-strategy/register" target="_blank" title="Enroll at Disco.co">
                                            <img src="{{ asset('images/hero/americas.png') }}" alt="icon" class="w-3/5 mx-auto"/>
                                        </a>
                                    </div>
                                    <div>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            Click for enrollment
                                        </p>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            <a href="https://explaining-strategy.disco.co/p/a10-explaining-strategy/register" target="_blank" class="text-orange-500 dark:text-orange-500 cursor-pointer" title="Enroll at Disco.co">Cohort A: AMERICAS</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- EMEA Enrollment -->
                            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                                <div class="mx-auto mb-14 max-w-[270px] text-center">
                                    <div class="mx-auto mb-2 flex h-50 w-50 items-center justify-center">
                                        <a href="https://explaining-strategy.disco.co/p/b10-explaining-strategy/register" target="_blank" title="Enroll at Disco.co">
                                            <img src="{{ asset('images/hero/emea.png') }}" alt="icon" class="w-3/5 mx-auto"/>
                                        </a>
                                    </div>
                                    <div>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            Click for enrollment
                                        </p>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            <a href="https://explaining-strategy.disco.co/p/b10-explaining-strategy/register" target="_blank" class="text-orange-500 dark:text-orange-500 cursor-pointer" title="Enroll at Disco.co">Cohort B: EMEA</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- ASIA Enrollment -->
                            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                                <div class="mx-auto mb-14 max-w-[270px] text-center">
                                    <div class="mx-auto mb-2 flex h-50 w-50 items-center justify-center">
                                        <a href="https://explaining-strategy.disco.co/p/c10-explaining-strategy/register" target="_blank" title="Enroll at Disco.co">
                                            <img src="{{ asset('images/hero/asia.png') }}" alt="icon" class="w-3/5 mx-auto"/>
                                        </a>
                                    </div>
                                    <div>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            Click for enrollment
                                        </p>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            <a href="https://explaining-strategy.disco.co/p/c10-explaining-strategy/register" target="_blank" class="text-orange-500 dark:text-orange-500 cursor-pointer" title="Enroll at Disco.co">Cohort C: ASIA</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- PACIFIC Enrollment -->
                            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                                <div class="mx-auto mb-14 max-w-[270px] text-center">
                                    <div class="mx-auto mb-2 flex h-50 w-50 items-center justify-center">
                                        <a href="https://explaining-strategy.disco.co/p/d10-explaining-strategy/register" target="_blank" title="Enroll at Disco.co">
                                            <img src="{{ asset('images/hero/pacific.png') }}" alt="icon" class="w-3/5 mx-auto"/>
                                        </a>
                                    </div>
                                    <div>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            Click for enrollment
                                        </p>
                                        <p class="text-center text-lg lg:text-base font-medium text-gray-700 dark:text-gray-300 sm:text-lg xl:text-lg">
                                            <a href="https://explaining-strategy.disco.co/p/d10-explaining-strategy/register" target="_blank" class="text-orange-500 dark:text-orange-500 cursor-pointer" title="Enroll at Disco.co">Cohort D: PACIFIC</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Enrollment Links end-->

                        <!-- Download Section start -->
                        <div class="-mx-4 flex flex-wrap items-center align-items-start">
                            <div class="w-full mt-4 px-4 lg:w-1/2">
                                <div class="inset-y-0 left-0 text-black dark:text-white">
                                    <h2 class="mb-3 font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Course Prospectus
                                    </h2>
                                    <div class="text-lg lg:text-base mb-4 text-gray-700 dark:text-gray-300">
                                        Use the Course Prospectus together with the Educational Support Request Letter for obtaining course enrollment fee financing
                                        from your employer. The Prospectus includes the course curricula and cohort details.<br /><br />
                                        <a href="{{ asset('/downloads/Course-Prospectus-Jan-Feb2026.pdf') }}" target="_blank" title="GO to LinkedIn"  class="block text-base font-medium text-orange-500 hover:text-orange-500 dark:text-orange-500 dark:hover:text-orange-500">
                                            Download Prospectus
                                        </a>
                                        (PDF 3.7MB)
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-4 px-4 lg:w-1/2">
                                <div class="inset-y-0 left-0 text-black dark:text-white">
                                    <h2 class="mb-3 font-lg text-blue-700 dark:text-orange-400 font-thin leading-tight text-black dark:text-white md:text-[45px]">
                                        Educational Support
                                    </h2>
                                    <div class="text-lg lg:text-base mb-4 text-gray-700 dark:text-gray-300">
                                        Use the Educational Support Request Letter together with the Course Prospectus for obtaining course enrollment fee financing
                                        from your employer. The Prospectus includes the course curricula and cohort details.<br /><br />
                                        <a href="{{ asset('/downloads/Educational-Support-Request_template_Nov2025.docx') }}" target="_blank" title="GO to LinkedIn"  class="block text-base font-medium text-orange-500 hover:text-orange-500 dark:text-orange-500 dark:hover:text-orange-500">
                                            Download the Educational Support Request Letter
                                        </a>
                                        (Microsoft Word .docx 17kB)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Enrollment Section text end -->
                </div>
            </section>
            <!-- Enrollment Section end -->

            <!-- Footer start -->
            <footer class="relative z-10 w-full min-w-[360px] max-w-full pt-[80px] mx-auto px-4 sm:px-6 lg:px-8 bg-[#F2F0FE] dark:bg-[#14102C]">
                <div>
                    <div class="mx-0 md:-mx-4 flex flex-wrap">
                        <div class="border-box w-full md:ml-0 md:w-1/2 lg:w-4/12 xl:w-4/12">
                            <div class="mb-14 max-w-[330px] xl:mb-20">
                                <a href="{{ url("/") }}" class="mb-6 inline-block">
                                    <img src="{{ asset('images/logo/logo-course.png') }}" alt="logo"/>
                                </a>
                                <p class="text-lg lg:text-base mb-10 ml-4 font-medium text-gray-700 dark:text-gray-300">
                                    Join Explaining Strategy, a course based on the unique, integrative Strategy Clockwork framework
                                    that covers Strategy's main formulation and execution processes, enabled by experimentation.
                                    A framework that connects the relevant Strategy concepts, theories, and
                                    methodologies, validated through the test of practice.
                                </p>
                            </div>
                        </div>

                        <div class="w-full px-2 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-2/12">
                            <div class="mb-5">
                                <h2 class="mb-5 text-2xl font-bold text-black text-center sm:text-left dark:text-white">
                                    Quick Access
                                </h2>
                                <div class="space-y-3 text-center sm:text-left">
                                    <a href="#overview" class="scroll-menu menu-scroll block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        Course Overview
                                    </a>
                                    <a href="#curriculum" class="scroll-menu menu-scroll block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        Course Curriculum
                                    </a>
                                    <a href="#schedule" class="scroll-menu menu-scroll block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        Course Schedule
                                    </a>
                                    <a href="#enroll" class="scroll-menu menu-scroll block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        Cohort Enrollment
                                    </a>
                                </div>
                            </div>
                            <div class="mb-14 xl:mb-20">
                                <h2 class="mb-5 text-2xl font-bold text-black text-center sm:text-left dark:text-white">
                                    Contact
                                </h2>
                                <div class="space-y-3 mt-4 text-center lg:text-left text-gray-700 dark:text-gray-300">
                                    <div class="w-full flex items-center lg:items-start">
                                        <div class="flex mx-auto lg:ml-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 512 512" class="mt-[4px] mr-2">
                                                <path opacity="1" fill="#8b5cf6" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                            </svg>
                                            info&nbsp;@&nbsp;strategsys.com
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-3 mt-4 text-center lg:text-left sm:text-left text-gray-700 dark:text-gray-300">
                                    <div class="w-full flex items-center lg:items-start">
                                        <div class="flex mx-auto lg:ml-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 512 512" class="mt-[4px] mr-2">
                                                <path opacity="1" fill="#8b5cf6" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                            </svg>
                                            +1 (302) 830-3715
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-2/12">
                            <div class="mb-5">
                                <h2 class="mb-5 text-2xl font-bold text-black text-center sm:text-left dark:text-white">
                                    Links
                                </h2>
                                <div class="space-y-3 text-center lg:text-left">
                                    <a href="{{ url('/privacy') }}" class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        Privacy Policy
                                    </a>
                                    <a href="{{ url('/terms') }}" class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        Terms & Conditions
                                    </a>
                                    <a href="https://twitter.com/i/communities/1731110251720589457" target="_blank" title="Go to X / Twitter" class="block items-center text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        <div class="w-full flex items-center lg:items-start">
                                            <div class="flex mx-auto lg:ml-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" class="mt-[4px] mr-2">
                                                    <path opacity="1" fill="#8b5cf6" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                                </svg>
                                                X Community
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.linkedin.com/company/101211805" target="_blank" title="Go to LinkedIn"  class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        <div class="flex content-center text-center">
                                            <div class="flex mx-auto lg:ml-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" class="mt-[4px] mr-2">
                                                    <path opacity="1" fill="#8b5cf6" d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/>
                                                </svg>
                                                LinkedIn Page
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-14 xl:mb-20">
                                <h2 class="mb-5 text-2xl font-bold text-black text-center sm:text-left dark:text-white">
                                    Address
                                </h2>
                                <div class="space-y-3 text-center sm:text-left text-gray-700 dark:text-gray-300">
                                    Strategsys LLC<br />
                                    300 Delaware Ave<br />
                                    Ste 210 #580<br />
                                    Wilmington, DE 19801<br />
                                    United States
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
                            <div class="mb-14 xl:mb-20">
                                <h2 class="mb-5 text-2xl font-bold text-black dark:text-white">
                                    Articles
                                </h2>
                                <div class="flex mx-auto ml-1 mb-4 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 511.471" class="mt-[4px] mr-2">
                                        <path fill="#FF681A" d="M0 0h448v62.804H0V0zm0 229.083h448v282.388L223.954 385.808 0 511.471V229.083zm0-114.542h448v62.804H0v-62.804z"/>
                                    </svg>
                                    <a href="https://mionescu.substack.com" target="_blank" title="Go to LinkedIn"  class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                        Substack Articles
                                    </a>
                                </div>
                                <div class="space-y-3 ml-20 sm:ml-0">
                                    <div class="flex">
                                        <div class="mr-5 h-[60px] w-full max-w-[60px] rounded-md">
                                            <a href="https://www.linkedin.com/pulse/course-remember-mihai-ionescu-wibff/" target="_blank" title="Read on LinkedIn">
                                                <img src="{{ asset('images/blog/article-course-to-remember.png') }}" alt="post" class="h-full w-full rounded-md object-cover object-center"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="https://www.linkedin.com/pulse/course-remember-mihai-ionescu-wibff/" target="_blank" title="Read on LinkedIn" class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                                A Course to Remember
                                            </a>
                                            <p class="flex items-center">
                                        <span class="pr-1 text-gray-700 dark:text-gray-300">
                                            <svg width="14" height="16" viewBox="0 0 14 16" class="fill-current">
                                              <path d="M3.25 8H4.75V9.5H3.25V8ZM13.75 3.5V14C13.75 14.3978 13.592 14.7794 13.3107 15.0607C13.0294 15.342 12.6478 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14V3.5C0.25 3.10218 0.408035 2.72064 0.68934 2.43934C0.970644 2.15804 1.35218 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2H12.25C12.6478 2 13.0294 2.15804 13.3107 2.43934C13.592 2.72064 13.75 3.10218 13.75 3.5ZM1.75 5H12.25V3.5H1.75V5ZM12.25 14V6.5H1.75V14H12.25ZM9.25 9.5V8H10.75V9.5H9.25ZM6.25 9.5V8H7.75V9.5H6.25ZM3.25 11H4.75V12.5H3.25V11ZM9.25 12.5V11H10.75V12.5H9.25ZM6.25 12.5V11H7.75V12.5H6.25Z"/>
                                            </svg>
                                        </span>
                                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Nov 7, 2023
                                        </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="mr-5 h-[60px] w-full max-w-[60px] rounded-md">
                                            <a href="https://www.linkedin.com/pulse/modeling-strategy-mihai-ionescu/" target="_blank" title="Read on Linked">
                                                <img src="{{ asset('images/blog/article-modeling-strategy.png') }}" alt="post" class="h-full w-full rounded-md object-cover object-center"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="https://www.linkedin.com/pulse/modeling-strategy-mihai-ionescu/" target="_blank" title="Read on Linked" class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                                Modeling Strategy
                                            </a>
                                            <p class="flex items-center">
                                        <span class="pr-1 text-gray-700 dark:text-gray-300">
                                            <svg width="14" height="16" viewBox="0 0 14 16" class="fill-current">
                                                <path d="M3.25 8H4.75V9.5H3.25V8ZM13.75 3.5V14C13.75 14.3978 13.592 14.7794 13.3107 15.0607C13.0294 15.342 12.6478 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14V3.5C0.25 3.10218 0.408035 2.72064 0.68934 2.43934C0.970644 2.15804 1.35218 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2H12.25C12.6478 2 13.0294 2.15804 13.3107 2.43934C13.592 2.72064 13.75 3.10218 13.75 3.5ZM1.75 5H12.25V3.5H1.75V5ZM12.25 14V6.5H1.75V14H12.25ZM9.25 9.5V8H10.75V9.5H9.25ZM6.25 9.5V8H7.75V9.5H6.25ZM3.25 11H4.75V12.5H3.25V11ZM9.25 12.5V11H10.75V12.5H9.25ZM6.25 12.5V11H7.75V12.5H6.25Z"/>
                                            </svg>
                                        </span>
                                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Oct 11, 2023
                                        </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="mr-5 h-[60px] w-full max-w-[60px] rounded-md">
                                            <a href="https://www.linkedin.com/pulse/strategic-alignment-mihai-ionescu/" target="_blank" title="Read on Linked">
                                                <img src="{{ asset('images/blog/article-strategic-alignment.png') }}" alt="post" class="h-full w-full rounded-md object-cover object-center"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="https://www.linkedin.com/pulse/strategic-alignment-mihai-ionescu/" target="_blank" title="Read on Linked" class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                                The Strategic Alignment
                                            </a>
                                            <p class="flex items-center">
                                        <span class="pr-1 text-gray-700 dark:text-gray-300">
                                            <svg width="14" height="16" viewBox="0 0 14 16" class="fill-current">
                                                <path d="M3.25 8H4.75V9.5H3.25V8ZM13.75 3.5V14C13.75 14.3978 13.592 14.7794 13.3107 15.0607C13.0294 15.342 12.6478 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14V3.5C0.25 3.10218 0.408035 2.72064 0.68934 2.43934C0.970644 2.15804 1.35218 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2H12.25C12.6478 2 13.0294 2.15804 13.3107 2.43934C13.592 2.72064 13.75 3.10218 13.75 3.5ZM1.75 5H12.25V3.5H1.75V5ZM12.25 14V6.5H1.75V14H12.25ZM9.25 9.5V8H10.75V9.5H9.25ZM6.25 9.5V8H7.75V9.5H6.25ZM3.25 11H4.75V12.5H3.25V11ZM9.25 12.5V11H10.75V12.5H9.25ZM6.25 12.5V11H7.75V12.5H6.25Z"/>
                                            </svg>
                                        </span>
                                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                            May 23, 2023
                                        </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="mr-5 h-[60px] w-full max-w-[60px] rounded-md">
                                            <a href="https://www.linkedin.com/newsletters/the-strategy-clockwork-6882375829570121728/" target="_blank" title="Read on Linked">
                                                <img src="{{ asset('images/blog/article-strategy-clockwork.png') }}" alt="post" class="h-full w-full rounded-md object-cover object-center"/>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="https://www.linkedin.com/newsletters/the-strategy-clockwork-6882375829570121728/" target="_blank" title="Read on Linked" class="block text-base font-medium text-gray-700 hover:text-orange-500 dark:text-gray-300 dark:hover:text-orange-500">
                                                Strategy Clockwork
                                            </a>
                                            <p class="flex items-center">
                                            <span class="pr-1 text-gray-700 dark:text-gray-300">
                                                <svg width="14" height="16" viewBox="0 0 14 16" class="fill-current">
                                                    <path d="M3.25 8H4.75V9.5H3.25V8ZM13.75 3.5V14C13.75 14.3978 13.592 14.7794 13.3107 15.0607C13.0294 15.342 12.6478 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14V3.5C0.25 3.10218 0.408035 2.72064 0.68934 2.43934C0.970644 2.15804 1.35218 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2H12.25C12.6478 2 13.0294 2.15804 13.3107 2.43934C13.592 2.72064 13.75 3.10218 13.75 3.5ZM1.75 5H12.25V3.5H1.75V5ZM12.25 14V6.5H1.75V14H12.25ZM9.25 9.5V8H10.75V9.5H9.25ZM6.25 9.5V8H7.75V9.5H6.25ZM3.25 11H4.75V12.5H3.25V11ZM9.25 12.5V11H10.75V12.5H9.25ZM6.25 12.5V11H7.75V12.5H6.25Z"/>
                                                </svg>
                                            </span>
                                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                            2022-2025
                                        </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-[#F3F4F4] py-4 text-center dark:border-[#2D2C4A]">
                        <p class="text-base font-medium leading-loose text-gray-700 dark:text-gray-300">
                            © 2026 Strategsys LLC - all Rights Reserved.
                        </p>
                    </div>
                </div>

                <div class="absolute top-0 left-0 -z-10">
                    <img src="{{ asset('images/shapes/footer-shape-2.svg') }}" alt="shape" />
                </div>
                <div class="absolute bottom-0 right-0 -z-10">
                    <img src="{{ asset('images/shapes/footer-shape-1.svg') }}" alt="shape" />
                </div>
            </footer>
            <!-- Footer end -->

            <!-- Back To Top Start -->
            <a x-show="scrolledFromTop" href="#home" aria-label="scrollToTop" class="hover:shadow-signUp back-to-top fixed bottom-8 right-8 left-auto z-[999] flex h-10 w-10 items-center justify-center rounded-xl bg-white dark:bg-gray-800 rounded-xl text-white shadow-md transition">
                <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
            </a>
            <!-- Back To Top End -->

        </div>

        <!-- JS Files -->
        <script>
            // ==== Dark/Light mode toggler (supports multiple toggle checkboxes)
            const html = document.querySelector('html');
            const darkTogglers = Array.from(document.querySelectorAll('[name="darkToggler"]'));

            // Force dark mode on the initial load and sync all togglers
            html.classList.add('dark');
            darkTogglers.forEach(cb => cb.checked = true);

            const applyDarkMode = (enabled) => {
                if (enabled) {
                    html.classList.add('dark');
                } else {
                    html.classList.remove('dark');
                }
            };

            const onToggleChange = (e) => {
                const enabled = e.target.checked;
                // Keep all toggles in sync
                darkTogglers.forEach(cb => { if (cb !== e.target) cb.checked = enabled; });
                applyDarkMode(enabled);
            };

            // Initialize and bind listeners
            applyDarkMode(true);
            darkTogglers.forEach(cb => cb.addEventListener('change', onToggleChange));

            // Countdown timer
            function timer() {
                return {
                    days: '0',
                    hours: '0',
                    minutes: '0',
                    seconds: '0',
                    endTime: new Date("April 7, 2026 7:00:00").getTime(),

                    countdown: function() {
                        // Remove the 'invisible' class to show the timer elements
                        document.getElementById('days').classList.remove('invisible');
                        document.getElementById('hours').classList.remove('invisible');
                        document.getElementById('minutes').classList.remove('invisible');

                        let timerInterval = setInterval(() => {
                            let now = new Date().getTime();
                            let distance = this.endTime - now;

                            if (distance < 0) {
                                clearInterval(timerInterval);
                                this.days = '0';
                                this.hours = '0';
                                this.minutes = '0';
                                this.seconds = '0';
                                return;
                            }

                            this.days = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
                            this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
                            this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
                            this.seconds = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, '0');
                        }, 1000);
                    }
                }
            }

            // ==== for menu scroll
            const pageLink = document.querySelectorAll(".menu-scroll");

            pageLink.forEach((elem) => {
                elem.addEventListener("click", (e) => {
                    e.preventDefault();
                    document.querySelector(elem.getAttribute("href")).scrollIntoView({
                        behavior: "smooth"
                    });
                });
            });

            // section menu active
            function onScroll() {
                const sections = document.querySelectorAll(".scroll-menu");
                const scrollPos =
                    window.scrollY ||
                    document.documentElement.scrollTop ||
                    document.body.scrollTop;

                for (let i = 0; i < sections.length; i++) {
                    const currLink = sections[i];
                    const val = currLink.getAttribute("href");
                    const refElement = document.querySelector(val);
                    const scrollTopMinus = scrollPos + 73;
                    if (
                        refElement.offsetTop <= scrollTopMinus &&
                        refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                    ) {
                        document
                            .querySelector(".scroll-menu")
                            .classList.remove("text-orange-500");
                        document
                            .querySelector(".scroll-menu")
                            .classList.remove("dark:text-orange-500");
                        currLink.classList.add("text-orange-500");
                        currLink.classList.add("dark:text-orange-500");
                    } else {
                        currLink.classList.remove("text-orange-500");
                        currLink.classList.remove("dark:text-orange-500");
                    }
                }
            }
            window.document.addEventListener("scroll", onScroll);

            // ====== scroll top js
            function scrollTo(element, to = 0, duration = 500) {
                const start = element.scrollTop;
                const change = to - start;
                const increment = 20;
                let currentTime = 0;

                const animateScroll = () => {
                    currentTime += increment;
                    element.scrollTop = Math.easeInOutQuad(currentTime, start, change, duration);
                    if (currentTime < duration) {
                        setTimeout(animateScroll, increment);
                    }
                };
                animateScroll();
            }

            // ====== detect Mobile
            function setMobile() {
                if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
                    document.querySelector(".countdown").classList.add("hidden");
                }
            }

            Math.easeInOutQuad = function (t, b, c, d) {
                t /= d / 2;
                if (t < 1) return (c / 2) * t * t + b;
                t--;
                return (-c / 2) * (t * (t - 2) - 1) + b;
            };
            document.querySelector('.back-to-top').onclick = () => {
                scrollTo(document.documentElement);
            };
            function copy_code(index) {
                const el = document.getElementById("copy" + index);
                const check = document.getElementById("check" + index);
                if (!el) return;

                let text = el.textContent || "";

                if (navigator.clipboard?.writeText) {
                    navigator.clipboard.writeText(text).then(() => {
                        check?.classList.remove("hidden");
                        setTimeout(() => check?.classList.add("hidden"), 1000);
                    });
                }
            }
        </script>
    </body>
</html>
