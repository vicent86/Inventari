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
export default {
    name: 'StockForm'
}
</script>

<script setup>
import FormSection from '@/Components/FormSection.vue'
import InputError from '@/Componments/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
   
defineProps({

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
})

defineEmits(['submit'])

</script>
