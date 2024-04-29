<template>
  <AuthenticatedLayout title="Edit Stock">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Stock</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <StockForm :updating="true" :form="form" @submit="form.put(route('stocks.update', stock.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
const { useForm } = require('@inertiajs/vue3');
const AuthenticatedLayout = require('@/Layouts/AuthenticatedLayout.vue');
const StockForm = require('@/Components/Stocks/Form.vue');

module.exports = {
    name: 'StockEdit',
    components: {
        AuthenticatedLayout,
        StockForm,
    },
    props: {
        stock : {
            type : Object,
            required : true
        }
    },
    setup() {
        const form = useForm({
            cantidad: this.stock.cantidad,
            ultima_actualizacion : this.stock.ultima_actualizacion,
            localizacion: this.stock.localizacion
        });
        
        return { form };
    }
};

</script>

