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
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 h-84 flex justify-center items-center text-center mt-20">
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
        <script>
            // document.getElementById("registration_btn").style.display = "none";

            // new TypeIt("#message", {
            // strings: "Join our community today to share your daily accomplishments and inspire others to reach their goals!",
            // speed: 50,
            // waitUntilVisible: true,
            // afterComplete: function() {
            //     document.getElementById("registration_btn").style.display = "flex";
            // }
            // }).go();
        </script>
    </body>
</html>
