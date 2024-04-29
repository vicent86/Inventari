<template>
    <AuthenticatedLayout>
        <template title="Create Category">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Categoria</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <CategoryForm :form="form" @submit="form.post(route('categories.store'))" />
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
const CategoryForm = require('@/Components/Categorias/CategoriasIndex.vue');

module.exports = {
    name: 'CategoriesCreate',
    components: {
        AuthenticatedLayout,
        CategoryForm
    },
    setup() {
        const form = useForm({
            nombre: '',
            descripcion: '',
            estado: false
        });

        return { form };
    }
}


</script>

