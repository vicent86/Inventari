<template>
  <AuthenticatedLayout title="Edit Role">
    <template #header>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" >Editar Role</h1>
    </template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <RoleForm :updating="true" :form="form" @submit="form.put(route('roles.update', role.id))" />
                </div>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
    name: 'RoleEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import RoleForm from '@/Components/Roles/Form.vue'

const props = defineProps ({
    role : {
        type : Object,
        required : true
    }
});

const form = useForm({
    name: props.role.name,
});
</script>

