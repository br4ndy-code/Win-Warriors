<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('Win-warriors') }}</title>
    </head>
    <body class="antialiased">
        <x-app-layout>
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 h-screen flex justify-center items-center text-center">
                <div class="p-6 space-x-2">
                    <h1 id="message" class="text-3xl font-sans">
                        Unleash your potential and inspire others.<br>
                        Join our community to share your daily accomplishments and conquer your goals!
                    </h1>

                    <div id="registration_btn" class="mt-7 flex justify-center">
                        <a href="{{ route('register') }}"class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded">Try it now</a>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>
