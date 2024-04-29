<template>
  <AuthenticatedLayout title="Edit Category">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Categoria</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <CategoryForm :updating="true" :form="form" @submit="form.put(route('categories.update', category.id))" />
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

module.exports =  {
    name: 'CategoryEdit',
    components : {
        AuthenticatedLayout,
        CategoryForm
    },
    props: {
        category : {
            type : Object,
            required : true
        }
    },
    setup() {
        const form = useForm({
            nombre: this.category.nombre,
            descripcion : this.category.descripcion
        });
        return { form };
    }
};

</script>

