<template>
    <AuthenticatedLayout>
        <template title="Create Stock">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Stock</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <StockForm :form="form" :productos="productos" @submit="form.post(route('stocks.store'))" />
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
const StockForm = require('@/Components/Stocks/Form.vue');

module.exports = {
    name: 'StocksCreate',
    components: {
        AuthenticatedLayout,
        StockForm
    },
    props: {
        productos: {
            type: Object,
            required: true,
        }
    },
    setup() {
        const form = useForm({
            cantidad: 0,
            ultima_actualizacion: Date,
            localizacion : ''
        });
        return { form };
    }
};



</script>

