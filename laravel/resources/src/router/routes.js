import { createRouter, createWebHistory } from 'vue-router'

import HelloWorld from "@/components/HelloWorld.vue"

const routes = [
    {
        path: '/',
        name: "HelloWorld",
        component: HelloWorld
    },
    {
        path: '/computer',
        name: "Computer",
        component: () => import("@/pages/Computer.vue")
    },
    {
        path: '/add',
        name: "Add",
        component: () => import("@/pages/AddName.vue")
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router
