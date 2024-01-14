import { createApp, h } from 'vue';
import { App, plugin } from '@inertiajs/inertia-vue3';
import Welcome from './Pages/Welcome.vue';

const el = document.getElementById('app');

createApp({
    render: () => h(App, {
        initialPage: JSON.parse(el.dataset.page),
        resolveComponent: (name) => {
            if (name === 'Welcome') {
                return Welcome;
            }
            return require(`./Pages/${name}`).default;
        },
    }),
}).use(plugin).mount(el);

