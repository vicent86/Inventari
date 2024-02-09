<template>
    <AuthenticatedLayout>
        <template title="Create Role">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Crear Role</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <RoleForm :form="form" @submit="form.post(route('roles.store'))" />
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
const RoleForm = require('@/Components/Roles/Form.vue');

module.exports =  {
    name: 'RolesCreate',
    components: {
        AuthenticatedLayout,
        RoleForm
    },
    setup() {
        const form = useForm({
            name: '',
    
        });
        return { form };
    }
}


</script>

