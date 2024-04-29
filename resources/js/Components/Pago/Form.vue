<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Pago Actualizado' : 'Crear Nuevo Pago' }}
        </template>
        
        <template #description>
            {{ updating ? 'Pago Seleccionado Actualizado' : 'Crear un Nuevo Pago desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="conste" value="conste" />
                <TextInput id="conste" v-model="form.conste" type="text" autocomplete="conste" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.conste" class="mt-2" />

                <InputLabel for="fecha_pago" value="fecha_pago" />
                <TextInput id="fecha_pago" v-model="form.fecha_pago" type="Date" autocomplete="fecha_pago" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.fecha_pago" class="mt-2" />

                <InputLabel for="metodo_pago" value="Metodo Pago" />
                <TextInput id="metodo_pago" v-model="form.metodo_pago" type="text" autocomplete="metodo_pago" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.metodo_pago" class="mt-2" />

                <InputLabel for="id_venta" value="Venta" />
                <select name="id_venta" id="id_venta">
                    <option v-for="venta in ventas" :value="venta.id">{{ venta.conste }}</option>
                </select>
                <InputError :message="$page.props.errors.id_venta" class="mt-2" />

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

module.exports = {
    name: 'PagoForm',
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
        },
        ventas: {
            type: Object,
            required:true
        }
    
    },

    emits: ['submit']
}
 
</script>
