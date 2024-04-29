<template>
  <AuthenticatedLayout title="Edit Venta">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Venta</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Precio total: {{ form.value.precio_total }}</p>
                    <p>Fecha de venta: {{ form.value.fecha_venta }}</p>
                    <VentaForm :updating="true" :form="form" @submit="form.put(route('ventas.update', venta.id))" />
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
    name: 'VentaEdit',
    components: {
        AuthenticatedLayout,
        VentaForm,
    },
    props: {
        venta : {
            type : Object,
            required : true
        }
    },
    setup() {
        const form = useForm({
            precio_total: this.venta.precio_total,
            fecha_venta : this.venta.fecha_venta
        });
        // Haz algo con 'form' aquí...
        return { form };
    }
};
</script>

