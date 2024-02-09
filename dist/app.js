"use strict";

var _require = require('vue'),
  createApp = _require.createApp,
  defineAsyncComponent = _require.defineAsyncComponent,
  h = _require.h;
var _require2 = require('@inertiajs/vue3'),
  createInertiaApp = _require2.createInertiaApp;
var route = require("ziggy-js");
var _require3 = require('@inertiajs/progress'),
  InertiaProgress = _require3.InertiaProgress;
var Register = require('./Pages/Auth/Register.vue');
var Welcome = require('./Pages/Welcome.vue');
var Login = require('./Pages/Auth/Login.vue');
var el = document.getElementById('app');
createInertiaApp({
  components: {
    Welcome: Welcome,
    Register: Register,
    Login: Login
  },
  resolve: function resolve(name) {
    if (name === 'Auth.Register') {
      return Register;
    }
    if (name === 'Auth.Login') {
      return Login;
    }
    var page = require("./Pages/".concat(name))["default"];
    return defineAsyncComponent(function () {
      return Promise.resolve(require("./Pages/".concat(name.replace('.', '/'), ".vue")));
    });
  },
  setup: function setup(_ref) {
    var el = _ref.el,
      App = _ref.App,
      props = _ref.props,
      plugin = _ref.plugin;
    createApp({
      render: function render() {
        return h(App, props);
      }
    }).mixin({
      methods: {
        route: route
      }
    }).use(plugin).mount(el);
  }
});
InertiaProgress.init({
  color: '#4B5563'
});
