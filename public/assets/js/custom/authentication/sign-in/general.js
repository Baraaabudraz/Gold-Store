/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/extended/js/custom/authentication/sign-in/general.js":
/*!*******************************************************************************!*\
  !*** ./resources/assets/extended/js/custom/authentication/sign-in/general.js ***!
  \*******************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTSigninGeneral = function () {\n  // Elements\n  var form;\n  var submitButton;\n  var validator; // Handle form\n\n  var handleForm = function handleForm(e) {\n    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/\n    validator = FormValidation.formValidation(form, {\n      fields: {\n        'email': {\n          validators: {\n            notEmpty: {\n              message: 'البريد الالكتروني مطلوب'\n            },\n            emailAddress: {\n              message: 'البريد الالكتروني غير صالح'\n            }\n          }\n        },\n        'password': {\n          validators: {\n            notEmpty: {\n              message: 'كلمة المرور مطلوبة'\n            },\n            callback: {\n              message: 'أدخل كلمة مرور صالحة'\n            }\n          }\n        }\n      },\n      plugins: {\n        trigger: new FormValidation.plugins.Trigger(),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row',\n          eleInvalidClass: '',\n          eleValidClass: ''\n        })\n      }\n    }); // Handle form submit\n\n    submitButton.addEventListener('click', function (e) {\n      // Prevent button default action\n      e.preventDefault(); // Validate form\n\n      validator.validate().then(function (status) {\n        if (status === 'Valid') {\n          // Show loading indication\n          submitButton.setAttribute('data-kt-indicator', 'on'); // Disable button to avoid multiple click\n\n          submitButton.disabled = true; // Simulate ajax request\n\n          axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form)).then(function (response) {\n            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n            Swal.fire({\n              text: \"تم تسجيل الدخول بنجاح\",\n              icon: \"success\",\n              buttonsStyling: false,\n              confirmButtonText: \"استمرار\",\n              customClass: {\n                confirmButton: \"btn btn-primary\"\n              }\n            }).then(function (result) {\n              if (result.isConfirmed) {\n                form.querySelector('[name=\"email\"]').value = \"\";\n                form.querySelector('[name=\"password\"]').value = \"\";\n                window.location.reload();\n              }\n            });\n          })[\"catch\"](function (error) {\n            var dataMessage = error.response.data.message;\n            var dataErrors = error.response.data.errors;\n\n            for (var errorsKey in dataErrors) {\n              if (!dataErrors.hasOwnProperty(errorsKey)) continue;\n              dataMessage += \"\\r\\n\" + dataErrors[errorsKey];\n            }\n\n            if (error.response) {\n              Swal.fire({\n                text: dataMessage,\n                icon: \"error\",\n                buttonsStyling: false,\n                confirmButtonText: \"حسنا !\",\n                customClass: {\n                  confirmButton: \"btn btn-primary\"\n                }\n              });\n            }\n          }).then(function () {\n            // always executed\n            // Hide loading indication\n            submitButton.removeAttribute('data-kt-indicator'); // Enable button\n\n            submitButton.disabled = false;\n          });\n        } else {\n          // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n          Swal.fire({\n            text: \"عذرا هنالك مشكلة , حاول مجددا\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"حسنا !\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n  }; // Public functions\n\n\n  return {\n    // Initialization\n    init: function init() {\n      form = document.querySelector('#kt_sign_in_form');\n      submitButton = document.querySelector('#kt_sign_in_submit');\n      handleForm();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTSigninGeneral.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2V4dGVuZGVkL2pzL2N1c3RvbS9hdXRoZW50aWNhdGlvbi9zaWduLWluL2dlbmVyYWwuanM/MGZkNiJdLCJuYW1lcyI6WyJLVFNpZ25pbkdlbmVyYWwiLCJmb3JtIiwic3VibWl0QnV0dG9uIiwidmFsaWRhdG9yIiwiaGFuZGxlRm9ybSIsImUiLCJGb3JtVmFsaWRhdGlvbiIsImZvcm1WYWxpZGF0aW9uIiwiZmllbGRzIiwidmFsaWRhdG9ycyIsIm5vdEVtcHR5IiwibWVzc2FnZSIsImVtYWlsQWRkcmVzcyIsImNhbGxiYWNrIiwicGx1Z2lucyIsInRyaWdnZXIiLCJUcmlnZ2VyIiwiYm9vdHN0cmFwIiwiQm9vdHN0cmFwNSIsInJvd1NlbGVjdG9yIiwiZWxlSW52YWxpZENsYXNzIiwiZWxlVmFsaWRDbGFzcyIsImFkZEV2ZW50TGlzdGVuZXIiLCJwcmV2ZW50RGVmYXVsdCIsInZhbGlkYXRlIiwidGhlbiIsInN0YXR1cyIsInNldEF0dHJpYnV0ZSIsImRpc2FibGVkIiwiYXhpb3MiLCJwb3N0IiwiY2xvc2VzdCIsImdldEF0dHJpYnV0ZSIsIkZvcm1EYXRhIiwicmVzcG9uc2UiLCJTd2FsIiwiZmlyZSIsInRleHQiLCJpY29uIiwiYnV0dG9uc1N0eWxpbmciLCJjb25maXJtQnV0dG9uVGV4dCIsImN1c3RvbUNsYXNzIiwiY29uZmlybUJ1dHRvbiIsInJlc3VsdCIsImlzQ29uZmlybWVkIiwicXVlcnlTZWxlY3RvciIsInZhbHVlIiwid2luZG93IiwibG9jYXRpb24iLCJyZWxvYWQiLCJlcnJvciIsImRhdGFNZXNzYWdlIiwiZGF0YSIsImRhdGFFcnJvcnMiLCJlcnJvcnMiLCJlcnJvcnNLZXkiLCJoYXNPd25Qcm9wZXJ0eSIsInJlbW92ZUF0dHJpYnV0ZSIsImluaXQiLCJkb2N1bWVudCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsZUFB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QXdJQTs7O0FBQ0F3RCxNQUFNLENBQUNDLGtCQUFQLENBQTBCLFlBQVk7QUFDbEM3RCxpQkFBZSxDQUFDMEQsSUFBaEI7QUFDSCxDQUZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2Fzc2V0cy9leHRlbmRlZC9qcy9jdXN0b20vYXV0aGVudGljYXRpb24vc2lnbi1pbi9nZW5lcmFsLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVFNpZ25pbkdlbmVyYWwgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBFbGVtZW50c1xyXG4gICAgdmFyIGZvcm07XHJcbiAgICB2YXIgc3VibWl0QnV0dG9uO1xyXG4gICAgdmFyIHZhbGlkYXRvcjtcclxuXHJcbiAgICAvLyBIYW5kbGUgZm9ybVxyXG4gICAgdmFyIGhhbmRsZUZvcm0gPSBmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgIC8vIEluaXQgZm9ybSB2YWxpZGF0aW9uIHJ1bGVzLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBGb3JtVmFsaWRhdGlvbiBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOmh0dHBzOi8vZm9ybXZhbGlkYXRpb24uaW8vXHJcbiAgICAgICAgdmFsaWRhdG9yID0gRm9ybVZhbGlkYXRpb24uZm9ybVZhbGlkYXRpb24oXHJcbiAgICAgICAgICAgIGZvcm0sXHJcbiAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgIGZpZWxkczoge1xyXG4gICAgICAgICAgICAgICAgICAgICdlbWFpbCc6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRhdG9yczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbm90RW1wdHk6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnRW1haWwgYWRkcmVzcyBpcyByZXF1aXJlZCdcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbWFpbEFkZHJlc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnVGhlIHZhbHVlIGlzIG5vdCBhIHZhbGlkIGVtYWlsIGFkZHJlc3MnXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICdwYXNzd29yZCc6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRhdG9yczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbm90RW1wdHk6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnVGhlIHBhc3N3b3JkIGlzIHJlcXVpcmVkJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ1BsZWFzZSBlbnRlciB2YWxpZCBwYXNzd29yZCcsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgcGx1Z2luczoge1xyXG4gICAgICAgICAgICAgICAgICAgIHRyaWdnZXI6IG5ldyBGb3JtVmFsaWRhdGlvbi5wbHVnaW5zLlRyaWdnZXIoKSxcclxuICAgICAgICAgICAgICAgICAgICBib290c3RyYXA6IG5ldyBGb3JtVmFsaWRhdGlvbi5wbHVnaW5zLkJvb3RzdHJhcDUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICByb3dTZWxlY3RvcjogJy5mdi1yb3cnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbGVJbnZhbGlkQ2xhc3M6ICcnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbGVWYWxpZENsYXNzOiAnJ1xyXG4gICAgICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICApO1xyXG5cclxuICAgICAgICAvLyBIYW5kbGUgZm9ybSBzdWJtaXRcclxuICAgICAgICBzdWJtaXRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgICAgICAvLyBQcmV2ZW50IGJ1dHRvbiBkZWZhdWx0IGFjdGlvblxyXG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgICAgICAvLyBWYWxpZGF0ZSBmb3JtXHJcbiAgICAgICAgICAgIHZhbGlkYXRvci52YWxpZGF0ZSgpLnRoZW4oZnVuY3Rpb24gKHN0YXR1cykge1xyXG4gICAgICAgICAgICAgICAgaWYgKHN0YXR1cyA9PT0gJ1ZhbGlkJykge1xyXG4gICAgICAgICAgICAgICAgICAgIC8vIFNob3cgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gRGlzYWJsZSBidXR0b24gdG8gYXZvaWQgbXVsdGlwbGUgY2xpY2tcclxuICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSB0cnVlO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAvLyBTaW11bGF0ZSBhamF4IHJlcXVlc3RcclxuICAgICAgICAgICAgICAgICAgICBheGlvcy5wb3N0KHN1Ym1pdEJ1dHRvbi5jbG9zZXN0KCdmb3JtJykuZ2V0QXR0cmlidXRlKCdhY3Rpb24nKSwgbmV3IEZvcm1EYXRhKGZvcm0pKVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFNob3cgbWVzc2FnZSBwb3B1cC4gRm9yIG1vcmUgaW5mbyBjaGVjayB0aGUgcGx1Z2luJ3Mgb2ZmaWNpYWwgZG9jdW1lbnRhdGlvbjogaHR0cHM6Ly9zd2VldGFsZXJ0Mi5naXRodWIuaW8vXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IFwiWW91IGhhdmUgc3VjY2Vzc2Z1bGx5IGxvZ2dlZCBpbiFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcInN1Y2Nlc3NcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwiZW1haWxcIl0nKS52YWx1ZSA9IFwiXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcm0ucXVlcnlTZWxlY3RvcignW25hbWU9XCJwYXNzd29yZFwiXScpLnZhbHVlID0gXCJcIjtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgZGF0YU1lc3NhZ2UgPSBlcnJvci5yZXNwb25zZS5kYXRhLm1lc3NhZ2U7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsZXQgZGF0YUVycm9ycyA9IGVycm9yLnJlc3BvbnNlLmRhdGEuZXJyb3JzO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvciAoY29uc3QgZXJyb3JzS2V5IGluIGRhdGFFcnJvcnMpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoIWRhdGFFcnJvcnMuaGFzT3duUHJvcGVydHkoZXJyb3JzS2V5KSkgY29udGludWU7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YU1lc3NhZ2UgKz0gXCJcXHJcXG5cIiArIGRhdGFFcnJvcnNbZXJyb3JzS2V5XTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoZXJyb3IucmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBkYXRhTWVzc2FnZSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWNvbjogXCJlcnJvclwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgICAgICAgICAgLnRoZW4oZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gYWx3YXlzIGV4ZWN1dGVkXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBIaWRlIGxvYWRpbmcgaW5kaWNhdGlvblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnJlbW92ZUF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBFbmFibGUgYnV0dG9uXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSBmYWxzZTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgIC8vIFNob3cgZXJyb3IgcG9wdXAuIEZvciBtb3JlIGluZm8gY2hlY2sgdGhlIHBsdWdpbidzIG9mZmljaWFsIGRvY3VtZW50YXRpb246IGh0dHBzOi8vc3dlZXRhbGVydDIuZ2l0aHViLmlvL1xyXG4gICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IFwiU29ycnksIGxvb2tzIGxpa2UgdGhlcmUgYXJlIHNvbWUgZXJyb3JzIGRldGVjdGVkLCBwbGVhc2UgdHJ5IGFnYWluLlwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcImVycm9yXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgY3VzdG9tQ2xhc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICAvLyBQdWJsaWMgZnVuY3Rpb25zXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIEluaXRpYWxpemF0aW9uXHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICBmb3JtID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X3NpZ25faW5fZm9ybScpO1xyXG4gICAgICAgICAgICBzdWJtaXRCdXR0b24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcja3Rfc2lnbl9pbl9zdWJtaXQnKTtcclxuXHJcbiAgICAgICAgICAgIGhhbmRsZUZvcm0oKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uICgpIHtcclxuICAgIEtUU2lnbmluR2VuZXJhbC5pbml0KCk7XHJcbn0pO1xyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/extended/js/custom/authentication/sign-in/general.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/extended/js/custom/authentication/sign-in/general.js"]();
/******/
/******/ })()
;
