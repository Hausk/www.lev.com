<template>
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3">
      <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
          <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="/">Accueil</a>
          <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" v-on:click="toggleNavbar()">
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none" v-bind:class="{'hidden': !showMenu, 'block': showMenu}">
          <ul class="flex flex-col lg:flex-row list-none mr-auto">
            <li class="flex items-center">
              <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="/galerie"><i class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>Liste des photos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </template>
  <script>
  export default {
    data() {
      return {
        showMenu: false
      }
    },
    methods: {
      toggleNavbar: function(){
        this.showMenu = !this.showMenu;
      }
    }
  }
  </script>