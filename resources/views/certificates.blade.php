<?php header("strict-transport-security: max-age=2592000"); ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" translate="no">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Explaining Strategy - Certificates</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"  type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/figtree.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/prompt.css') }}" />

        <!-- Cookies & Compliance -->
        <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/37782721ccb4d4999565c214/script.js"></script>

        <!-- Styles -->
        @vite([
            'resources/css/app.css',
            'resources/css/style.css',
        ])
        <style>
            button:hover {
                background: steelblue;
                color: white;
            }
            .error-row {
                color: red;
            }
        </style>
        @livewireStyles
    </head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FSB1E83L82"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-FSB1E83L82');</script>
    <body class="antialiased w-screen p-0 bg-white dark:bg-[#14102C]">
        <div class="flex flex-col h-screen w-screen">
            <div class="relative z-5 flex flex-col w-full items-center pt-6 sm:pt-0">
                <!-- Logo -->
                <div class="w-60 max-w-full">
                    <a href="{{ url('/') }}" :class="scrolledFromTop && '!py-4 lg:!py-2'" class="menu-scroll block w-full py-6 lg:py-5">
                        <img src="{{ asset('images/logo/logo-course.png') }}" alt="logo" class="w-full"/>
                    </a>
                </div>

                <div class="w-full sm:max-w-2xl mt-6 flex flex-col items-center p-6 bg-[#F2F0FE] dark:bg-dark shadow-md overflow-hidden sm:rounded-lg prose dark:prose-invert">
                    <h1 class="subtitle font-thin">Verify Certificate</h1>
                    <p>Verify the authenticity of a certificate.</p>
                    <form action="{{ route('certificates') }}" method="POST">
                        @csrf
                        <div class="mt-4 ml-auto mr-auto">
                            <label for="code" class="block">Enter the Certificate ID:</label>
                            <input type="text" name="code" id="code" class="mt-1 block w-5/6 min-w-[300px] rounded-md border-gray-300 shadow-sm focus:ring focus:ring-primary focus:ring-opacity-50 dark:bg-gray-900 text-black dark:text-dark dark:border-gray-600" placeholder="{{ $link }}" required>
                            <div id="error-row" class="mt-2 block font-bold error-row">{{ $errors->first('code') }}</div>
                        </div>
                        <div class="mt-4 flex flex-col items-center">
                            <button type="submit" id="submit" class="mt-4 max-w-sm py-2 px-10 text-base font-bold rounded-full transition-all border border-primary hover:border-black">
                                Verify
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="w-full my-4 flex flex-col items-center bg-[#F2F0FE] dark:bg-[#14102C]">
                @if($link)
                    <img src="{{ $link }}" id="certificate" alt="certificate" class="w-full block max-w-[670px]"/>
                @endif
            </div>

            <!-- Footer start -->
            <footer class="relative z-10 mt-auto mb-0 w-full bg-[#F2F0FE] dark:bg-[#14102C]">
                <div>
                    <div class="border-t border-[#F3F4F4] py-4 text-center dark:border-[#2D2C4A]">
                        <div class="items-center">
                            <div class="flex ml-auto mr-auto items-center justify-center">
                               <a href="{{ url('/') }}" class="text-base mr-4 leading-loose text-primary dark:text-primary hover:underline">
                                   Home
                               </a>
                                <a href="{{ url('/privacy') }}" class="text-base mr-4 leading-loose text-primary dark:text-primary hover:underline">
                                    Privacy Policy
                                </a>
                                <a href="{{ url('/terms') }}" class="text-base leading-loose text-primary dark:text-primary hover:underline">
                                    Terms & Conditions
                                </a>
                            </div>
                        </div>
                        <p class="text-base font-medium leading-loose text-body-color-2 dark:text-body-color">
                            © 2025 Strategsys LLC - all Rights Reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- JS Files -->
        <script>
            // Managing error & certificate display
            window.addEventListener('DOMContentLoaded', (event) => {
                const inputField = document.getElementById('code');
                inputField.addEventListener('focus', function() {
                    const errorRow = document.getElementById('error-row');
                    const certificateImage = document.getElementById('certificate');
                    if (errorRow) {
                        errorRow.classList.add('hidden');
                    }
                    if (certificateImage) {
                        certificateImage.classList.add('hidden');
                    }
                });
            });
            // Dark mode
            const html = document.querySelector('html');
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
        </script>
        @livewireScripts
    </body>
</html>
