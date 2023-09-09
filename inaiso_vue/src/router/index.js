import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/users',
      name: 'userIndex',
      component: () => import('../views/users/userIndex.vue')
    },
    {
      path: '/users/create',
      name: 'userCreate',
      component: () => import('../views/users/userCreate.vue')
    },

  ]
})

export default router
