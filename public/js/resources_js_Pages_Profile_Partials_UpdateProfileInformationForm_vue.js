"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Profile_Partials_UpdateProfileInformationForm_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _InputError = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/InputError.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _InputLabel = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/InputLabel.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _PrimaryButton = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/PrimaryButton.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _TextInput = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/TextInput.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _vue = __webpack_require__(/*! @inertiajs/vue3 */ "./node_modules/@inertiajs/vue3/dist/index.js");
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }
var _default = exports["default"] = {
  __name: 'UpdateProfileInformationForm',
  props: {
    mustVerifyEmail: {
      type: Boolean
    },
    status: {
      type: String
    }
  },
  setup: function setup(__props, _ref) {
    var __expose = _ref.expose;
    __expose();
    var user = (0, _vue.usePage)().props.auth.user;
    var form = (0, _vue.useForm)({
      name: user.name,
      email: user.email
    });
    var __returned__ = {
      user: user,
      form: form,
      InputError: _InputError["default"],
      InputLabel: _InputLabel["default"],
      PrimaryButton: _PrimaryButton["default"],
      TextInput: _TextInput["default"],
      get Link() {
        return _vue.Link;
      },
      get useForm() {
        return _vue.useForm;
      },
      get usePage() {
        return _vue.usePage;
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

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224":
/*!**************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224 ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.render = render;
var _vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
var _hoisted_1 = /*#__PURE__*/(0, _vue.createElementVNode)("header", null, [/*#__PURE__*/(0, _vue.createElementVNode)("h2", {
  "class": "text-lg font-medium text-gray-900"
}, "Profile Information"), /*#__PURE__*/(0, _vue.createElementVNode)("p", {
  "class": "mt-1 text-sm text-gray-600"
}, " Update your account's profile information and email address. ")], -1 /* HOISTED */);
var _hoisted_2 = {
  key: 0
};
var _hoisted_3 = {
  "class": "text-sm mt-2 text-gray-800"
};
var _hoisted_4 = {
  "class": "mt-2 font-medium text-sm text-green-600"
};
var _hoisted_5 = {
  "class": "flex items-center gap-4"
};
var _hoisted_6 = {
  key: 0,
  "class": "text-sm text-gray-600"
};
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0, _vue.openBlock)(), (0, _vue.createElementBlock)("section", null, [_hoisted_1, (0, _vue.createElementVNode)("form", {
    onSubmit: _cache[2] || (_cache[2] = (0, _vue.withModifiers)(function ($event) {
      return $setup.form.patch(_ctx.route('profile.update'));
    }, ["prevent"])),
    "class": "mt-6 space-y-6"
  }, [(0, _vue.createElementVNode)("div", null, [(0, _vue.createVNode)($setup["InputLabel"], {
    "for": "name",
    value: "Name"
  }), (0, _vue.createVNode)($setup["TextInput"], {
    id: "name",
    type: "text",
    "class": "mt-1 block w-full",
    modelValue: $setup.form.name,
    "onUpdate:modelValue": _cache[0] || (_cache[0] = function ($event) {
      return $setup.form.name = $event;
    }),
    required: "",
    autofocus: "",
    autocomplete: "name"
  }, null, 8 /* PROPS */, ["modelValue"]), (0, _vue.createVNode)($setup["InputError"], {
    "class": "mt-2",
    message: $setup.form.errors.name
  }, null, 8 /* PROPS */, ["message"])]), (0, _vue.createElementVNode)("div", null, [(0, _vue.createVNode)($setup["InputLabel"], {
    "for": "email",
    value: "Email"
  }), (0, _vue.createVNode)($setup["TextInput"], {
    id: "email",
    type: "email",
    "class": "mt-1 block w-full",
    modelValue: $setup.form.email,
    "onUpdate:modelValue": _cache[1] || (_cache[1] = function ($event) {
      return $setup.form.email = $event;
    }),
    required: "",
    autocomplete: "username"
  }, null, 8 /* PROPS */, ["modelValue"]), (0, _vue.createVNode)($setup["InputError"], {
    "class": "mt-2",
    message: $setup.form.errors.email
  }, null, 8 /* PROPS */, ["message"])]), $props.mustVerifyEmail && $setup.user.email_verified_at === null ? ((0, _vue.openBlock)(), (0, _vue.createElementBlock)("div", _hoisted_2, [(0, _vue.createElementVNode)("p", _hoisted_3, [(0, _vue.createTextVNode)(" Your email address is unverified. "), (0, _vue.createVNode)($setup["Link"], {
    href: _ctx.route('verification.send'),
    method: "post",
    as: "button",
    "class": "underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [(0, _vue.createTextVNode)(" Click here to re-send the verification email. ")];
    }),
    _: 1 /* STABLE */
  }, 8 /* PROPS */, ["href"])]), (0, _vue.withDirectives)((0, _vue.createElementVNode)("div", _hoisted_4, " A new verification link has been sent to your email address. ", 512 /* NEED_PATCH */), [[_vue.vShow, $props.status === 'verification-link-sent']])])) : (0, _vue.createCommentVNode)("v-if", true), (0, _vue.createElementVNode)("div", _hoisted_5, [(0, _vue.createVNode)($setup["PrimaryButton"], {
    disabled: $setup.form.processing
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [(0, _vue.createTextVNode)("Save")];
    }),
    _: 1 /* STABLE */
  }, 8 /* PROPS */, ["disabled"]), (0, _vue.createVNode)(_vue.Transition, {
    "enter-active-class": "transition ease-in-out",
    "enter-from-class": "opacity-0",
    "leave-active-class": "transition ease-in-out",
    "leave-to-class": "opacity-0"
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [$setup.form.recentlySuccessful ? ((0, _vue.openBlock)(), (0, _vue.createElementBlock)("p", _hoisted_6, "Saved.")) : (0, _vue.createCommentVNode)("v-if", true)];
    }),
    _: 1 /* STABLE */
  })])], 32 /* NEED_HYDRATION */)]);
}

/***/ }),

/***/ "./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue":
/*!******************************************************************************!*\
  !*** ./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _UpdateProfileInformationForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__.__esModule),
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _UpdateProfileInformationForm_vue_vue_type_template_id_ce55a224__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224 */ "./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224");
/* harmony import */ var _UpdateProfileInformationForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js */ "./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js");
/* harmony import */ var _node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_UpdateProfileInformationForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_UpdateProfileInformationForm_vue_vue_type_template_id_ce55a224__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js":
/*!*****************************************************************************************************************!*\
  !*** ./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js ***!
  \*****************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_UpdateProfileInformationForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_UpdateProfileInformationForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_UpdateProfileInformationForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=script&setup=true&lang=js");
 

/***/ }),

/***/ "./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224":
/*!************************************************************************************************************!*\
  !*** ./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224 ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_UpdateProfileInformationForm_vue_vue_type_template_id_ce55a224__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_UpdateProfileInformationForm_vue_vue_type_template_id_ce55a224__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_UpdateProfileInformationForm_vue_vue_type_template_id_ce55a224__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/UpdateProfileInformationForm.vue?vue&type=template&id=ce55a224");


/***/ })

}]);