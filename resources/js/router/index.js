import { createRouter, createWebHistory } from "vue-router";

import CategoriasIndex from "@/Components/Categorias/CategoriasIndex.vue";

const routes = [
    {
        path: '/dashboard',
        name: 'categorias.index',
        component: CategoriasIndex,
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})