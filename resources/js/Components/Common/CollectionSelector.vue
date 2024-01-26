<template>
  <select v-model="currentSelection">
    <option v-for="(item, index) in collection" :key="index">{{ item?.nombre }}</option>
  </select>
  <button @click="handleAddToSelection">Añadir</button>
  <div>
    <ul>
      <li v-for="(item,index) in selection" :key="index">
        {{ item?.nombre }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue';

defineProps({
    collection: {
      type: Array,
      required: true
    }
})

const currentSelection = ref(1)
const selection = ref([])

const handleAddToSelection = () => {
  selection.value.push(currentSelection);
}
</script>
