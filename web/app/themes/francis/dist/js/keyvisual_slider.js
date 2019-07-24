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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/keyvisual_slider.js":
/*!************************************!*\
  !*** ./src/js/keyvisual_slider.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("window.addEventListener('load', function () {\n  sliderStart();\n});\n\nfunction sliderStart() {\n  var slide = document.getElementById('slider-wrap'); //スライダー親\n\n  var slideItem = slide.querySelectorAll('.slider-item'); //スライド要素\n\n  var totalNum = slideItem.length - 1; //スライドの枚数を取得\n\n  var FadeTime = 2000; //フェードインの時間\n\n  var IntarvalTime = 7000; //クロスフェードさせるまでの間隔\n\n  var actNum = 0; //現在アクティブな番号\n  // スライドの1枚目をフェードイン\n\n  slideItem[0].classList.add('Show_', 'LeftToRight_'); // 処理を繰り返す\n\n  setInterval(function () {\n    if (actNum < totalNum) {\n      var nowSlide = slideItem[actNum];\n      var nextSlide = slideItem[++actNum]; //.show_削除でフェードアウト\n\n      nowSlide.classList.remove('Show_'); // と同時に、次のスライドがズームしながらフェードインする\n\n      nextSlide.classList.add('Show_', 'LeftToRight_'); //フェードアウト完了後、.LeftToRight_削除\n\n      setTimeout(function () {\n        nowSlide.classList.remove('LeftToRight_');\n      }, FadeTime);\n    } else {\n      var _nowSlide = slideItem[actNum];\n      var _nextSlide = slideItem[actNum = 0]; //.show_削除でフェードアウト\n\n      _nowSlide.classList.remove('Show_'); // と同時に、次のスライドがズームしながらフェードインする\n\n\n      _nextSlide.classList.add('Show_', 'LeftToRight_'); //フェードアウト完了後、.LeftToRight_削除\n\n\n      setTimeout(function () {\n        _nowSlide.classList.remove('LeftToRight_');\n      }, FadeTime);\n    }\n\n    ;\n  }, IntarvalTime);\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMva2V5dmlzdWFsX3NsaWRlci5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3NyYy9qcy9rZXl2aXN1YWxfc2xpZGVyLmpzPzYwMzQiXSwic291cmNlc0NvbnRlbnQiOlsid2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ2xvYWQnLCBmdW5jdGlvbiAoKSB7XG4gICAgc2xpZGVyU3RhcnQoKTtcbiAgfSk7XG4gIFxuICBmdW5jdGlvbiBzbGlkZXJTdGFydCgpIHtcbiAgXG4gICAgY29uc3Qgc2xpZGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2xpZGVyLXdyYXAnKTsgICAgICAvL+OCueODqeOCpOODgOODvOimqlxuICAgIGNvbnN0IHNsaWRlSXRlbSA9IHNsaWRlLnF1ZXJ5U2VsZWN0b3JBbGwoJy5zbGlkZXItaXRlbScpOyAgIC8v44K544Op44Kk44OJ6KaB57SgXG4gICAgY29uc3QgdG90YWxOdW0gPSBzbGlkZUl0ZW0ubGVuZ3RoIC0gMTsgICAgICAgICAgICAgICAgICAgICAvL+OCueODqeOCpOODieOBruaemuaVsOOCkuWPluW+l1xuICAgIGNvbnN0IEZhZGVUaW1lID0gMjAwMDsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy/jg5Xjgqfjg7zjg4njgqTjg7Pjga7mmYLplpNcbiAgICBjb25zdCBJbnRhcnZhbFRpbWUgPSA3MDAwOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8v44Kv44Ot44K544OV44Kn44O844OJ44GV44Gb44KL44G+44Gn44Gu6ZaT6ZqUXG4gICAgbGV0IGFjdE51bSA9IDA7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvL+ePvuWcqOOCouOCr+ODhuOCo+ODluOBqueVquWPt1xuICBcbiAgXG4gICAgLy8g44K544Op44Kk44OJ44GuMeaemuebruOCkuODleOCp+ODvOODieOCpOODs1xuICAgIHNsaWRlSXRlbVswXS5jbGFzc0xpc3QuYWRkKCdTaG93XycsICdMZWZ0VG9SaWdodF8nKTtcbiAgXG4gICAgLy8g5Yem55CG44KS57mw44KK6L+U44GZXG4gICAgc2V0SW50ZXJ2YWwoKCkgPT4ge1xuICAgICAgaWYgKGFjdE51bSA8IHRvdGFsTnVtKSB7XG4gIFxuICAgICAgICBsZXQgbm93U2xpZGUgPSBzbGlkZUl0ZW1bYWN0TnVtXTtcbiAgICAgICAgbGV0IG5leHRTbGlkZSA9IHNsaWRlSXRlbVsrK2FjdE51bV07XG4gIFxuICAgICAgICAvLy5zaG93X+WJiumZpOOBp+ODleOCp+ODvOODieOCouOCpuODiFxuICAgICAgICBub3dTbGlkZS5jbGFzc0xpc3QucmVtb3ZlKCdTaG93XycpO1xuICAgICAgICAvLyDjgajlkIzmmYLjgavjgIHmrKHjga7jgrnjg6njgqTjg4njgYzjgrrjg7zjg6DjgZfjgarjgYzjgonjg5Xjgqfjg7zjg4njgqTjg7PjgZnjgotcbiAgICAgICAgbmV4dFNsaWRlLmNsYXNzTGlzdC5hZGQoJ1Nob3dfJywgJ0xlZnRUb1JpZ2h0XycpO1xuICAgICAgICAvL+ODleOCp+ODvOODieOCouOCpuODiOWujOS6huW+jOOAgS5MZWZ0VG9SaWdodF/liYrpmaRcbiAgICAgICAgc2V0VGltZW91dCgoKSA9PiB7XG4gICAgICAgICAgbm93U2xpZGUuY2xhc3NMaXN0LnJlbW92ZSgnTGVmdFRvUmlnaHRfJyk7XG4gICAgICAgIH0sIEZhZGVUaW1lKTtcbiAgXG4gICAgICB9IGVsc2Uge1xuICBcbiAgICAgICAgbGV0IG5vd1NsaWRlID0gc2xpZGVJdGVtW2FjdE51bV07XG4gICAgICAgIGxldCBuZXh0U2xpZGUgPSBzbGlkZUl0ZW1bYWN0TnVtID0gMF07XG4gIFxuICAgICAgICAvLy5zaG93X+WJiumZpOOBp+ODleOCp+ODvOODieOCouOCpuODiFxuICAgICAgICBub3dTbGlkZS5jbGFzc0xpc3QucmVtb3ZlKCdTaG93XycpO1xuICAgICAgICAvLyDjgajlkIzmmYLjgavjgIHmrKHjga7jgrnjg6njgqTjg4njgYzjgrrjg7zjg6DjgZfjgarjgYzjgonjg5Xjgqfjg7zjg4njgqTjg7PjgZnjgotcbiAgICAgICAgbmV4dFNsaWRlLmNsYXNzTGlzdC5hZGQoJ1Nob3dfJywgJ0xlZnRUb1JpZ2h0XycpO1xuICAgICAgICAvL+ODleOCp+ODvOODieOCouOCpuODiOWujOS6huW+jOOAgS5MZWZ0VG9SaWdodF/liYrpmaRcbiAgICAgICAgc2V0VGltZW91dCgoKSA9PiB7XG4gICAgICAgICAgbm93U2xpZGUuY2xhc3NMaXN0LnJlbW92ZSgnTGVmdFRvUmlnaHRfJyk7XG4gICAgICAgIH0sIEZhZGVUaW1lKTtcbiAgXG4gICAgICB9XG4gICAgICA7XG4gICAgfSwgSW50YXJ2YWxUaW1lKTtcbiAgXG4gIH1cbiAgXG4gICJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFBQTtBQUNBO0FBQUE7QUFDQTtBQUFBO0FBQ0E7QUFBQTtBQUNBO0FBQUE7QUFHQTtBQUNBO0FBQUE7QUFDQTtBQUVBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBRUE7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBQUE7QUFDQTtBQUNBO0FBQUE7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUFBO0FBQ0E7QUFFQSIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/js/keyvisual_slider.js\n");

/***/ }),

/***/ 1:
/*!******************************************!*\
  !*** multi ./src/js/keyvisual_slider.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! ./src/js/keyvisual_slider.js */"./src/js/keyvisual_slider.js");


/***/ })

/******/ });