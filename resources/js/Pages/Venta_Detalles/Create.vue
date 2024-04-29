<template>
    <AuthenticatedLayout>
        <template title="Create Venta_Detalle">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Venta_Detalle</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <VentaDetalleForm :form="form" :productos="productos" :ventas="ventas"  @submit="form.post(route('venta_detalles.store'))" />
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
const VentaDetalleForm = require('@/Components/Venta_Detalles/Form.vue');

module.exports = {
    name: 'VentaDetallesCreate',
    components: {
        AuthenticatedLayout,
        VentaDetalleForm
    },
    props:{
        
        productos: {
            type: Object,
            required: true,
        },
        ventas: {
            type: Object,
            required: true,
        }

    },
    setup() {
        const form = useForm({
            precio_producto: 0.00,
            cantidad: 0,
        });

        return { form };
    }

};

</script>

