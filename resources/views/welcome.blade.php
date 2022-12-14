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
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="leading-normal tracking-normal">
    <div class="bg-[url('{{ asset('images/bg.jpeg') }}')] bg-cover bg-no-repeat">
        <!--Nav-->
        <div class="container w-full mx-auto">
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center m-3 text-2xl font-bold text-teal-300">
                    <img src="{{ asset('images/logopsb.png') }}" alt="logopsb"
                        class="transition duration-700 w-36 hover:scale-105">
                </div>

                <div class="flex content-center justify-end w-1/2">
                    <img src="{{ asset('images/logoalfa2.png') }}" alt="logo"
                        class="w-20 m-3 duration-700 hover:scale-105">
                </div>
            </div>
        </div>

        <!--Main-->
        <div class="container flex flex-col flex-wrap items-center pt-4 mx-auto md:pt-4 md:flex-row">
            <!--Left Col-->
            <div class="flex flex-col justify-center w-full overflow-y-hidden xl:w-2/5 lg:items-start">
                <h1
                    class="my-2 text-2xl font-bold leading-tight text-center text-teal-600 opacity-75 md:text-4xl md:text-left">
                    PORTAL
                    PENDAFTARAN SANTRI BARU!
                </h1>
                <p class="mb-8 leading-normal text-center text-teal-600 md:text-2xl md:text-left">
                    Pendaftaran Belum dibuka, Pantau Terus????
                </p>

            </div>

            <!--Right Col-->
            <div class="w-full p-12 overflow-hidden xl:w-3/5">
                <img class="w-full mx-auto transition duration-700 ease-in-out transform md:w-4/5 hover:scale-105 "
                    src="{{ asset('images/fotopsb.png') }}" />
            </div>
            <!--Footer-->
            <div class="w-full pt-2 text-sm text-center md:text-left fade-in">
                <span class="text-teal-400">&copy; SMP Al Musyaffa 2022 | Taqius SA,S.Kom | Kendali Koding 2022</span>
            </div>

        </div>
    </div>
</body>

</html>
