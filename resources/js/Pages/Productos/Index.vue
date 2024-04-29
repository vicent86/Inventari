<template>
    <AuthenticatedLayout>
        <template #header>
            <h1 class="font-semibolt text-xl text-gray-800 leading-type">
                Productos
            </h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between" v-if="$page.props.user && $page.props.user.permissions.include('create products')">
                        <Link :href="route('productos.create')" class="text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded" v-if="$page.props.user && $page.props.user.permissions.include('create products')">
                            CREAR PRODUCTO
                        </Link>
                    </div>
                </div>

                <div class="mt-4">
                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5" v-for="producto in productos.data" >
                            <div class="flex min-w-0 gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    <p
                                        class="text-md font-semibold leading-6 text-gray-900"
                                    >
                                        {{ producto.nombre }}
                                        {{ producto.descripcion }}
                        
                                    </p>
                                </div>
                            </div>
                            <div
                                class="hidden shrink-0 sm:flex sm:flex-col sm:items-end"
                            >
                                <p class="text-md leading-6 text-gray-900">
                                    <Link class="py-2 px-4 text-green-600" :href="route('productos.edit', producto.id)" v-if="$page.props.user && $page.props.user.permissions.include('update products')">Editar</Link> 
                                    <Link class="py-2 px-4 text-red-600" @click="deleteProducto(producto.id)" v-if="$page.props.user && $page.props.user.permissions.include('delete products')">Borrar</Link>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-between mt-2">
                        <Link v-if="productos.current_page > 1" :href="productos.prev_page_url" class="py-2 px-4 rounded">
                            PREVIOUS
                        </Link>
                        <div v-else></div>
                        <Link v-if="productos.current_page < productos.last_page" :href="productos.next_page_url" class="py-2 px-4 rounded">
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

module.exports =  {
    name: "ProductosIndex",
    components: {
        AuthenticatedLayout,
        Link
    },
    props: {
        productos: {
            type: Object,
            required: true,
        }
    },
    methods:{
        deleteProducto(id){
            if (confirm("¿Está seguro de eliminar este producto?")) {
                Inertia.delete(route('productos.destroy', id))
            }
        }
    }

};

</script>
