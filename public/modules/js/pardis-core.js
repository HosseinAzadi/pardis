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

/***/ "./assets/js/pardis-core.js":
/*!**********************************!*\
  !*** ./assets/js/pardis-core.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// start destroy a company
$(".destroy_company").on('click', function (e) {
  e.preventDefault();
  var id = $(this).data('id');
  Swal.fire({
    title: 'آیا برای حذف اطمینان دارید؟',
    icon: 'warning',
    showCancelButton: true,
    customClass: {
      confirmButton: 'btn btn-danger mx-2',
      cancelButton: 'btn btn-light mx-2'
    },
    buttonsStyling: false,
    confirmButtonText: 'حذف',
    cancelButtonText: 'لغو',
    showClass: {
      popup: 'animated fadeInDown'
    },
    hideClass: {
      popup: 'animated fadeOutUp'
    }
  }).then(function (result) {
    if (result.isConfirmed) {
      $.ajax({
        type: "delete",
        url: baseUrl + '/panel/company/' + id,
        dataType: 'json',
        success: function success(response) {
          Swal.fire({
            icon: 'success',
            text: 'عملیات حذف با موفقیت انجام شد.',
            confirmButtonText: 'تایید',
            customClass: {
              confirmButton: 'btn btn-success'
            },
            buttonsStyling: false,
            showClass: {
              popup: 'animated fadeInDown'
            },
            hideClass: {
              popup: 'animated fadeOutUp'
            }
          }).then(function (response) {
            location.reload();
          });
        }
      });
    }
  });
}); // end destroy a company
// start change company approved

$('#approved_company').on('change', function () {
  var target = $(this);
  var id = $(this).data('id');
  var approved = $(this).val();
  Swal.fire({
    title: 'آیا مطمئن هستید؟',
    icon: 'warning',
    showCancelButton: true,
    customClass: {
      confirmButton: 'btn btn-danger mx-2',
      cancelButton: 'btn btn-light mx-2'
    },
    buttonsStyling: false,
    confirmButtonText: 'بروزرسانی',
    cancelButtonText: 'لغو',
    showClass: {
      popup: 'animated fadeInDown'
    },
    hideClass: {
      popup: 'animated fadeOutUp'
    }
  }).then(function (result) {
    if (result.isConfirmed) {
      $.ajax({
        type: "patch",
        url: baseUrl + '/panel/company/approved/' + id,
        dataType: 'json',
        data: {
          approved: approved
        },
        success: function success(response) {
          Swal.fire({
            icon: 'success',
            text: 'عملیات بروزرسانی با موفقیت انجام شد.',
            confirmButtonText: 'تایید',
            customClass: {
              confirmButton: 'btn btn-success'
            },
            buttonsStyling: false,
            showClass: {
              popup: 'animated fadeInDown'
            },
            hideClass: {
              popup: 'animated fadeOutUp'
            }
          }).then(function (response) {
            switch (approved) {
              case 'awaiting_approved':
                empty_confirm_icon_classes(target, 'text-warning', 'fa fa-question');
                break;

              case 'confirmed':
                empty_confirm_icon_classes(target, 'text-success', 'fa fa-check');
                break;

              case 'not_approved':
                empty_confirm_icon_classes(target, 'text-danger', 'fa fa-remove');
                break;
            }

            hide_error_messages();
          });
        },
        error: function error(response) {
          show_error_messages(response);
        }
      });
    }
  });
}); // end change company approved
// start show error messages for ajax requests

function show_error_messages(response) {
  $('.form-group').find('.invalid-feedback').addClass('d-none').find('strong').text('');
  $('.form-group').find('.is-invalid').removeClass('is-invalid');

  if (response.status === 422) {
    for (var field_name in response.responseJSON.errors) {
      if (response.responseJSON.errors[field_name]) {
        var target = $('[name=' + field_name + ']');
        target.addClass('is-invalid');
        target.closest('.form-group').find('.invalid-feedback').removeClass('d-none').find('strong').text(response.responseJSON.errors[field_name]);
      }
    }
  }
} // end show error messages for ajax requests


function empty_confirm_icon_classes(target, color, icon) {
  var firstSpan = target.closest('.form-group').find('span').first();
  firstSpan.attr('class', '');
  firstSpan.addClass(color);
  var iAttribute = firstSpan.find('i');
  iAttribute.attr('class', '');
  iAttribute.addClass(icon);
} // start hide fields error messages before and after ajax submit


function hide_error_messages() {
  $('.form-group').find('.invalid-feedback').addClass('d-none').find('strong').text('');
  $('.form-group').find('.is-invalid').removeClass('is-invalid');
} // end hide fields error messages before and after ajax submit

/***/ }),

/***/ "./assets/sass/pardis-core.scss":
/*!**************************************!*\
  !*** ./assets/sass/pardis-core.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***********************************************************************!*\
  !*** multi ./assets/js/pardis-core.js ./assets/sass/pardis-core.scss ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\projects\pardis\modules\pardisCore\src\assets\js\pardis-core.js */"./assets/js/pardis-core.js");
module.exports = __webpack_require__(/*! D:\projects\pardis\modules\pardisCore\src\assets\sass\pardis-core.scss */"./assets/sass/pardis-core.scss");


/***/ })

/******/ });