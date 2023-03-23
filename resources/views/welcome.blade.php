<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Win-Warriors</title>
        <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js">
        </script>
    </head>
    <body class="antialiased">
        <x-app-layout>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @if (!Auth::check())
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    @endif
                </div>
            @endif
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

                <div class="p-6 flex space-x-2 flex-col">

                    <p id="message" class="text-xl font-sans">
                    </p>

                    <div id="registration_btn" class="mt-5 flex justify-center">
                        <a href="{{ route('register') }}"class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded">Try it now</a>
                    </div>
                </div>
        </div>
        </x-app-layout>
        <script>
            document.getElementById("registration_btn").style.display = "none";

            new TypeIt("#message", {
            strings: "Join our community today to share your daily accomplishments and inspire others to reach their goals!",
            speed: 50,
            waitUntilVisible: true,
            afterComplete: function() {
                document.getElementById("registration_btn").style.display = "flex";
            }
            }).go();
        </script>
    </body>
</html>
