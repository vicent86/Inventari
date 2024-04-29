<template>
  <AuthenticatedLayout title="Edit Cliente">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Cliente</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ClienteForm :updating="true" :form="form" @submit="form.put(route('clientes.update', cliente.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
const { useForm } = require('@inertiajs/vue3');
const AuthenticatedLayout = require('@/Layouts/AuthenticatedLayout.vue');
const ClienteForm = require('@/Components/Cliente/Form.vue');

module.exports =  {
    name: 'ClienteEdit',
    components: {
        AuthenticatedLayout,
        ClienteForm
    },
    props: {
        cliente : {
            type : Object,
            required : true
        }
    },
    setup() {
        const form = useForm({
            nombre: this.cliente.nombre,
            direccion : this.cliente.direccion,
            telefono : this.cliente.telefono,
            cif : this.cliente.cif
        });
        
        return { form };
    }
};




</script>

