<script setup>
    import useUsers from '../../composables/users.js';
    import { onMounted } from 'vue';

    const { users, getUsers, destroyUser} = useUsers();

    onMounted(() => getUsers());
</script>

<template>
    <div class="mt-12 py-14 flex items-center justify-center">
        <router-link :to="{name: 'userCreate'}" class="text-white bg-gradient-to-r from-indigo-500 to-purple-500 hover:bg-gradient-to-bl rounded focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Añadir usuario</router-link>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="ttext-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        password
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for ="user in users" :key="user.id" class="bg-blue-100 border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">{{ user.name }}</td>
                    <td class="py-4 px-6">{{ user.email}}</td>
                    <td class="py-4 px-6">{{ user.password }}</td>
                    <td class="py-4 px-6">
                        <router-link :to="{ name: 'userEdit', params: { id: user.id }}" 
                        class="text-white bg-gradient-to-r from-indigo-500 to-purple-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                        >Editar</router-link>
                    </td>
                    <td class="py-4 px-6">
                        <button @click="destroyUser(user.id)"
                        class="text-white bg-gradient-to-r from-indigo-500 to-purple-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Eliminar</button>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>


</template>