<script setup>
    import { reactive } from 'vue';
    import useUsers from '../../composables/users.js';

    const { storeUser } = useUsers();
    const form = reactive({
        nombre: "",
        email: "",
        password: ""
    })
</script>

<template>
    <div class="max-w-md mx-auto p-4 bg--write shadow-md rounded-md flex items-center justify-center h-screen" @submit.prevent="storeUser(form)">
        <form>
            <div class="grid gap-6 mb- md:grid-cols-2">
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre usuario</label>
                <input type="text" id="nombre" v-model="form.nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Maria" required>
            </div>
            <div>
                <label for="sabor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="sabor" v-model="form.email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="user@gmail.com" required>
            </div>
            <div>
                <label for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="integer" id="cantidad" v-model="form.password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Maria2023" required>
            </div>  
            
            </div>
                <button type="submit" 
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Añadir</button>
        </form>

    </div>
</template>