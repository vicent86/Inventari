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
export default {
    name: 'ProductosCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue';
import ProductoForm from '../../Components/Productos/Form.vue'

defineProps({
    categories: {
        type: Object,
        required: true,
    },
    stock: {
        type: Object,
        required: true,
    }
})

const form = useForm({
    nombre: '',
    descripcion: '',
})
</script>

<style>

</style>