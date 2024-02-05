"use strict";

var _vue = require("vue");
var _vue2 = require("@inertiajs/vue3");
var _ziggyJs = _interopRequireDefault(require("ziggy-js"));
var _progress = require("@inertiajs/progress");
var _Register = _interopRequireDefault(require("./Pages/Auth/Register.vue"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _getRequireWildcardCache(e) { if ("function" != typeof WeakMap) return null; var r = new WeakMap(), t = new WeakMap(); return (_getRequireWildcardCache = function _getRequireWildcardCache(e) { return e ? t : r; })(e); }
function _interopRequireWildcard(e, r) { if (!r && e && e.__esModule) return e; if (null === e || "object" != _typeof(e) && "function" != typeof e) return { "default": e }; var t = _getRequireWildcardCache(r); if (t && t.has(e)) return t.get(e); var n = { __proto__: null }, a = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var u in e) if ("default" !== u && Object.prototype.hasOwnProperty.call(e, u)) { var i = a ? Object.getOwnPropertyDescriptor(e, u) : null; i && (i.get || i.set) ? Object.defineProperty(n, u, i) : n[u] = e[u]; } return n["default"] = e, t && t.set(e, n), n; }
var el = document.getElementById('app');
(0, _vue2.createInertiaApp)({
  resolve: function resolve(name) {
    if (name === 'Auth.Register') {
      return _Register["default"];
    }
    return (0, _vue.defineAsyncComponent)(function () {
      return function (specifier) {
        return new Promise(function (r) {
          return r(specifier);
        }).then(function (s) {
          return _interopRequireWildcard(require(s));
        });
      }("./Pages/".concat(name.replace('.', '/'), ".vue"));
    });
  },
  setup: function setup(_ref) {
    var el = _ref.el,
      App = _ref.App,
      props = _ref.props,
      plugin = _ref.plugin;
    (0, _vue.createApp)({
      render: function render() {
        return (0, _vue.h)(App, props);
      }
    }).mixin({
      methods: {
        route: _ziggyJs["default"]
      }
    }).use(plugin).mount(el);
  }
});
_progress.InertiaProgress.init({
  color: '#4B5563'
});