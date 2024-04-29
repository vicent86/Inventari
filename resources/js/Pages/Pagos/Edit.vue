<template>
  <AuthenticatedLayout title="Edit Pago">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Pago</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <PagoForm :updating="true" :form="form" @submit="form.put(route('pagos.update', pago.id))" />
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
    name: 'PagoEdit',
    components: {
        AuthenticatedLayout,
        PagoForm
    },
    props: {
        pago : {
            type : Object,
            required : true
        }
    },
    setup() {
        const form = useForm({
            importe: this.pago.importe,
            fecha_pago : this.pago.fecha_pago,
            metodo_pago: this.pago.metodo_pago
        });
        
        return{ form };
    }

};


</script>

