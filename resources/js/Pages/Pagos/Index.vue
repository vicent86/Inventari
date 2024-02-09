<template>
    <AuthenticatedLayout>
        <template #header>
            <h1 class="font-semibolt text-xl text-gray-800 leading-type">
                Pagos
            </h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between" v-if="$page.props.user && $page.props.user.permissions.include('create payments')">
                        <Link :href="route('pagos.create')" class="text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded" v-if="$page.props.user && $page.props.user.permissions.include('create payments')">
                            CREAR PAGO
                        </Link>
                    </div>
                </div>

                <div class="mt-4">
                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5" v-for="pago in pagos.data" >
                            <div class="flex min-w-0 gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    <p
                                        class="text-md font-semibold leading-6 text-gray-900"
                                    >
                                        {{ pago.conste }}
                                        {{ pago.fecha_pago }}
                                        {{ pago.metodo_pago }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="hidden shrink-0 sm:flex sm:flex-col sm:items-end"
                            >
                                <p class="text-md leading-6 text-gray-900">
                                    <Link class="py-2 px-4 text-green-600" :href="route('pagos.edit', pago.id)" v-if="$page.props.user && $page.props.user.permissions.include('update payments')">Editar</Link> 
                                    <Link class="py-2 px-4 text-red-600" @click="deletePago(pago.id)" v-if="$page.props.user && $page.props.user.permissions.include('delete payments')">Borrar</Link>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-between mt-2">
                        <Link v-if="pagos.current_page > 1" :href="pagos.prev_page_url" class="py-2 px-4 rounded">
                            PREVIOUS
                        </Link>
                        <div v-else></div>
                        <Link v-if="pagoss.current_page < pagos.last_page" :href="pagos.next_page_url" class="py-2 px-4 rounded">
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
    name: "PagosIndex",
    components: {
        AuthenticatedLayout,
        Link
    },
    props: {
        pagos: {
            type: Object,
            required: true,
        }
    },

    methods: {
        deletePago (id) {
            if (confirm("¿Está seguro de eliminar este Pago?")) {
                Inertia.delete(route('pago.destroy', id))
            }
        }
    }

};

</script>
