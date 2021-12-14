/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/axios/index.js":
/*!*************************************!*\
  !*** ./node_modules/axios/index.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/var/www/html/node_modules/axios/index.js'");

/***/ }),



/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var _require = __webpack_require__(/*! axios */ "./node_modules/axios/index.js"),
    Axios = _require["default"];

__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

Axios.get('/api/get-bombermen').then(function (_ref) {
  var data = _ref.data;
  var element = document.getElementById("bombermen");
  element.innerHTML = '';

  for (var i = 0; i < data.length; i++) {
    var item = '<div class="item col-3">' + '<div class="image" style="background:url(' + data[i]['avatarUri'] + ')"></div>' + '<h4>' + data[i]['name'] + '</h4>' + '</div>';
    element.innerHTML += item;
  }
})["catch"](function (error) {
  alert(error);
});

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nError: /var/www/html/resources/js/bootstrap.js: Cannot find module '@babel/core'\nRequire stack:\n- /var/www/html/node_modules/@babel/plugin-transform-destructuring/lib/index.js\n- /var/www/html/node_modules/@babel/preset-env/lib/available-plugins.js\n- /var/www/html/node_modules/@babel/preset-env/lib/index.js\n- /var/www/html/node_modules/@babel/core/lib/config/files/plugins.js\n- /var/www/html/node_modules/@babel/core/lib/config/files/index.js\n- /var/www/html/node_modules/@babel/core/lib/index.js\n- /var/www/html/node_modules/laravel-mix/src/FileCollection.js\n- /var/www/html/node_modules/laravel-mix/src/tasks/ConcatenateFilesTask.js\n- /var/www/html/node_modules/laravel-mix/src/components/Combine.js\n- /var/www/html/node_modules/laravel-mix/src/components/ComponentFactory.js\n- /var/www/html/node_modules/laravel-mix/setup/webpack.config.js\n- /var/www/html/node_modules/webpack-cli/bin/utils/convert-argv.js\n- /var/www/html/node_modules/webpack-cli/bin/cli.js\n- /var/www/html/node_modules/webpack/bin/webpack.js\n    at Function.Module._resolveFilename (internal/modules/cjs/loader.js:980:15)\n    at Function.Module._load (internal/modules/cjs/loader.js:862:27)\n    at Module.require (internal/modules/cjs/loader.js:1040:19)\n    at require (/var/www/html/node_modules/v8-compile-cache/v8-compile-cache.js:161:20)\n    at _core (/var/www/html/node_modules/@babel/plugin-transform-destructuring/lib/index.js:19:16)\n    at PluginPass.AssignmentExpression (/var/www/html/node_modules/@babel/plugin-transform-destructuring/lib/index.js:454:14)\n    at newFn (/var/www/html/node_modules/@babel/traverse/lib/visitors.js:179:21)\n    at NodePath._call (/var/www/html/node_modules/@babel/traverse/lib/path/context.js:55:20)\n    at NodePath.call (/var/www/html/node_modules/@babel/traverse/lib/path/context.js:42:17)\n    at NodePath.visit (/var/www/html/node_modules/@babel/traverse/lib/path/context.js:90:31)\n    at TraversalContext.visitQueue (/var/www/html/node_modules/@babel/traverse/lib/context.js:112:16)\n    at TraversalContext.visitSingle (/var/www/html/node_modules/@babel/traverse/lib/context.js:84:19)\n    at TraversalContext.visit (/var/www/html/node_modules/@babel/traverse/lib/context.js:140:19)\n    at Function.traverse.node (/var/www/html/node_modules/@babel/traverse/lib/index.js:84:17)\n    at NodePath.visit (/var/www/html/node_modules/@babel/traverse/lib/path/context.js:97:18)\n    at TraversalContext.visitQueue (/var/www/html/node_modules/@babel/traverse/lib/context.js:112:16)\n    at TraversalContext.visitMultiple (/var/www/html/node_modules/@babel/traverse/lib/context.js:79:17)\n    at TraversalContext.visit (/var/www/html/node_modules/@babel/traverse/lib/context.js:138:19)\n    at Function.traverse.node (/var/www/html/node_modules/@babel/traverse/lib/index.js:84:17)\n    at NodePath.visit (/var/www/html/node_modules/@babel/traverse/lib/path/context.js:97:18)\n    at TraversalContext.visitQueue (/var/www/html/node_modules/@babel/traverse/lib/context.js:112:16)\n    at TraversalContext.visitSingle (/var/www/html/node_modules/@babel/traverse/lib/context.js:84:19)\n    at TraversalContext.visit (/var/www/html/node_modules/@babel/traverse/lib/context.js:140:19)\n    at Function.traverse.node (/var/www/html/node_modules/@babel/traverse/lib/index.js:84:17)\n    at traverse (/var/www/html/node_modules/@babel/traverse/lib/index.js:66:12)\n    at transformFile (/var/www/html/node_modules/@babel/core/lib/transformation/index.js:119:29)\n    at runSync (/var/www/html/node_modules/@babel/core/lib/transformation/index.js:48:5)\n    at runAsync (/var/www/html/node_modules/@babel/core/lib/transformation/index.js:35:14)\n    at /var/www/html/node_modules/@babel/core/lib/transform.js:34:34\n    at processTicksAndRejections (internal/process/task_queues.js:79:11)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\n\n@import '~bootstrap/scss/bootstrap';\n^\n      File to import not found or unreadable: ~bootstrap/scss/bootstrap.\n      in /var/www/html/resources/sass/app.scss (line 8, column 1)\n    at /var/www/html/node_modules/webpack/lib/NormalModule.js:316:20\n    at /var/www/html/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /var/www/html/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at context.callback (/var/www/html/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.callback (/var/www/html/node_modules/sass-loader/dist/index.js:89:7)\n    at Object.done [as callback] (/var/www/html/node_modules/neo-async/async.js:8067:18)\n    at options.error (/var/www/html/node_modules/node-sass/lib/index.js:294:32)");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/html/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /var/www/html/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });