<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Stock Actualizado' : 'Crear Nuevo Stock' }}
        </template>
        
        <template #description>
            {{ updating ? 'Stock Seleccionado Actualizado' : 'Crear un Nuevo Stock desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="cantidad" value="Cantidad" />
                <TextInput id="cantidad" v-model="form.cantidad" type="number" autocomplete="cantidad" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.cantidad" class="mt-2" />

                <InputLabel for="ultima_actualizacion" value="Ultima Actualizacion" />
                <TextInput id="ultima_actualizacion" v-model="form.ultima_actualizacion" type="date" autocomplete="ultima_actualizacion" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.ultima_actualizacion" class="mt-2" />

                <InputLabel for="localizacion" value="Localizacion" />
                <TextInput id="localizacion" v-model="form.localizacion" type="text" autocomplete="localizacion" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.localizacion" class="mt-2" />

                <InputLabel for="producto_id" value="Producto" />
                <select name="producto_id" id="producto_id">
                    <option v-for="producto in productos" :value="producto.id">{{ producto.cantidad }}</option>
                </select>
                <InputError :message="$page.props.errors.producto_id" class="mt-2" />

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
    name: 'StockForm',
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
        productos: {
            type: Object,
            required:true
        }
    },

    emits: ['submit']
}
   
</script>
