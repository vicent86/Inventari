<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Proveedor Actualizado' : 'Crear Nuevo Proveedor' }}
        </template>
        
        <template #description>
            {{ updating ? 'Proveedor Seleccionado Actualizado' : 'Crear un Nuevo Proveedor desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="nombre" value="nombre" />
                <TextInput id="nombre" v-model="form.nombre" type="text" autocomplete="nombre" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.nombre" class="mt-2" />

                <InputLabel for="direccion" value="direccion" />
                <TextInput id="direccion" v-model="form.direccion" type="text" autocomplete="direccion" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.direccion" class="mt-2" />

                <InputLabel for="email" value="email" />
                <TextInput id="email" v-model="form.email" type="email" autocomplete="email" class="mt-1 block w-full" palceholder="correo@correo.com" />
                <InputError :message="$page.props.errors.email" class="mt-2" />

                <InputLabel for="cif" value="cif" />
                <TextInput id="cif" v-model="form.cif" type="text" autocomplete="cif" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.cif" class="mt-2" />

                <InputLabel for="cualificacion" value="cualificacion" />
                <TextInput id="cualificacion" v-model="form.cualificacion" type="number" autocomplete="cualificacion" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.cualificacion" class="mt-2" />

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
const FormSection = require( '@/Components/FormSection.vue');
const InputError = require( '@/Components/InputError.vue');
const InputLabel = require( '@/Components/InputLabel.vue');
const PrimaryButton = require( '@/Components/PrimaryButton.vue');
const TextInput = require( '@/Components/TextInput.vue');

module.exports = {
    name: 'ProveedorForm',
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
