import { createApp, h } from 'vue';
// import { App, plugin } from '@inertiajs/inertia-vue3';
// import Welcome from './Pages/Welcome.vue';
// import { Ziggy } from './ziggy';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import route from "ziggy-js";
import { InertiaProgress } from '@inertiajs/progress';

// Hacer Ziggy disponible en el ámbito global
// window.Ziggy = Ziggy;

// const el = document.getElementById('app');


// createApp({
//     render: () => h(App, {
//         initialPage: JSON.parse(el.dataset.page),
//         resolveComponent: (name) => {
//             if (name === 'Welcome') {
//                 return Welcome;
//             }
//             return require(`./Pages/${name}`).default;
//         },
//     }),
// }).use(plugin).mixin({ methods: { route } }).mount(el);

const el = document.getElementById('app');

createInertiaApp({
    resolve: name => import(`./Pages/${name}.vue`),
    setup({el, App, props, plugin}) {
        createApp({
            render: () => h(App, props)
        })
        .mixin({ methods: { route } })
        .use(plugin)
        .mount(el)
    },
});

InertiaProgress.init({ color: '#4B5563' });

