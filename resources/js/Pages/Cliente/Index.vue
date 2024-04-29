<template>
    <AuthenticatedLayout>
        <template #header>
            <h1 class="font-semibolt text-xl text-gray-800 leading-type">
                Clientes
            </h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between" v-if="$page.props.user && $page.props.user.permissions.include('create clientes')">
                        <Link :href="route('clientes.create')" class="text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded" v-if="$page.props.user && $page.props.user.permissions.include('create clientes')">
                            CREAR CLIENTE
                        </Link>
                    </div>
                </div>

                <div class="mt-4">
                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5" v-for="cliente in clientes.data" >
                            <div class="flex min-w-0 gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    <p
                                        class="text-md font-semibold leading-6 text-gray-900"
                                    >
                                        {{ cliente.nombre }}
                                        {{ cliente.direccion }}
                                        {{ cliente.telefono }}
                                        {{ cliente.cif }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="hidden shrink-0 sm:flex sm:flex-col sm:items-end"
                            >
                                <p class="text-md leading-6 text-gray-900">
                                    <Link class="py-2 px-4 text-green-600" :href="route('clientes.edit', cliente.id)" v-if="$page.props.user && $page.props.user.permissions.include('update clientes')">Editar</Link> 
                                    <Link class="py-2 px-4 text-red-600" @click="deleteCliente(cliente.id)" v-if="$page.props.user && $page.props.user.permissions.include('delete clientes')">Borrar</Link>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-between mt-2">
                        <Link v-if="clientes.current_page > 1" :href="categories.prev_page_url" class="py-2 px-4 rounded">
                            PREVIOUS
                        </Link>
                        <div v-else></div>
                        <Link v-if="clientes.current_page < clientes.last_page" :href="clientes.next_page_url" class="py-2 px-4 rounded">
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
    name: "ClientesIndex",
    components: {
        AuthenticatedLayout,
        Link
    },
    props: {
        clientes: {
            type: Object,
            required: true,
        }
    },
    methods: {
        deleteCliente (id) {
            if (confirm("¿Está seguro de eliminar este cliente?")) {
                Inertia.delete(route('cliente.destroy', id))
            }
        }       
    }
};

</script>
