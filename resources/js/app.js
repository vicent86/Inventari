import { createApp, h } from 'vue';
import { App, plugin } from '@inertiajs/inertia-vue3';
import Welcome from './Pages/Welcome.vue';
import { Ziggy } from './ziggy';

// Hacer Ziggy disponible en el ámbito global
window.Ziggy = Ziggy;

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
}).use(plugin).mixin({ methods: { route } }).mount(el);
