"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Profile_Partials_DeleteUserForm_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=script&setup=true&lang=js":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=script&setup=true&lang=js ***!
  \*******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _DangerButton = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/DangerButton.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _InputError = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/InputError.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _InputLabel = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/InputLabel.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _Modal = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/Modal.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _SecondaryButton = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/SecondaryButton.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _TextInput = _interopRequireDefault(__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '@/Components/TextInput.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));
var _vue = __webpack_require__(/*! @inertiajs/vue3 */ "./node_modules/@inertiajs/vue3/dist/index.js");
var _vue2 = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }
var _default = exports["default"] = {
  __name: 'DeleteUserForm',
  setup: function setup(__props, _ref) {
    var __expose = _ref.expose;
    __expose();
    var confirmingUserDeletion = (0, _vue2.ref)(false);
    var passwordInput = (0, _vue2.ref)(null);
    var form = (0, _vue.useForm)({
      password: ''
    });
    var confirmUserDeletion = function confirmUserDeletion() {
      confirmingUserDeletion.value = true;
      (0, _vue2.nextTick)(function () {
        return passwordInput.value.focus();
      });
    };
    var deleteUser = function deleteUser() {
      form["delete"](route('profile.destroy'), {
        preserveScroll: true,
        onSuccess: function onSuccess() {
          return closeModal();
        },
        onError: function onError() {
          return passwordInput.value.focus();
        },
        onFinish: function onFinish() {
          return form.reset();
        }
      });
    };
    var closeModal = function closeModal() {
      confirmingUserDeletion.value = false;
      form.reset();
    };
    var __returned__ = {
      confirmingUserDeletion: confirmingUserDeletion,
      passwordInput: passwordInput,
      form: form,
      confirmUserDeletion: confirmUserDeletion,
      deleteUser: deleteUser,
      closeModal: closeModal,
      DangerButton: _DangerButton["default"],
      InputError: _InputError["default"],
      InputLabel: _InputLabel["default"],
      Modal: _Modal["default"],
      SecondaryButton: _SecondaryButton["default"],
      TextInput: _TextInput["default"],
      get useForm() {
        return _vue.useForm;
      },
      nextTick: _vue2.nextTick,
      ref: _vue2.ref
    };
    Object.defineProperty(__returned__, '__isScriptSetup', {
      enumerable: false,
      value: true
    });
    return __returned__;
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=template&id=68dbcb18":
/*!************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=template&id=68dbcb18 ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.render = render;
var _vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
var _hoisted_1 = {
  "class": "space-y-6"
};
var _hoisted_2 = /*#__PURE__*/(0, _vue.createElementVNode)("header", null, [/*#__PURE__*/(0, _vue.createElementVNode)("h2", {
  "class": "text-lg font-medium text-gray-900"
}, "Delete Account"), /*#__PURE__*/(0, _vue.createElementVNode)("p", {
  "class": "mt-1 text-sm text-gray-600"
}, " Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. ")], -1 /* HOISTED */);
var _hoisted_3 = {
  "class": "p-6"
};
var _hoisted_4 = /*#__PURE__*/(0, _vue.createElementVNode)("h2", {
  "class": "text-lg font-medium text-gray-900"
}, " Are you sure you want to delete your account? ", -1 /* HOISTED */);
var _hoisted_5 = /*#__PURE__*/(0, _vue.createElementVNode)("p", {
  "class": "mt-1 text-sm text-gray-600"
}, " Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account. ", -1 /* HOISTED */);
var _hoisted_6 = {
  "class": "mt-6"
};
var _hoisted_7 = {
  "class": "mt-6 flex justify-end"
};
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0, _vue.openBlock)(), (0, _vue.createElementBlock)("section", _hoisted_1, [_hoisted_2, (0, _vue.createVNode)($setup["DangerButton"], {
    onClick: $setup.confirmUserDeletion
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [(0, _vue.createTextVNode)("Delete Account")];
    }),
    _: 1 /* STABLE */
  }), (0, _vue.createVNode)($setup["Modal"], {
    show: $setup.confirmingUserDeletion,
    onClose: $setup.closeModal
  }, {
    "default": (0, _vue.withCtx)(function () {
      return [(0, _vue.createElementVNode)("div", _hoisted_3, [_hoisted_4, _hoisted_5, (0, _vue.createElementVNode)("div", _hoisted_6, [(0, _vue.createVNode)($setup["InputLabel"], {
        "for": "password",
        value: "Password",
        "class": "sr-only"
      }), (0, _vue.createVNode)($setup["TextInput"], {
        id: "password",
        ref: "passwordInput",
        modelValue: $setup.form.password,
        "onUpdate:modelValue": _cache[0] || (_cache[0] = function ($event) {
          return $setup.form.password = $event;
        }),
        type: "password",
        "class": "mt-1 block w-3/4",
        placeholder: "Password",
        onKeyup: (0, _vue.withKeys)($setup.deleteUser, ["enter"])
      }, null, 8 /* PROPS */, ["modelValue"]), (0, _vue.createVNode)($setup["InputError"], {
        message: $setup.form.errors.password,
        "class": "mt-2"
      }, null, 8 /* PROPS */, ["message"])]), (0, _vue.createElementVNode)("div", _hoisted_7, [(0, _vue.createVNode)($setup["SecondaryButton"], {
        onClick: $setup.closeModal
      }, {
        "default": (0, _vue.withCtx)(function () {
          return [(0, _vue.createTextVNode)(" Cancel ")];
        }),
        _: 1 /* STABLE */
      }), (0, _vue.createVNode)($setup["DangerButton"], {
        "class": (0, _vue.normalizeClass)(["ms-3", {
          'opacity-25': $setup.form.processing
        }]),
        disabled: $setup.form.processing,
        onClick: $setup.deleteUser
      }, {
        "default": (0, _vue.withCtx)(function () {
          return [(0, _vue.createTextVNode)(" Delete Account ")];
        }),
        _: 1 /* STABLE */
      }, 8 /* PROPS */, ["class", "disabled"])])])];
    }),
    _: 1 /* STABLE */
  }, 8 /* PROPS */, ["show"])]);
}

