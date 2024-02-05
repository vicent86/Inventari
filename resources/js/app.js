import { createApp, defineAsyncComponent, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import route from "ziggy-js";
import { InertiaProgress } from '@inertiajs/progress';
import Register from './Pages/Auth/Register.vue';
import Welcome from './Pages/Welcome.vue';

const el = document.getElementById('app');

createInertiaApp({
    components: {
        Welcome,
    },
    resolve: name => {
        if (name === 'Auth.Register') {
            return Register;
        }
        const page = require(`./Pages/${name}`).default;


        return defineAsyncComponent(() => import(`./Pages/${name.replace('.', '/')}.vue`));
    },    
    
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
