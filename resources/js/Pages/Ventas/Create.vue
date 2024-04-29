<template>
    <AuthenticatedLayout>
        <template title="Create Venta">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Venta</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <VentaForm :form="form" :clientes="clientes" @submit="form.post(route('ventas.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
  
</template>

<script>
const AuthenticatedLayout = require("@/Layouts/AuthenticatedLayout.vue");
const VentaForm = require("@/Components/Ventas/Form.vue");
const { useForm } = require('@inertiajs/vue3');

module.exports = {
    name: 'VentasCreate',
    components: {
        AuthenticatedLayout,
        VentaForm,
    },
    props: {
        clientes: {
            type: Object,
            required: true
        }
    },
    setup() {
        const form = useForm({
            precio_total: 0.00,
            fecha_venta: Date
        });
        return { form };
    }
};
</script>

