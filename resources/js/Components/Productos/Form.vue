<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Producto Actualizado' : 'Crear Nuevo Producto' }}
        </template>
        
        <template #description>
            {{ updating ? 'Producto Seleccionado Actualizado' : 'Crear un Nuevo Producto desde cero' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="nombre" value="Nombre" />
                <TextInput id="nombre" v-model="form.nombre" type="text" autocomplete="nombre" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.nombre" class="mt-2" />

                <InputLabel for="descripcion" value="Descripcion" />
                <TextInput id="descripcion" v-model="form.descripcion" type="text" autocomplete="descripcion" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.descripcion" class="mt-2" />

                <InputLabel for="content_uri" value="Content URI" />
                <TextInput id="content_uri" v-model="form.content_uri" type="text" autocomplete="content_uri" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.content_uri" class="mt-2" />

                <InputLabel  value="PDF" />
                <SecondaryButton class="mt-2 mr-2" type="button">Subir PDF</SecondaryButton>
                <InputError :message="$page.props.errors.pdf_uri" class="mt-2" />
                
                <InputLabel for="precio" value="Precio" />
                <TextInput id="precio" v-model="form.precio" type="text" autocomplete="precio" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.precio" class="mt-2" />

                <InputLabel for="iva" value="IVA" />
                <TextInput id="iva" v-model="form.precio" type="text" autocomplete="iva" class="mt-1 block w-full" />
                <InputError :message="$page.props.errors.iva" class="mt-2" />
                
                <InputLabel for="category_id" value="Category" />
                <select name="category_id" id="category_id">
                    <option v-for="category in categories" :value="category.id">{{ category.nombre }}</option>
                </select>
                <InputError :message="$page.props.errors.category_id" class="mt-2" />

                <CollectionSelector :collection="proveedores"></CollectionSelector>

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
    name: 'ProductoForm'
}
</script>

<script setup>
import FormSection from '../../Components/FormSection.vue'
import InputError from '../../Components/InputError.vue'
import InputLabel from '../../Components/InputLabel.vue'
import PrimaryButton from '../../Components/PrimaryButton.vue'
import TextInput from '../../Components/TextInput.vue'
import SecondaryButton from '../../Components/SecondaryButton.vue'
import CollectionSelector from '../Common/CollectionSelector.vue'
    
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
        categories: {
            type: Object,
            required:true
        },
        stock: {
            type: Object,
            required:true,
        }
    
})

defineEmits(['submit'])

</script>
