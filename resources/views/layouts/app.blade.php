<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 0 w-full grid grid-cols-12">

            <div class="col-span-2 bg-blue-950 min-h-screen px-4 py-10 dark:bg-gray-800" id="nav-menu">
                <div class="flex justify-between items-center cursor-pointer " id="dashboard-nav">
                    <div class="flex space-x-4">
                        <x-icon.dashboard-icon />
                        <h4 class="text-white text-lg">Dashboard</h4>
                    </div>
                    <div class="transform duration-500" id="right-dashboard">
                        <x-icon.right-icon />
                    </div>
                </div>
                <div class=" cursor-pointer hidden h-20 bg-blue-700" id="sub-dashboard-nav">
                    <h4 class="text-white text-lg">Dashboard</h4>
                </div>
            </div>

            <!-- Page Content -->
            <main class="col-span-10 px-4 dark:bg-gray-700">
                {{ $slot }}
            </main>
        </div>
    <script>
        $(document).ready(function () {
            $("#dashboard-nav").click(function () {
                $("#right-dashboard").toggleClass("rotate-90");
                $("#sub-dashboard-nav").slideToggle("slow");
            })
        })
    </script>
    </body>
</html>
