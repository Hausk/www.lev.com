<template>
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div class=" w-full pointer-events-none -mt-20" style="background-color: #111827; margin-bottom: -9%;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#d1d5db" fill-opacity="1" d="M0,160L80,149.3C160,139,320,117,480,117.3C640,117,800,139,960,133.3C1120,128,1280,96,1360,80L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-full px-4 text-center">
            <h4 class="text-3xl font-semibold">Suivez-moi sur les réseaux !</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              Je partage ma passion avec vous pratiquement tous les jours.
            </h5>
            <div class="flex mt-6 justify-center">
              <a target="blank" href="https://instagram.com/libre_vivant_photographie?igshid=YmMyMTA2M2Y=" class="flex bg-gray-800 text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-2"
                type="button">
                <svg class="h-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
              </a>
              <a target="blank" href="https://m.facebook.com/profile.php?id=100072519471892"
                class="flex bg-gray-800 text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-2"
                type="button">
                <svg class="h-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
              </a>
              <a target="blank" href="https://www.tiktok.com/@mrsyzyamaha75?_t=8W7hRl6Le9V&_r=1" class="flex bg-gray-800 text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-2"
                type="button">
                <svg class="h-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
              </a>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © {{date}} Libre & vivant photographie.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </template>
  <script>
  export default {
    data() {
      return {
        date: new Date().getFullYear()
      }
    }
  }
  </script>