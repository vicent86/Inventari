"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Welcome_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Welcome.vue?vue&type=script&setup=true&lang=js":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Welcome.vue?vue&type=script&setup=true&lang=js ***!
  \*******************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _vue = __webpack_require__(/*! @inertiajs/vue3 */ "./node_modules/@inertiajs/vue3/dist/index.js");
var _default = exports["default"] = {
  __name: 'Welcome',
  props: {
    canLogin: {
      type: Boolean
    },
    canRegister: {
      type: Boolean
    },
    laravelVersion: {
      type: String,
      required: true
    },
    phpVersion: {
      type: String,
      required: true
    },
    jetstream: {
      type: Object,
      required: true
    },
    auth: {
      type: Object,
      required: true
    },
    errorBags: {
      type: Array,
      required: true
    }
  },
  setup: function setup(__props, _ref) {
    var __expose = _ref.expose;
    __expose();
    var __returned__ = {
      get Head() {
        return _vue.Head;
      },
      get Link() {
        return _vue.Link;
      }
    };
    Object.defineProperty(__returned__, '__isScriptSetup', {
      enumerable: false,
      value: true
    });
    return __returned__;
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Welcome.vue?vue&type=template&id=317d1a6e":
/*!************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Welcome.vue?vue&type=template&id=317d1a6e ***!
  \************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.render = render;
var _vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
var _hoisted_1 = {
  "class": "relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
};
var _hoisted_2 = {
  key: 0,
  "class": "sm:fixed sm:top-0 sm:right-0 p-6 text-end"
};
var _hoisted_3 = /*#__PURE__*/(0, _vue.createStaticVNode)("<div class=\"max-w-7xl mx-auto p-6 lg:p-8\"><div class=\"flex justify-center\"><div class=\"text-center\"><h1 class=\"text-4xl font-bold mt-4\">Nombre de la empresa</h1><p class=\"text-xl mt-2\">Sistema de Inventario</p></div></div></div>", 1);
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0, _vue.openBlock)(), (0, _vue.createElementBlock)(_vue.Fragment, null, [(0, _vue.createVNode)($setup["Head"], {
    title: "Welcome"
  }), (0, _vue.createElementVNode)("div", _hoisted_1, [$props.canLogin ? ((0, _vue.openBlock)(), (0, _vue.createElementBlock)("div", _hoisted_2, [_ctx.$page.props.auth.user ? ((0, _vue.openBlock)(), (0, _vue.createBlock)($setup["Link"], {
    key: 0,
    href: _ctx.route('dashboard'),
    "class": "font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [(0, _vue.createTextVNode)("Dashboard")];
    }),
    _: 1 /* STABLE */
  }, 8 /* PROPS */, ["href"])) : ((0, _vue.openBlock)(), (0, _vue.createElementBlock)(_vue.Fragment, {
    key: 1
  }, [(0, _vue.createVNode)($setup["Link"], {
    href: _ctx.route('login'),
    "class": "font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [(0, _vue.createTextVNode)("Log In")];
    }),
    _: 1 /* STABLE */
  }, 8 /* PROPS */, ["href"]), (0, _vue.createTextVNode)(" > "), $props.canRegister ? ((0, _vue.openBlock)(), (0, _vue.createBlock)($setup["Link"], {
    key: 0,
    href: _ctx.route('register'),
    "class": "ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [(0, _vue.createTextVNode)("Register")];
    }),
    _: 1 /* STABLE */
  }, 8 /* PROPS */, ["href"])) : (0, _vue.createCommentVNode)("v-if", true), (0, _vue.createTextVNode)(" > ")], 64 /* STABLE_FRAGMENT */))])) : (0, _vue.createCommentVNode)("v-if", true), _hoisted_3])], 64 /* STABLE_FRAGMENT */);
}

/***/ }),

/***/ "./resources/js/Pages/Welcome.vue":
/*!****************************************!*\
  !*** ./resources/js/Pages/Welcome.vue ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _Welcome_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__.__esModule),
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Welcome_vue_vue_type_template_id_317d1a6e__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Welcome.vue?vue&type=template&id=317d1a6e */ "./resources/js/Pages/Welcome.vue?vue&type=template&id=317d1a6e");
/* harmony import */ var _Welcome_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Welcome.vue?vue&type=script&setup=true&lang=js */ "./resources/js/Pages/Welcome.vue?vue&type=script&setup=true&lang=js");
/* harmony import */ var _node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Welcome_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Welcome_vue_vue_type_template_id_317d1a6e__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/Pages/Welcome.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/Pages/Welcome.vue?vue&type=script&setup=true&lang=js":
/*!***************************************************************************!*\
  !*** ./resources/js/Pages/Welcome.vue?vue&type=script&setup=true&lang=js ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Welcome_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Welcome_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Welcome_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Welcome.vue?vue&type=script&setup=true&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Welcome.vue?vue&type=script&setup=true&lang=js");
 

/***/ }),

/***/ "./resources/js/Pages/Welcome.vue?vue&type=template&id=317d1a6e":
/*!**********************************************************************!*\
  !*** ./resources/js/Pages/Welcome.vue?vue&type=template&id=317d1a6e ***!
  \**********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Welcome_vue_vue_type_template_id_317d1a6e__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Welcome_vue_vue_type_template_id_317d1a6e__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Welcome_vue_vue_type_template_id_317d1a6e__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Welcome.vue?vue&type=template&id=317d1a6e */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Welcome.vue?vue&type=template&id=317d1a6e");


/***/ })

}]);