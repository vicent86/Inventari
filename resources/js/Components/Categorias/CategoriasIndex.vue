<template>
    <div class="min-w-full overflow-hidden overflow-x-auto align-middle sm:rounded-md">
        <table class="min-w-full border divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Nombre</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Descripcion</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span
                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Estado</span>
                </th>
                
            </tr>
            </thead>
 
            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            <template v-for="item in categoria" :key="item.id">
                <tr class="bg-white">
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ item.nombre }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ item.descripcion }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ item.estado }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-center text-gray-900 whitespace-no-wrap">
                        <button @click="deleteCategoria(item.id)" 
                            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">
                            Elimina
                        </button>
                    </td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>
 
<script setup>
import useCategorias from '@/Composables/categorias'
import { onMounted } from 'vue';
 
const { categorias, getCategorias, destroyCategoria } = useCategorias()

const deleteCategoria = async (id) => {
    if (!window.confirm('Estas seguro de eliminar la categoria')) {
        return
    }

    await destroyCategoria(id)
    await getCategorias()
}
 
onMounted(getCategorias)
</script>