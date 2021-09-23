(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

var _Select = _interopRequireDefault(require("./components/Select"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

//
// Main JS
//
(function () {
  'use strict'; // Get url filtered 

  var getUrlFiltered = function getUrlFiltered(filterName, value) {
    var url = "".concat(CASE_STUDY_PERMALINK, "?").concat(filterName, "=").concat(value); // Get other filter options

    var selects = document.querySelectorAll('.case-study__filter__item .select');
    selects.forEach(function (select) {
      var selectName = select.getAttribute('data-filter');
      var selectValue = select.getAttribute('data-value');

      if (selectName !== filterName) {
        url += "&".concat(selectName, "=").concat(selectValue);
      }
    });
    return url;
  }; // Filter options


  new _Select["default"]({
    changeSelected: false,
    multiple: false,
    onClick: function onClick() {
      var elements = document.querySelectorAll('.case-study__filter .select');
      elements.forEach(function (element) {
        element.setAttribute('data-state', 'close');
      });
    },
    onOptionClick: function onOptionClick(button, select) {
      var value = button.getAttribute('data-value');
      var filterName = select.getAttribute('data-filter');
      window.location.href = getUrlFiltered(filterName, value);
    },
    onInitOptions: function onInitOptions() {
      // Remove all active options
      var options = document.querySelectorAll('.case-study__filter .select__options button');
      options.forEach(function (opt) {
        opt.removeAttribute('data-state');
      }); // Set active option

      var currentUrl = new URL(window.location.href);
      currentUrl.searchParams.forEach(function (value, key) {
        var filterEl = document.querySelector(".case-study__filter .select[data-filter=\"".concat(key, "\"]"));

        if (filterEl) {
          filterEl.setAttribute('data-value', value);
          var selector = ".select[data-filter=\"".concat(key, "\"] .select__options button[data-value=\"").concat(value, "\"]");
          var button = filterEl.querySelector(selector);

          if (button) {
            button.setAttribute('data-state', 'active');
          }
        }
      });
    }
  }).init();
})();

},{"./components/Select":2}],2:[function(require,module,exports){
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
    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    _classCallCheck(this, Select);

    this.elements = document.querySelectorAll('.select');

    if (typeof options.onClick !== 'undefined' && options.onClick) {
      this.onClick = options.onClick;
    }

    if (typeof options.onChangeState !== 'undefined' && options.onChangeState) {
      this.onChangeState = options.onChangeState;
    }

    if (typeof options.onOptionClick !== 'undefined' && options.onOptionClick) {
      this.onOptionClick = options.onOptionClick;
    }

    if (typeof options.onInitOptions !== 'undefined' && options.onInitOptions) {
      this.onInitOptions = options.onInitOptions;
    }

    if (typeof options.changeSelected !== 'undefined') {
      this.changeSelected = options.changeSelected;
    }

    if (typeof options.multiple !== 'undefined') {
      this.multiple = options.multiple;
    }
  }
  /**
   * Init
   *
   * @return mixed
   */


  _createClass(Select, [{
    key: "init",
    value: function init() {
      this.initSelected();
      this.initOptions();
      return this;
    }
    /**
     * Init selected
     *
     * @return mixed
     */

  }, {
    key: "initSelected",
    value: function initSelected() {
      var _this = this;

      // Selected click
      this.elements.forEach(function (element) {
        element.querySelector('button').addEventListener('click', function (evt) {
          evt.stopPropagation();

          if (_this.onClick) {
            _this.onClick(element);
          }

          var state = element.getAttribute('data-state');
          var newState = state === 'open' ? 'close' : 'open';
          element.setAttribute('data-state', newState);

          if (_this.onChangeState) {
            _this.onChangeState(element, newState);
          }
        });
      }); // Remove options

      document.querySelector('body').addEventListener('click', function () {
        _this.elements.forEach(function (element) {
          element.setAttribute('data-state', 'close');
        });
      });
    }
    /**
     * Init options
     *
     * @return mixed
     */

  }, {
    key: "initOptions",
    value: function initOptions() {
      var _this2 = this;

      /**
       * To make flexibility custom init options not call per element
       */
      if (this.initOptions) {
        this.onInitOptions();
      }

      this.elements.forEach(function (element) {
        // Selected first option
        if (!_this2.onInitOptions) {
          var firstOpt = element.querySelector('.select__options li:first-child button');
          firstOpt.setAttribute('data-state', 'active');
          element.setAttribute('data-value', firstOpt.getAttribute('data-value'));
        } // Click option


        var options = element.querySelectorAll('.select__options button');
        options.forEach(function (button) {
          button.addEventListener('click', function (evt) {
            evt.preventDefault();

            if (!_this2.multiple) {
              // Remove all active
              options.forEach(function (btn) {
                btn.removeAttribute('data-state');
              }); // Active current

              button.setAttribute('data-state', 'active');
            } else {
              var state = button.getAttribute('data-state');

              if (state) {
                button.removeAttribute('data-state');
              } else {
                button.setAttribute('data-state', 'active');
              }
            } // Callback


            if (_this2.onOptionClick) {
              _this2.onOptionClick(button, element, evt);
            }
          });
        });
      });
    }
  }]);

  return Select;
}();

var _default = Select;
exports["default"] = _default;

},{}]},{},[1]);
