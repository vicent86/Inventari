<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Venta_Detalle Actualizada' : 'Crear Nueva Venta_Detalle' }}
        </template>
        
        <template #description>
            {{ updating ? 'Venta_Detalle Seleccionada Actualizada' : 'Crear una Nueva Venta_Detalle desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="precio_producto" value="precio_producto" />
                <TextInput id="precio_producto" v-model="form.precio_producto" type="number" autocomplete="precio_producto" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.precio_producto" class="mt-2" />

                <InputLabel for="cantidad" value="cantidad" />
                <TextInput id="cantidad" v-model="form.cantidad" type="number" autocomplete="cantidad" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.cantidad" class="mt-2" />

                <InputLabel for="producto_id" value="Producto" />
                <select name="producto_id" id="producto_id">
                    <option v-for="producto in productos" :value="producto.id">{{ producto.precio_producto }}</option>
                </select>
                <InputError :message="$page.props.errors.producto_id" class="mt-2" />

                <CollectionSelector :collection="ventas"></CollectionSelector>

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
const CollectionSelector = require('@/Components/Common/CollectionSelector.vue');

module.exports = {
    name: 'VentaDetalleForm',
    components: {
        FormSection,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput,
        CollectionSelector,
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
        },
        ventas: {
            type: Object,
            required:true,
        }
    },
    emits: ['submit']
}
    
</script>
