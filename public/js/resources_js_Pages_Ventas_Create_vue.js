"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Ventas_Create_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Ventas/Create.vue?vue&type=script&setup=true&lang=js":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Ventas/Create.vue?vue&type=script&setup=true&lang=js ***!
  \*************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _vue = __webpack_require__(/*! @inertiajs/vue3 */ "./node_modules/@inertiajs/vue3/dist/index.js");
var _AuthenticatedLayout = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Layouts/AuthenticatedLayout.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _Form = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/Ventas/Form.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }
var __default__ = {
  name: 'VentasCreate'
};
var _default = exports["default"] = /*#__PURE__*/Object.assign(__default__, {
  props: {
    clientes: {
      type: Object,
      required: true
    }
  },
  setup: function setup(__props, _ref) {
    var __expose = _ref.expose;
    __expose();
    var form = (0, _vue.useForm)({
      precio_total: 0.00,
      fecha_venta: Date
    });
    var __returned__ = {
      form: form,
      get useForm() {
        return _vue.useForm;
      },
      AuthenticatedLayout: _AuthenticatedLayout["default"],
      VentaForm: _Form["default"]
    };
    Object.defineProperty(__returned__, '__isScriptSetup', {
      enumerable: false,
      value: true
    });
    return __returned__;
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Ventas/Create.vue?vue&type=template&id=121293ab":
/*!******************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Ventas/Create.vue?vue&type=template&id=121293ab ***!
  \******************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.render = render;
var _vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
var _hoisted_1 = /*#__PURE__*/(0, _vue.createElementVNode)("template", {
  title: "Create Venta"
}, [/*#__PURE__*/(0, _vue.createElementVNode)("h1", {
  "class": "font-semibold text-xl text-gray-800 leading-tight"
}, "Crear Categoria")], -1 /* HOISTED */);
var _hoisted_2 = {
  "class": "py-12"
};
var _hoisted_3 = {
  "class": "max-w-7xl max-auto sm:px-6 lg:px-8"
};
var _hoisted_4 = {
  "class": "bg-white overflow-hidden shadow-sm sm:rounded-lg"
};
var _hoisted_5 = {
  "class": "bg-white overflow-hidden shadow-xl sm:rounded-lg"
};
var _hoisted_6 = {
  "class": "p-6 bg-white border-b border-gray-200"
};
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0, _vue.openBlock)(), (0, _vue.createBlock)($setup["AuthenticatedLayout"], null, {
    "default": (0, _vue.withCtx)(function () {
      return [_hoisted_1, (0, _vue.createElementVNode)("div", _hoisted_2, [(0, _vue.createElementVNode)("div", _hoisted_3, [(0, _vue.createElementVNode)("div", _hoisted_4, [(0, _vue.createElementVNode)("div", _hoisted_5, [(0, _vue.createElementVNode)("div", _hoisted_6, [(0, _vue.createVNode)($setup["VentaForm"], {
        form: $setup.form,
        clientes: $props.clientes,
        onSubmit: _cache[0] || (_cache[0] = function ($event) {
          return $setup.form.post(_ctx.route('ventas.store'));
        })
      }, null, 8 /* PROPS */, ["form", "clientes"])])])])])])];
    }),
    _: 1 /* STABLE */
  });
}

/***/ }),

/***/ "./resources/js/Pages/Ventas/Create.vue":
/*!**********************************************!*\
  !*** ./resources/js/Pages/Ventas/Create.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _Create_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__.__esModule),
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Create_vue_vue_type_template_id_121293ab__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Create.vue?vue&type=template&id=121293ab */ "./resources/js/Pages/Ventas/Create.vue?vue&type=template&id=121293ab");
/* harmony import */ var _Create_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Create.vue?vue&type=script&setup=true&lang=js */ "./resources/js/Pages/Ventas/Create.vue?vue&type=script&setup=true&lang=js");
/* harmony import */ var _node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Create_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Create_vue_vue_type_template_id_121293ab__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/Pages/Ventas/Create.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/Pages/Ventas/Create.vue?vue&type=script&setup=true&lang=js":
/*!*********************************************************************************!*\
  !*** ./resources/js/Pages/Ventas/Create.vue?vue&type=script&setup=true&lang=js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Create_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Create_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Create_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Create.vue?vue&type=script&setup=true&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Ventas/Create.vue?vue&type=script&setup=true&lang=js");
 

/***/ }),

/***/ "./resources/js/Pages/Ventas/Create.vue?vue&type=template&id=121293ab":
/*!****************************************************************************!*\
  !*** ./resources/js/Pages/Ventas/Create.vue?vue&type=template&id=121293ab ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Create_vue_vue_type_template_id_121293ab__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Create_vue_vue_type_template_id_121293ab__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Create_vue_vue_type_template_id_121293ab__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Create.vue?vue&type=template&id=121293ab */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Ventas/Create.vue?vue&type=template&id=121293ab");


/***/ })

}]);