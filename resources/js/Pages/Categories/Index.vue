<template>
    <AuthenticatedLayout>
        <template #header>
            <h1 class="font-semibolt text-xl text-gray-800 leading-type">
                Categories
            </h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between" v-if="$page.props.user && $page.props.user.permissions.include('create categories')">
                        <Link :href="route('categories.create')" class="text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded" v-if="$page.props.user && $page.props.user.permissions.include('create categories')">
                            CREAR CATEGORIA
                        </Link>
                    </div>
                </div>

                <div class="mt-4">
                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5" v-for="category in categories.data" >
                            <div class="flex min-w-0 gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    <p
                                        class="text-md font-semibold leading-6 text-gray-900"
                                    >
                                        {{ category.nombre }}
                                        {{ category.descripcion }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="hidden shrink-0 sm:flex sm:flex-col sm:items-end"
                            >
                                <p class="text-md leading-6 text-gray-900">
                                    <Link class="py-2 px-4 text-green-600" :href="route('categories.edit', category.id)" v-if="$page.props.user && $page.props.user.permissions.include('update categories')">Editar</Link>
                                    <Link class="py-2 px-4 text-red-600" @click="deleteCategory(category.id)" v-if="$page.props.user && $page.props.user.permissions.include('delete categories')">Borrar</Link>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-between mt-2">
                        <Link v-if="categories.current_page > 1" :href="categories.prev_page_url" class="py-2 px-4 rounded">
                            PREVIOUS
                        </Link>
                        <div v-else></div>
                        <Link v-if="categories.current_page < categories.last_page" :href="categories.next_page_url" class="py-2 px-4 rounded">
                            NEXT
                        </Link>
                        <div v-else></div>
                    </div>
                </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
const AuthenticatedLayout = require("@/Layouts/AuthenticatedLayout.vue");
const { Link } = require("@inertiajs/vue3");
const { Inertia } = require("@inertiajs/inertia");

module.exports = {
    name: "CategoriesIndex",
    components: {
        AuthenticatedLayout,
        Link
    },
    props: {
        categories: {
            type: Object,
            required: true,
        }   
    },

    methods: {
        deleteCategory (id) {
            if (confirm("¿Está seguro de eliminar esta categoría?")) {
                Inertia.delete(route('categories.destroy', id));
            }
        }
    }
};


</script>