/***/ }),

/***/ "./resources/js/Pages/Profile/Partials/DeleteUserForm.vue":
/*!****************************************************************!*\
  !*** ./resources/js/Pages/Profile/Partials/DeleteUserForm.vue ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _DeleteUserForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__.__esModule),
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _DeleteUserForm_vue_vue_type_template_id_68dbcb18__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DeleteUserForm.vue?vue&type=template&id=68dbcb18 */ "./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=template&id=68dbcb18");
/* harmony import */ var _DeleteUserForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./DeleteUserForm.vue?vue&type=script&setup=true&lang=js */ "./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=script&setup=true&lang=js");
/* harmony import */ var _node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_DeleteUserForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_DeleteUserForm_vue_vue_type_template_id_68dbcb18__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/Pages/Profile/Partials/DeleteUserForm.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=script&setup=true&lang=js":
/*!***************************************************************************************************!*\
  !*** ./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=script&setup=true&lang=js ***!
  \***************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_DeleteUserForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_DeleteUserForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_DeleteUserForm_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./DeleteUserForm.vue?vue&type=script&setup=true&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=script&setup=true&lang=js");
 

/***/ }),

/***/ "./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=template&id=68dbcb18":
/*!**********************************************************************************************!*\
  !*** ./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=template&id=68dbcb18 ***!
  \**********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   __esModule: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_DeleteUserForm_vue_vue_type_template_id_68dbcb18__WEBPACK_IMPORTED_MODULE_0__.__esModule),
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_DeleteUserForm_vue_vue_type_template_id_68dbcb18__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_DeleteUserForm_vue_vue_type_template_id_68dbcb18__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./DeleteUserForm.vue?vue&type=template&id=68dbcb18 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Profile/Partials/DeleteUserForm.vue?vue&type=template&id=68dbcb18");


/***/ })

}]);