<template>
  <AuthenticatedLayout title="Edit Proveedor">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Proveedor</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ProveedorForm :updating="true" :form="form" @submit="form.put(route('proveedores.update', proveedor.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
const { useForm } = require('@inertiajs/vue3');
const AuthenticatedLayout = require('@/Layouts/AuthenticatedLayout.vue');
const ProveedorForm = require('@/Components/Proveedores/Form.vue');

module.exports = {
    name: 'ProveedorEdit',
    components: {
        AuthenticatedLayout,
        ProveedorForm
    },
    props: {
        proveedor : {
            type : Object,
            required : true
        }
    },

    setup() {
        const form = useForm({
            nombre: this.proveedor.nombre,
            direccion: this.proveedor.direccion,
            email: this.proveedor.email,
            cif : this.proveedor.cif,
            estado : this.proveedor.estado,
            cualificacion: this.proveedor.cualificacion
        });
        return { form };
    }
};

</script>

