<template>
    <select v-model="currentSelection">
        <option v-for="(item, index) in collection" :key="index">
            {{ item?.nombre }}
        </option>
    </select>
    <button @click="handleAddToSelection">Añadir</button>
    <div>
        <ul>
            <li v-for="(item, index) in selection" :key="index">
                {{ item?.nombre }}
            </li>
        </ul>
    </div>
</template>

<script>
const vue = require("vue");

module.exports = {
    name: "CollectionSelector",
    props: {
        collection: {
            type: Array,
            required: true,
        },
    },
    setup() {
        const currentSelection = vue.ref(1);
        const selection = vue.ref([]);

        const handleAddToSelection = () => {
            selection.value.push(currentSelection);
        };

        return {
            currentSelection,
            selection,
            handleAddToSelection,
        };
    },
};
</script>
