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
                <InputLabel for="importe" value="Importe" />
                <TextInput id="importe" v-model="form.importe" type="text" autocomplete="importe" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.importe" class="mt-2" />

                <InputLabel for="fecha_pago" value="fecha_pago" />
                <TextInput id="fecha_pago" v-model="form.fecha_pago" type="Date" autocomplete="fecha_pago" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.fecha_pago" class="mt-2" />

                <InputLabel for="metodo_pago" value="Metodo Pago" />
                <TextInput id="metodo_pago" v-model="form.metodo_pago" type="text" autocomplete="metodo_pago" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.metodo_pago" class="mt-2" />

                <InputLabel for="id_venta" value="Venta" />
                <select name="id_venta" id="id_venta">
                    <option v-for="venta in ventas" :value="venta.id">{{ venta.importe }}</option>
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
export default {
    name: 'PagoForm'
}
</script>

<script setup>
import FormSection from '../../Components/FormSection.vue'
import InputError from '../../Components/InputError.vue'
import InputLabel from '../../Components/InputLabel.vue'
import PrimaryButton from '../../Components/PrimaryButton.vue'
import TextInput from '../../Components/TextInput.vue'
 
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
    ventas: {
        type: Object,
        required:true
    }
    
})

defineEmits(['submit'])

</script>
