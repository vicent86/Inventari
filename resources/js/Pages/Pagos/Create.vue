<template>
    <AuthenticatedLayout>
        <template title="Create Pago">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Pago</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <PagoForm :form="form" :ventas="ventas" @submit="form.post(route('pagos.store'))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
  
</template>

<script>
const { useForm } = require('@inertiajs/vue3');
const AuthenticatedLayout = require('@/Layouts/AuthenticatedLayout.vue');
const PagoForm = require('@/Components/Pago/Form.vue');

module.exports = {
    name: 'PagosCreate',
    components: {
        AuthenticatedLayout,
        PagoForm
    },
    props: {
        ventas: {
            type: Object,
            required: true,
        }
    },

    setup() {
        const form = useForm({
            importe: Number,
            fecha_pago: Date,
            metodo_pago: ''
        });
        return { form };
    }
}



</script>

