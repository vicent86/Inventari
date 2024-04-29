const {
  createApp,
  defineAsyncComponent,
  h
} = require('vue');
const {
  createInertiaApp
} = require('@inertiajs/vue3');
const route = require("ziggy-js");
const {
  InertiaProgress
} = require('@inertiajs/progress');
const Register = require('./Pages/Auth/Register.vue');
const Welcome = require('./Pages/Welcome.vue');
const Login = require('./Pages/Auth/Login.vue');
const el = document.getElementById('app');
createInertiaApp({
  components: {
    Welcome,
    Register,
    Login
  },
  resolve: name => {
    if (name === 'Auth.Register') {
      return Register;
    }
    if (name === 'Auth.Login') {
      return Login;
    }
    const page = require(`./Pages/${name}`).default;
    return defineAsyncComponent(() => Promise.resolve(require(`./Pages/${name.replace('.', '/')}.vue`)));
  },
  setup({
    el,
    App,
    props,
    plugin
  }) {
    createApp({
      render: () => h(App, props)
    }).mixin({
      methods: {
        route
      }
    }).use(plugin).mount(el);
  }
});
InertiaProgress.init({
  color: '#4B5563'
});