<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Role Actualizado' : 'Crear Nuevo Role' }}
        </template>
        
        <template #description>
            {{ updating ? 'Role Seleccionado Actualizado' : 'Crear un Nuevo Role desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="name" value="name" />
                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.name" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Actualizar' : 'Crear' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>

<script>
const FormSection = require('@/Components/FormSection.vue');
const InputError = require('@/Components/InputError.vue');
const InputLabel = require('@/Components/InputLabel.vue');
const PrimaryButton = require('@/Components/PrimaryButton.vue');
const TextInput = require('@/Components/TextInput.vue');

module.exports =  {
    name: 'RoleForm',
    components: {
        FormSection,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput
    },
    props: {
        form: {
            type: Object,
            required: true
        },
        updating: {
            type: Boolean,
            required:false,
            default: false
        }
    },

    emits: ['submit']

}
   
</script>
