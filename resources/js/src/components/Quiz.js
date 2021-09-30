//
// Quiz lib
//
class Quiz {
  /**
   * Class constructor
   *
   * @return void 
   */
  constructor(data, onSubmit, options = {}) {
    this.step = 1;
    this.answers = {};
    this.defaultAnswers = {};
    this.questionsTotal = 0;
  
    // Set callback
    this.data = data;
    this.onSubmit = onSubmit;

    // Get root element
    let selector = '.quiz';
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
  init() {
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
  createQuestions() {
    const contentEl = this.rootEl.querySelector('.quiz__main__content');

    this.data.forEach((item, index) => {
      const content = this.createQuestion(item, index);
      contentEl.appendChild(content);

      // Prepare answers variable
      const key = this.getQuestionKey(item);
      this.answers[key] = '';
    });
  }

  /**
   * Create question
   *
   * @return mixed
   */
  createQuestion(item, index) {
    const itemEl = document.createElement('DIV');
    itemEl.setAttribute('data-id', item.id);
    itemEl.setAttribute('data-type', item.type);
    itemEl.classList.add('quiz__question');

    if (index === 0) {
      itemEl.setAttribute('data-state', 'active');
    }

    const titleEl = document.createElement('H3');
    const titleTxt = document.createTextNode(item.question);
    titleEl.classList.add('text--xl');
    titleEl.appendChild(titleTxt);
    itemEl.appendChild(titleEl);

    const answersEl = this.createAnswers(item);
    itemEl.appendChild(answersEl);

    return itemEl;
  }

  /**
   * Create answers
   *
   * @return mixed
   */
  createAnswers(item) {
    const answers = item.answers;
    const answersEl = document.createElement('DIV');
    answersEl.classList.add('quiz__answers');

    const innerEl = document.createElement('OL');

    answers.forEach((answer) => {
      const answerEl = document.createElement('LI');
      const buttonEl = document.createElement('BUTTON');
      const buttonTxt = document.createTextNode(answer.label);

      buttonEl.classList.add('button');
      buttonEl.classList.add('button--white');
      if (item.type !== 'step') {
        buttonEl.classList.add('button--line');
      }

      buttonEl.addEventListener('click', (evt) => {
        evt.preventDefault();
        evt.stopPropagation();
        this.onSelect(answer, item, buttonEl, answersEl);
      });

      buttonEl.appendChild(buttonTxt);
      answerEl.appendChild(buttonEl);

      innerEl.appendChild(answerEl);
    })

    answersEl.appendChild(innerEl);

    return answersEl;
  }

  /**
   * Setup actions
   *
   * @return mixed
   */
  setupActions() {
    // Reset
    this.setupButtonReset();
    // Prev
    this.setupButtonPrev();
    // Next
    this.setupButtonNext();
  }

  /**
   * Setup button reset
   *
   * @return mixed
   */
  setupButtonReset() {
    const button = this.rootEl.querySelector('.quiz__action__reset button');
    button.addEventListener('click', (evt) => {
      evt.preventDefault();

      this.step = 1;
      
      // Reset answer
      for (let key in this.answers) {
        if (this.answers.hasOwnProperty(key)) {
          this.answers[key] = '';
        }
     }

      this.rootEl.setAttribute('data-step', 1);
      this.goToQuestionScreen(1);

      // Reset active button
      const activeButtons = this.rootEl.querySelectorAll('button[data-state="active"]');
      activeButtons.forEach((button) => {
        button.removeAttribute('data-state');
      });

      // Reset next button
      const buttonNext = this.rootEl.querySelector('.quiz__action__next button');
      buttonNext.querySelector('.button__label').textContent 
        = buttonNext.getAttribute('data-label-next');
    });
  }

  /**
   * Setup button prev
   *
   * @return mixed
   */
  setupButtonPrev() {
    const button = this.rootEl.querySelector('.quiz__action__prev button');
    button.addEventListener('click', (evt) => {
      evt.preventDefault();

      // Reset button
      const buttonNext = this.rootEl.querySelector('.quiz__action__next button');
      buttonNext.querySelector('.button__label').textContent 
        = buttonNext.getAttribute('data-label-next');

      const prevStep = this.step - 1;
      if (prevStep > 0) {
        this.step = prevStep;
        this.goToQuestionScreen(prevStep);
      }
      
      if (prevStep === 1) {
        this.rootEl.querySelector('.quiz__action__reset button')
          .setAttribute('disabled', 'disabled');
        button.setAttribute('disabled', 'disabled');
      }
    });
  }

  /**
   * Setup button next
   *
   * @return mixed
   */
  setupButtonNext() {
    const button = this.rootEl.querySelector('.quiz__action__next button');
    button.addEventListener('click', (evt) => {
      evt.preventDefault();

      const isError = this.checkSelectionError();
      if (! isError) {

        if (this.step === this.questionsTotal && this.onSubmit) {
          this.onSubmit(this.answers);
          return false;
        }

        // Reset button
        this.rootEl.querySelector('.quiz__action__reset button').removeAttribute('disabled');
        this.rootEl.querySelector('.quiz__action__prev button').removeAttribute('disabled');
  
        const nextStep = this.step + 1;
        if (nextStep <= this.questionsTotal) {
          this.step = nextStep;
          this.goToQuestionScreen(nextStep);
        } 
        
        if (nextStep === this.questionsTotal) {
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
  onSelect(answer, question, buttonEl, answersEl) {
    const key = this.getQuestionKey(question);
    if (typeof this.answers[key] !== 'undefined') {
      this.answers[key] = answer.id;
    }

    const state = buttonEl.getAttribute('data-state');
    if (!state || state !== 'active') {
      const activeButton = answersEl.querySelector('button[data-state="active"]');
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
  checkSelectionError() {
    const stepIndex = this.step - 1;
    const item = this.data[stepIndex];
    const questionKey = this.getQuestionKey(item);
    const answer = this.answers[questionKey];

    if (! answer || answer === '') {
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
  goToQuestionScreen(step) {
    const stepIndex = step - 1;
    const item = this.data[stepIndex];

    if (typeof item !== 'undefined') {

      const activeEl = this.rootEl.querySelector('.quiz__question[data-state="active"]');
      const nextEl = this.rootEl.querySelector(`.quiz__question[data-id="${item.id}"]`);

      this.animateScreen(activeEl, nextEl);
      this.changeDir(step);
    }
  }

  /**
   * Go to question screen
   *
   * @return mixed
   */
  animateScreen(activeEl, nextEl) {
    if (activeEl && nextEl) {
      
      activeEl.style.visibility = 'hidden';
      activeEl.style.opacity = 0;
      activeEl.setAttribute('data-state', 'inactive');

      setTimeout(() => {
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
  changeDir(step) {
    const dirEl = this.rootEl.querySelector('.quiz__dir__bar__value');
    const toWidth = step/this.questionsTotal * 100;
    dirEl.style.width = `${toWidth}%`;

    // Change step label
    this.rootEl.querySelector('.quiz__dir__step')
      .textContent = step;
  }

  /**
   * Get question key
   *
   * @return mixed
   */
  getQuestionKey(item) {
    const key = `question__${item.id}`;
    return key;
  }
}

export default Quiz;
    