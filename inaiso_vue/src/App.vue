<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>

    <div class="max-w-7xl mx-auto">
      
      <nav class="bg-blue-100 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a class="flex items-center">
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-green-500">INAISO</span>
          </a>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-200 rounded-lg bg-blue-100 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-blue-100 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <RouterLink class="px-4 py-2 mr-4 bg-gradient-to-r from-indigo-500 to-purple-500 hover:bg-green-800 rounded text-white" 
              to="/">Home</RouterLink>
            </li>
            <li>
              <RouterLink class="px-4 py-2 mr-4 bg-gradient-to-r from-indigo-500 to-purple-500 hover:bg-green-800 rounded text-white"
              to="/users">Usuarios</RouterLink>
            </li>

          </ul>
        </div>
        </div>
      </nav>

    </div>
  </header>

  <main class="max-w-7xl mx-auto min-h-screen">
    <RouterView/>
  </main>
</template>


