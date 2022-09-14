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
    <style>
        // best seen at 1500px or less

        html,
        body {
            height: 100%;
        }

        body {
            background: radial-gradient(ellipse at center, rgba(255, 254, 234, 1) 0%, rgba(255, 254, 234, 1) 35%, #B7E8EB 100%);
            overflow: hidden;
        }

        .ocean {
            height: 5%;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            background: #015871;
        }

        .wave {
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
            position: absolute;
            top: -198px;
            width: 6400px;
            height: 198px;
            animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
            transform: translate3d(0, 0, 0);
        }

        .wave:nth-of-type(2) {
            top: -175px;
            animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) -.125s infinite, swell 7s ease -1.25s infinite;
            opacity: 1;
        }

        @keyframes wave {
            0% {
                margin-left: 0;
            }

            100% {
                margin-left: -1600px;
            }
        }

        @keyframes swell {

            0%,
            100% {
                transform: translate3d(0, -25px, 0);
            }

            50% {
                transform: translate3d(0, 5px, 0);
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="leading-normal tracking-normal">
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <div class="relative">
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
                    Pendaftaran Belum dibuka, Pantau Terus😊
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
