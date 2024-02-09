<template>
  <AuthenticatedLayout title="Edit Venta_Detalle">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Venta_Detalle</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <VentaDetalleForm :updating="true" :form="form" @submit="form.put(route('venta_detalles.update', venta_detalle.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
const { useForm } = require('@inertiajs/vue3');
const AuthenticatedLayout = require('@/Layouts/AuthenticatedLayout.vue');
const VentaDetalleForm = require('@/Components/Venta_Detalles/Form.vue');

module.exports = {
    name: 'VentaDetallesEdit',
    components : {
        AuthenticatedLayout,
        VentaDetalleForm
    },
    props: {
        venta_detalle : {
            type : Object,
            required : true
        }
    },
    setup(){
        const form = useForm({
            precio_producto: this.category.nombre,
            cantidad : this.category.descripcion
        })

        return { form };
    }
};



</script>

