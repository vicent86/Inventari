<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Cliente Actualizado' : 'Crear Nuevo Cliente' }}
        </template>
        
        <template #description>
            {{ updating ? 'Cliente Seleccionado Actualizado' : 'Crear un Nuevo Cliente desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="nombre" value="nombre" />
                <TextInput id="nombre" v-model="form.nombre" type="text" autocomplete="nombre" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.nombre" class="mt-2" />

                <InputLabel for="direccion" value="direccion" />
                <TextInput id="direccion" v-model="form.direccion" type="text" autocomplete="direccion" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.direccion" class="mt-2" />

                <InputLabel for="telefono" value="telefono" />
                <TextInput id="telefono" v-model="form.telefono" type="text" autocomplete="telefono" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.telefono" class="mt-2" />

                <InputLabel for="cif" value="cif" />
                <TextInput id="cif" v-model="form.cif" type="text" autocomplete="cif" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.cif" class="mt-2" />
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
    name: 'ClienteForm'
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
        }
    
})

defineEmits(['submit'])

</script>
