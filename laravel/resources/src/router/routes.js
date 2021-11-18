import {createRouter, createWebHistory} from 'vue-router';
import Calculator from '@/pages/Calculator.vue';
import Home from '@/pages/Home.vue';
import Add from '@/vue_example/Add.vue';

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/calculator',
        name: 'calculator',
        component: Calculator
    },
    {
        path: '/add',
        name: 'add',
        component: Add
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router