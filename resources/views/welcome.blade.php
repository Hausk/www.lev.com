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
                                <h1 class="text-white font-semibold text-5xl">
                                    Libre & Vivant
                                </h1>
                                <p class="mt-4 text-lg text-gray-300">
                                    Bonjour, je m'appelle Victoria, j'ai fait de la photographie une passion qui permet de rendre heureuse les personnes ou de laisser une émotion sur certaines photographies que personne n'arriverait à voir. Aujourd'hui je me présente à vous afin de pouvoir rendre vos moments encore plus magiques et d'en faire des souvenirs inoubliables.
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
            <section class="z-20 pb-20 -mt-24 bg-gray-900">
                <div class="flex flex-wrap items-center mt-32">
                    <div class="z-20 w-full md:w-5/12 px-4 mr-auto ml-auto text-right">
                    <h3 class="text-4xl font-semibold text-white">
                        Libre & Vivant
                    </h3>
                    <p
                        class="text-lg leading-relaxed mt-4 mb-4 text-gray-500"
                    >
                        Le site est présent pour développer et montrer ma pate photographiques à tous & rapidement sans devoir installer ou télécharger quelconque application mobile..
                    </p>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-8 lg:mt-0">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-red-600">
                        <img
                        alt="..."
                        src="{{ url('storage/static/bannerHome.jpg') }}"
                        class="w-full align-middle rounded-t-lg"
                        />
                        <blockquote class="relative p-8 mb-4">
                        <svg
                            preserveAspectRatio="none"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 583 95"
                            class="absolute left-0 w-full block"
                            style="height: 95px; top: -94px;"
                        >
                            <polygon
                            points="-30,95 583,95 583,65"
                            class="text-red-600 fill-current"
                            ></polygon>
                        </svg>
                        <h4 class="text-xl font-bold text-white">
                            Victoria
                        </h4>
                        <p class="text-md font-light mt-2 text-white">
                            Passionnées de Photographie depuis quelques années maintenant, je vous propose mes services
                        </p>
                        </blockquote>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <section class="relative py-20 bg-gray-300">
                <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;"
                >
                <svg
                    class="absolute bottom-0 overflow-hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none"
                    version="1.1"
                    viewBox="0 0 2560 100"
                    x="0"
                    y="0">
                    <polygon
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                    ></polygon>
                </svg>
                </div>
                <div class="gallery-container w-full lg:w-4/6 m-auto overflow-hidden">
                    @foreach ($imageRelated as $imgRelated)
                        <figure data-modal-toggle="popup-modal-{{ $imgRelated->id }}">
                            <img src="/images/thumbnail/{{ $imgRelated->message }}" class="rounded-lg">
                        </figure>
                        <div id="popup-modal-{{ $imgRelated->id }}" tabindex="-1" class="hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-7xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="container mx-auto lg:grid lg:grid-cols-3 lg:gap-2">
                                    <div class="w-full rounded">
                                        <a class="spotlight" href="/images/standard/{{ $imageListRelated[$imgRelated->categories_id][1]->message }}"
                                            data-src-800="/images/standard/{{ $imageListRelated[$imgRelated->categories_id][1]->message }}"
                                            data-src-1200="/images/standard/{{ $imageListRelated[$imgRelated->categories_id][1]->message }}"
                                            data-src-2400="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg"
                                            data-src-3800="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg">
                                            <img src="/images/standard/{{ $imageListRelated[$imgRelated->categories_id][1]->message }}">
                                        </a>
                                    </div>
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="">
                                        <div id="animation-carousel" class="relative" data-carousel="static">
                                            <!-- Carousel wrapper -->
                                            <div class="relative h-full rounded-lg md:h-96">
                                                 <!-- Item 1 -->
                                                @foreach ($imageListRelated[$imgRelated->categories_id] as $image)
                                                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                                                        <img src="/images/standard/{{ $image->message }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="container mx-auto lg:grid lg:grid-cols-3 lg:gap-2">
                <div class="w-full rounded">
                    <a class="spotlight" href="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg"
                        data-src-800="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg"
                        data-src-1200="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg"
                        data-src-2400="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg"
                        data-src-3800="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg">
                        <img src="https://cdn.pixabay.com/photo/2022/06/03/03/50/beach-7239311__340.jpg">
                    </a>
                </div>
                <div class="w-full rounded">
                    <a class="spotlight" href="https://cdn.pixabay.com/photo/2022/06/06/17/56/flowers-7246619__340.jpg"
                        data-src-800="https://cdn.pixabay.com/photo/2022/06/06/17/56/flowers-7246619__340.jpg"
                        data-src-1200="https://cdn.pixabay.com/photo/2022/06/06/17/56/flowers-7246619__340.jpg"
                        data-src-2400="https://cdn.pixabay.com/photo/2022/06/06/17/56/flowers-7246619__340.jpg"
                        data-src-3800="https://cdn.pixabay.com/photo/2022/06/06/17/56/flowers-7246619__340.jpg">
                        <img src="https://cdn.pixabay.com/photo/2022/06/06/17/56/flowers-7246619__340.jpg">
                    </a>
                </div>
                <div class="w-full rounded">
                    <a class="spotlight" href="https://cdn.pixabay.com/photo/2022/06/22/18/28/deer-7278490__340.jpg"
                        data-src-800="https://cdn.pixabay.com/photo/2022/06/22/18/28/deer-7278490__340.jpg"
                        data-src-1200="https://cdn.pixabay.com/photo/2022/06/22/18/28/deer-7278490__340.jpg"
                        data-src-2400="https://cdn.pixabay.com/photo/2022/06/22/18/28/deer-7278490__340.jpg"
                        data-src-3800="https://cdn.pixabay.com/photo/2022/06/22/18/28/deer-7278490__340.jpg">
                        <img src="https://cdn.pixabay.com/photo/2022/06/22/18/28/deer-7278490__340.jpg">
                    </a>
                </div>
                <div class="w-full rounded">
                    <a class="spotlight" href="https://cdn.pixabay.com/photo/2022/01/04/16/01/lighthouse-6915406__340.jpg"
                        data-src-800="https://cdn.pixabay.com/photo/2022/01/04/16/01/lighthouse-6915406__340.jpg"
                        data-src-1200="https://cdn.pixabay.com/photo/2022/01/04/16/01/lighthouse-6915406__340.jpg"
                        data-src-2400="https://cdn.pixabay.com/photo/2022/01/04/16/01/lighthouse-6915406__340.jpg"
                        data-src-3800="https://cdn.pixabay.com/photo/2022/01/04/16/01/lighthouse-6915406__340.jpg">
                        <img src="https://cdn.pixabay.com/photo/2022/01/04/16/01/lighthouse-6915406__340.jpg">
                    </a>
                </div>
                <div class="w-full rounded">
                    <a class="spotlight" href="https://cdn.pixabay.com/photo/2022/06/19/07/12/mount-kilimanjaro-7271184__340.jpg"
                        data-src-800="https://cdn.pixabay.com/photo/2022/06/19/07/12/mount-kilimanjaro-7271184__340.jpg"
                        data-src-1200="https://cdn.pixabay.com/photo/2022/06/19/07/12/mount-kilimanjaro-7271184__340.jpg"
                        data-src-2400="https://cdn.pixabay.com/photo/2022/06/19/07/12/mount-kilimanjaro-7271184__340.jpg"
                        data-src-3800="https://cdn.pixabay.com/photo/2022/06/19/07/12/mount-kilimanjaro-7271184__340.jpg">
                        <img src="https://cdn.pixabay.com/photo/2022/06/19/07/12/mount-kilimanjaro-7271184__340.jpg">
                    </a>
                </div>
            </div>
            <section class="relative block bg-gray-900">
                <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                        class="text-gray-900 fill-current"
                        points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4 pt-8 lg:pt-24">
                    <div class="flex flex-wrap text-center justify-center">
                        <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Suivez-moi sur les réseaux</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Ajouter un texte mi-long et constructif pq suivre sur les réseaux
                        </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-12 justify-center">
                        <div class="w-full lg:w-3/12 px-4 text-center">
                            <div class="bg-red-600 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                            >
                                <svg class="h-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            </div>
                            <h5 class="text-xl mt-5 font-semibold text-white">
                                Instagram
                            </h5>
                        </div>
                        <div class="w-full lg:w-3/12 px-4 text-center mt-4 mb-4">
                            <div
                                class="bg-red-600 text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                            >
                                <svg class="h-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                            </div>
                            <h5 class="text-xl mt-5 font-semibold text-white">
                                TikTok
                            </h5>
                        </div>
                        <div class="w-full lg:w-3/12 px-4 text-center">
                            <div class="bg-red-600 text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                <svg class="h-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                            </div>
                            <h5 class="text-xl mt-5 font-semibold text-white">Facebook</h5>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-gray-900">
                <div class="container px-4 mx-auto">
                    <div class="max-w-3xl mx-auto mb-16 text-center">
                        <span class="font-semibold tracking-wider uppercase font-semibold text-white">TARIFS</span>
                        <h2 class="text-4xl bold text-white lg:text-5xl">Quelle offre vous représente le plus ?</h2>
                    </div>
                    <div class="flex flex-wrap items-stretch justify-center w-5/6 m-auto">
                        <div class="flex w-full mb-8 lg:w-1/3 lg:mb-0">
                            <div class="flex flex-col p-6 space-y-6 rounded shadow sm:p-8 bg-black w-full">
                                <div class="space-y-2">
                                    <h4 class="text-2xl text-white font-bold">Découverte</h4>
                                    <span class="text-6xl text-white font-bold">50 €</span>
                                </div>
                                <p class="mt-3 leading-relaxed text-red-600">Pour découvrir la photo.</p>
                                <ul class="flex-1 mb-6 text-red-600">
                                    <li class="flex mb-2 space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>100 Prises</span>
                                    </li>
                                    <li class="flex mb-2 space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Solo</span>
                                    </li>
                                    <li class="flex mb-2 space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Groupe</span>
                                    </li>
                                </ul>
                                <button type="button" class="inline-block px-5 py-3 font-semibold tracking-wider text-center rounded bg-red-600 text-black">Prendre contact</button>
                            </div>
                        </div>
                        <div class="flex w-full mb-8 lg:w-1/3 lg:mb-0 lg:rounded-lg sm-h-full">
                            <div class="flex flex-col p-6 space-y-6 rounded-lg shadow sm:p-8 bg-red-600 w-full lg:-mt-7" style="height: 112%;">
                                <div class="space-y-2">
                                    <h4 class="text-2xl text-white font-bold">Pro</h4>
                                    <span class="text-6xl text-white font-bold">100 €</span>
                                </div>
                                <p class="leading-relaxed">Pour profiter en solo ou en groupe.</p>
                                <ul class="flex-1 space-y-2">
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>200 Prises</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Solo</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Groupe</span>
                                    </li>
                                </ul>
                                <a rel="noopener noreferrer" href="mailto:hauskwar@gmail.com" class="inline-block w-full px-5 py-3 text-white font-bold tracking-wider text-center rounded bg-black text-red-600">Prendre contact</a>
                            </div>
                        </div>
                        <div class="flex w-full mb-8 lg:w-1/3 lg:mb-0">
                            <div class="flex flex-col p-6 space-y-6 rounded shadow sm:p-8 bg-black w-full">
                                <div class="space-y-2">
                                    <h4 class="text-2xl text-white font-bold">Évènements</h4>
                                    <span class="text-6xl text-white font-bold">200 €</span>
                                </div>
                                <p class="leading-relaxed text-red-600">Pour ne pas se prendre la tête.</p>
                                <ul class="space-y-2 text-red-600">
                                    <li class="flex items-start space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Prises illimitées</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Solo</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Groupe</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Évènements spéciaux</span>
                                    </li>
                                </ul>
                                <a rel="noopener noreferrer" href="mailto:hauskwar@gmail.com" class="inline-block w-full px-5 py-3 font-semibold tracking-wider text-center rounded bg-red-600 text-black">Prendre contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer-component></footer-component>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <script>
            // Get the modal by id
            var modal = document.getElementById("modal");
    
            // Get the modal image tag
            var modalImg = document.getElementById("modal-img");
    
            // this function is called when a small image is clicked
            function showModal(src) {
                modal.classList.remove('hidden');
                modalImg.src = src;
            }
    
            // this function is called when the close button is clicked
            function closeModal() {
                modal.classList.add('hidden');
            }
        </script>
    
    </body>
</html>
