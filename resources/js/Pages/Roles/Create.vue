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
export default {
    name: 'RolesCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue';
import RoleForm from '../../Components/Roles/Form.vue'

const form = useForm({
    name: '',
    
})
</script>

<style>

</style>