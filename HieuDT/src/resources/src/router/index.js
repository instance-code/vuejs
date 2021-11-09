
import Home from '../layouts/Home.vue'
import Dashboard from '../layouts/Dashboard.vue'
import Calculator from '../layouts/Calculator.vue'

import { createWebHistory, createRouter } from "vue-router";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home

    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard

    },
    {
        path: '/calculator',
        name: 'Calculator',
        component: Calculator

    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
  });
  
  export default router;