<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Venta Actualizada' : 'Crear Nueva Venta' }}
        </template>
        
        <template #description>
            {{ updating ? 'Venta Seleccionada Actualizada' : 'Crear una Nueva Venta desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="precio_total" value="precio_total" />
                <TextInput id="precio_total" v-model="form.precio_total" type="number" autocomplete="precio_total" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.precio_total" class="mt-2" />

                <InputLabel for="fecha_venta" value="fecha_venta" />
                <TextInput id="fecha_venta" v-model="form.fecha_venta" type="date" autocomplete="fecha_venta" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.fecha_venta" class="mt-2" />

                <InputLabel for="cliente_id" value="Cliente" />
                <select name="cliente_id" id="cliente_id">
                    <option v-for="cliente in clientes" :value="cliente.id">{{ cliente.nombre }}</option>
                </select>
                <InputError :message="$page.props.errors.cliente_id" class="mt-2" />
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
    name: 'VentaForm',
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
