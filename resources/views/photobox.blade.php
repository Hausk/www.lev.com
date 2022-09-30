<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Libre &amp; vivant</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased" id="app">
        <navbar-component></navbar-component>
        <main>
            <div class="relative pt-16 pb-32 flex content-center items-center justify-center h-screen">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" 
                style="background-image: url({{ url('storage/static/bannerHome.jpg') }}); background-size: cover;">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="">
                                <h1 class="text-white font-semibold text-5xl">Libre & Vivant</h1>
                                <p class="mt-4 text-lg text-gray-300">
                                    Bonjour, je m'appelle Victoria, j'ai fait de la photographie une passion qui permet de rendre heureuses les personnes ou de laisser une émotion sur certaines photographies que personne n'arriverait à voir. Aujourd'hui je me présente à vous afin de pouvoir rendre vos moments encore plus magique et d'en faire des souvenirs inoubliable.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                class="z-0 top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="transform: translateY(50%)"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                      <path fill="#111827" fill-opacity="1" d="M0,160L80,149.3C160,139,320,117,480,117.3C640,117,800,139,960,133.3C1120,128,1280,96,1360,80L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
                    </svg>
                </div>
            </div>
            <section class="relative py-20 bg-gray-900">
                <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;"
                >
                </div>
                <div class="gallery-container w-full lg:w-4/6 m-auto overflow-hidden">
                    @foreach ($images as $image)
                        <figure>
                            <img src="/storage/images/{{$image->name}}" class="rounded-lg">
                        </figure>
                    @endforeach
                </div>
            </section>
        </main>
        <footer-component></footer-component>
    </body>
</html>
