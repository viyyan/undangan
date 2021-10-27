(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

var _Quiz = _interopRequireDefault(require("./src/components/Quiz"));

var _Modal = _interopRequireDefault(require("./src/components/Modal"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

//
// Quiz JS
//
(function () {
  'use strict'; // Quiz

  var data = [{
    id: 1,
    question: 'Which industry are you working in?',
    type: 'tags',
    answers: [{
      id: 1,
      label: 'Advertising & Media'
    }, {
      id: 2,
      label: 'Automotive'
    }, {
      id: 3,
      label: 'Building  and Infrastructure'
    }]
  }, {
    id: 2,
    question: 'Who is your customer?',
    type: 'binary',
    answers: [{
      id: 11,
      label: 'Product'
    }, {
      id: 12,
      label: 'Service'
    }]
  }, {
    id: 3,
    question: 'Click the phase that is suitable for your product',
    type: 'step',
    answers: [{
      id: 21,
      label: 'Development'
    }, {
      id: 22,
      label: 'Launch'
    }, {
      id: 23,
      label: 'Growth'
    }, {
      id: 22,
      label: 'Launch'
    }, {
      id: 23,
      label: 'Growth'
    }]
  }];

  var onSubmit = function onSubmit(result) {
    return console.log(result);
  };

  new _Quiz["default"](data, onSubmit).init(); // Modal

  new _Modal["default"]().init();
})();

},{"./src/components/Modal":2,"./src/components/Quiz":3}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

//
// Modal lib
//
var Modal = /*#__PURE__*/function () {
  /**
   * Class constructor
   *
   * @return void 
   */
  function Modal() {
    _classCallCheck(this, Modal);
  }
  /**
   * Init
   *
   * @return mixed
   */


  _createClass(Modal, [{
    key: "init",
    value: function init() {
      this.initClose();
      return this;
    }
    /**
     * Init close
     *
     * @return mixed
     */

  }, {
    key: "initClose",
    value: function initClose() {
      var _this = this;

      var modals = document.querySelectorAll('.modal');
      modals.forEach(function (element) {
        var buttons = element.querySelectorAll('.modal__trigger__close');
        buttons.forEach(function (button) {
          button.addEventListener('click', function (evt) {
            evt.preventDefault();

            _this.onClose(button, element);
          });
        });
      });
    }
    /**
     * On close
     *
     * @return mixed
     */

  }, {
    key: "onClose",
    value: function onClose(button, modal) {
      modal.setAttribute('data-state', 'close');
    }
  }]);

  return Modal;
}();

var _default = Modal;
exports["default"] = _default;

},{}],3:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

