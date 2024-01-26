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
export default {
    name: 'ProveedorEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue'
import ProveedorForm from '../../Components/Proveedores/Form.vue'

const props = defineProps ({
    proveedor : {
        type : Object,
        required : true
    }
});

const form = useForm({
    nombre: props.proveedor.nombre,
    direccion: props.proveedor.direccion,
    email: props.proveedor.email,
    cif : props.proveedor.cif,
    estado : props.proveedor.estado,
    cualificacion: props.proveedor.cualificacion

})
</script>

