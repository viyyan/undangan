

(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

//
// Select lib
//
var Select = /*#__PURE__*/function () {
  /**
   * Class constructor
   *
   * @return void 
   */
  function Select() {
    _classCallCheck(this, Select);

    this.elements = document.querySelectorAll('.select');
  }
  /**
   * Init
   *
   * @return mixed
   */


  _createClass(Select, [{
    key: "init",
    value: function init() {
      this.elements.forEach(function (element) {
        element.querySelector('button').addEventListener('click', function () {
          var state = element.getAttribute('data-state');
          var newState = '';
          element.setAttribute('data-state', !state);
        });
      });
      return this;
    }
  }]);

  return Select;
}();

var _default = Select;
exports["default"] = _default;

},{}],2:[function(require,module,exports){
"use strict";

var _Select = _interopRequireDefault(require("./components/Select"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

//
// Main JS
//
(function () {
  'use strict'; //Home script

  new _Select["default"]().init();
})();

},{"./components/Select":1}]},{},[2]);
