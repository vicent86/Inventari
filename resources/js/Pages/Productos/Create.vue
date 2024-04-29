<template>
    <AuthenticatedLayout>
        <template title="Create Category">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Producto</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ProductoForm :form="form" :categories="categories" :stock="stock"  @submit="form.post(route('productos.store'))" />
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
const ProductoForm = require('@/Components/Productos/Form.vue');

module.exports =  {
    name: 'ProductosCreate',
    components: {
        AuthenticatedLayout,
        ProductoForm
    },
    props: {
        categories: {
            type: Object,
            required: true,
        },
        stock: {
            type: Object,
            required: true,
        }
    },
    setup() {
        const form = useForm({
            nombre: '',
            descripcion: '',
        });
        return { form };
    }

};

</script>