//
// Quiz lib
//
var Quiz = /*#__PURE__*/function () {
  /**
   * Class constructor
   *
   * @return void 
   */
  function Quiz(data, onSubmit) {
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};

    _classCallCheck(this, Quiz);

    this.step = 1;
    this.answers = {};
    this.defaultAnswers = {};
    this.questionsTotal = 0; // Set callback

    this.data = data;
    this.onSubmit = onSubmit; // Get root element

    var selector = '.quiz';

    if (typeof options.selector !== 'undefined' && options.selector) {
      selector = options.selector;
    }

    this.rootEl = document.querySelector(selector);
    this.rootEl.setAttribute('data-step', this.step);
  }
  /**
   * Init
   *
   * @return mixed
   */


  _createClass(Quiz, [{
    key: "init",
    value: function init() {
      if (this.data && this.data.length > 0) {
        this.questionsTotal = this.data.length;
        this.createQuestions();
        this.setupActions();
        this.changeDir(1);
      }

      return this;
    }
    /**
     * Prepare questions
     *
     * @return mixed
     */

  }, {
    key: "createQuestions",
    value: function createQuestions() {
      var _this = this;

      var contentEl = this.rootEl.querySelector('.quiz__main__content');
      this.data.forEach(function (item, index) {
        var content = _this.createQuestion(item, index);

        contentEl.appendChild(content); // Prepare answers variable

        var key = _this.getQuestionKey(item);

        _this.answers[key] = '';
      });
    }
    /**
     * Create question
     *
     * @return mixed
     */

  }, {
    key: "createQuestion",
    value: function createQuestion(item, index) {
      var itemEl = document.createElement('DIV');
      itemEl.setAttribute('data-id', item.id);
      itemEl.setAttribute('data-type', item.type);
      itemEl.classList.add('quiz__question');

      if (index === 0) {
        itemEl.setAttribute('data-state', 'active');
      }

      var titleEl = document.createElement('H3');
      var titleTxt = document.createTextNode(item.question);
      titleEl.classList.add('text--xl');
      titleEl.appendChild(titleTxt);
      itemEl.appendChild(titleEl);
      var answersEl = this.createAnswers(item);
      itemEl.appendChild(answersEl);
      return itemEl;
    }
    /**
     * Create answers
     *
     * @return mixed
     */

  }, {
    key: "createAnswers",
    value: function createAnswers(item) {
      var _this2 = this;

      var answers = item.answers;
      var answersEl = document.createElement('DIV');
      answersEl.classList.add('quiz__answers');
      var innerEl = document.createElement('OL');
      answers.forEach(function (answer) {
        var answerEl = document.createElement('LI');
        var buttonEl = document.createElement('BUTTON');
        var buttonTxt = document.createTextNode(answer.label);
        buttonEl.classList.add('button');
        buttonEl.classList.add('button--white');

        if (item.type !== 'step') {
          buttonEl.classList.add('button--line');
        }

        buttonEl.addEventListener('click', function (evt) {
          evt.preventDefault();
          evt.stopPropagation();

          _this2.onSelect(answer, item, buttonEl, answersEl);
        });
        buttonEl.appendChild(buttonTxt);
        answerEl.appendChild(buttonEl);
        innerEl.appendChild(answerEl);
      });
      answersEl.appendChild(innerEl);
      return answersEl;
    }
    /**
     * Setup actions
     *
     * @return mixed
     */

  }, {
    key: "setupActions",
    value: function setupActions() {
      // Reset
      this.setupButtonReset(); // Prev

      this.setupButtonPrev(); // Next

      this.setupButtonNext();
    }
    /**
     * Setup button reset
     *
     * @return mixed
     */

  }, {
    key: "setupButtonReset",
    value: function setupButtonReset() {
      var _this3 = this;

      var button = this.rootEl.querySelector('.quiz__action__reset button');
      button.addEventListener('click', function (evt) {
        evt.preventDefault();
        _this3.step = 1; // Reset answer

        for (var key in _this3.answers) {
          if (_this3.answers.hasOwnProperty(key)) {
            _this3.answers[key] = '';
          }
        }

        _this3.rootEl.setAttribute('data-step', 1);

        _this3.goToQuestionScreen(1); // Reset active button


        var activeButtons = _this3.rootEl.querySelectorAll('button[data-state="active"]');

        activeButtons.forEach(function (button) {
          button.removeAttribute('data-state');
        }); // Reset next button

        var buttonNext = _this3.rootEl.querySelector('.quiz__action__next button');

        buttonNext.querySelector('.button__label').textContent = buttonNext.getAttribute('data-label-next');
      });
    }
    /**
     * Setup button prev
     *
     * @return mixed
     */

  }, {
    key: "setupButtonPrev",
    value: function setupButtonPrev() {
      var _this4 = this;

      var button = this.rootEl.querySelector('.quiz__action__prev button');
      button.addEventListener('click', function (evt) {
        evt.preventDefault(); // Reset button

        var buttonNext = _this4.rootEl.querySelector('.quiz__action__next button');

        buttonNext.querySelector('.button__label').textContent = buttonNext.getAttribute('data-label-next');
        var prevStep = _this4.step - 1;

        if (prevStep > 0) {
          _this4.step = prevStep;

          _this4.goToQuestionScreen(prevStep);
        }

        if (prevStep === 1) {
          _this4.rootEl.querySelector('.quiz__action__reset button').setAttribute('disabled', 'disabled');

          button.setAttribute('disabled', 'disabled');
        }
      });
    }
    /**
     * Setup button next
     *
     * @return mixed
     */

  }, {
    key: "setupButtonNext",
    value: function setupButtonNext() {
      var _this5 = this;

      var button = this.rootEl.querySelector('.quiz__action__next button');
      button.addEventListener('click', function (evt) {
        evt.preventDefault();

        var isError = _this5.checkSelectionError();

        if (!isError) {
          if (_this5.step === _this5.questionsTotal && _this5.onSubmit) {
            _this5.onSubmit(_this5.answers);

            return false;
          } // Reset button


          _this5.rootEl.querySelector('.quiz__action__reset button').removeAttribute('disabled');

          _this5.rootEl.querySelector('.quiz__action__prev button').removeAttribute('disabled');

          var nextStep = _this5.step + 1;

          if (nextStep <= _this5.questionsTotal) {
            _this5.step = nextStep;

            _this5.goToQuestionScreen(nextStep);
          }

          if (nextStep === _this5.questionsTotal) {
            button.querySelector('.button__label').textContent = button.getAttribute('data-label-submit');
          }
        }
      });
    }
    /**
     * On select
     *
     * @return mixed
     */

  }, {
    key: "onSelect",
    value: function onSelect(answer, question, buttonEl, answersEl) {
      var key = this.getQuestionKey(question);

      if (typeof this.answers[key] !== 'undefined') {
        this.answers[key] = answer.id;
      }

      var state = buttonEl.getAttribute('data-state');

      if (!state || state !== 'active') {
        var activeButton = answersEl.querySelector('button[data-state="active"]');

        if (activeButton) {
          activeButton.removeAttribute('data-state');
        }

        buttonEl.setAttribute('data-state', 'active');
      } else {
        buttonEl.removeAttribute('data-state');
      }
    }
    /**
     * Check selection error
     *
     * @return mixed
     */

  }, {
    key: "checkSelectionError",
    value: function checkSelectionError() {
      var stepIndex = this.step - 1;
      var item = this.data[stepIndex];
      var questionKey = this.getQuestionKey(item);
      var answer = this.answers[questionKey];

      if (!answer || answer === '') {
        // Show error
        document.querySelector('.quiz__alert-error').setAttribute('data-state', 'open');
        return true;
      }

      return false;
    }
    /**
     * Go to question screen
     *
     * @return mixed
     */

  }, {
    key: "goToQuestionScreen",
    value: function goToQuestionScreen(step) {
      var stepIndex = step - 1;
      var item = this.data[stepIndex];

      if (typeof item !== 'undefined') {
        var activeEl = this.rootEl.querySelector('.quiz__question[data-state="active"]');
        var nextEl = this.rootEl.querySelector(".quiz__question[data-id=\"".concat(item.id, "\"]"));
        this.animateScreen(activeEl, nextEl);
        this.changeDir(step);
      }
    }
    /**
     * Go to question screen
     *
     * @return mixed
     */

  }, {
    key: "animateScreen",
    value: function animateScreen(activeEl, nextEl) {
      if (activeEl && nextEl) {
        activeEl.style.visibility = 'hidden';
        activeEl.style.opacity = 0;
        activeEl.setAttribute('data-state', 'inactive');
        setTimeout(function () {
          nextEl.style.visibility = 'visible';
          nextEl.style.opacity = 1;
          nextEl.setAttribute('data-state', 'active');
        }, 300);
      }
    }
    /**
     * Go to question screen
     *
     * @return mixed
     */

  }, {
    key: "changeDir",
    value: function changeDir(step) {
      var dirEl = this.rootEl.querySelector('.quiz__dir__bar__value');
      var toWidth = step / this.questionsTotal * 100;
      dirEl.style.width = "".concat(toWidth, "%"); // Change step label

      this.rootEl.querySelector('.quiz__dir__step').textContent = step;
    }
    /**
     * Get question key
     *
     * @return mixed
     */

  }, {
    key: "getQuestionKey",
    value: function getQuestionKey(item) {
      var key = "question__".concat(item.id);
      return key;
    }
  }]);

  return Quiz;
}();

var _default = Quiz;
exports["default"] = _default;

},{}]},{},[1]);
