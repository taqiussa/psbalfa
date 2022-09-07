<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/logoalfa2.png') }}" type="image/png" sizes="16x16" />


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

        html {
            font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="leading-normal tracking-normal text-indigo-400 m-6 bg-gradient-to-t from-slate-100 to-green-600">
    <div class="h-screen">
        <!--Nav-->
        <div class="w-full container mx-auto">
            <div class="w-full flex items-center justify-between">
                <span
                    class=" flex items-center  font-bold text-2xl lg:text-4xl text-slate-100">SMP AL MUSYAFFA</span>

                <div class="flex w-1/2 justify-end content-center">
                    <img src="{{ asset('images/logoalfa2.png') }}" alt="logo" class="w-24 hover:scale-105 duration-700">
                </div>
            </div>
        </div>

        <!--Main-->
        <div class="container pt-4 md:pt-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
                <h1
                    class="my-2 text-2xl md:text-4xl text-teal-600 opacity-75 font-bold leading-tight text-center md:text-left">PORTAL
                    PENDAFTARAN SANTRI BARU!
                </h1>
                <p class="leading-normal text-teal-600 md:text-2xl mb-8 text-center md:text-left">
                    Pendaftaran Belum dibuka, Pantau Terus😊
                </p>

            </div>

            <!--Right Col-->
            <div class="w-full xl:w-3/5 p-12 overflow-hidden">
                <img class="mx-auto w-full md:w-4/5 transform  transition hover:scale-105 duration-700 ease-in-out hover:rotate-6"
                    src="{{ asset('images/educator.svg') }}" />
            </div>

            <!--Footer-->
            <div class="w-full pt-2 text-sm text-center md:text-left fade-in">
                <span class="text-teal-700">&copy; SMP Al Musyaffa 2022 | Taqius SA,S.Kom | Kendali Koding 2022</span> 
                - 
            </div>
        </div>
    </div>
</body>

</html>
