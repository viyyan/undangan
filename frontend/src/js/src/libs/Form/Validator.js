//
// Validator library
//
class FormValidator {
  /**
   * Class constructor
   *
   * @return void 
   */
  constructor(formId, options = {}) {
    this.rules = null;
    this.formId = formId;
    this.form = document.querySelector(formId);
    this.options = options;
    this.errors = {};
    this.values = {};
    this.errorsCount = 0;
  }

  /**
   * Init
   *
   * @return mixed
   */
  init() {
    this.setOptions();
    this.setupFields();
    this.setupSubmit();
    return this;
  }

  /**
   * Setup fields
   *
   * @return mixed
   */
  setupFields() {
    if (this.rules) {
      for (let name in this.rules) {
        if (this.rules.hasOwnProperty(name)) {
          const data = this.rules[name];
          this.setupInput(name, data);
          this.errors[name] = false;
          this.values[name] = null;
        }
      }
    }
  }

  /**
   * Setup input
   *
   * @return mixed
   */
  setupInput(name, data) {
    const input = this.form.querySelector(`[name="${name}"]`);

    if (input) {
      const field = input.closest(this.fieldId);
      input.addEventListener('keyup', (evt) => {
        if (field.classList.contains('field__is-error')) {
          this.checkInputError(input, field, name, data, evt.target.value);
        }
      });
  
      input.addEventListener('blur', (evt) => {
        this.checkInputError(input, field, name, data, evt.target.value);
      });
    }
  }

  /**
   * Setup submit
   *
   * @return mixed
   */
  setupSubmit() {
    const btnSubmit = this.form.querySelector('button[type="submit"]');

    btnSubmit.addEventListener('click', (evt) => {
      evt.preventDefault();

      this.checkErrors();
      if (!this.hasErrors()) {
        this.onSubmit(this.values);
      }
    });
  }

  /**
   * Check errors
   *
   * @return mixed
   */
  checkErrors() {
    if (this.rules) {
      for (let name in this.rules) {
        if (this.rules.hasOwnProperty(name)) {
          const input = this.form.querySelector(`[name="${name}"]`);
          const field = input.closest(this.fieldId);
      
          if (input) {
            this.checkInputError(input, field, name, this.rules[name], input.value);
          }
        }
      }
    }
  }

  /**
   * Is has errors
   *
   * @return mixed
   */
   hasErrors() {
    let isError = false;
    for (let name in this.errors) {
      if (this.errors.hasOwnProperty(name)) {
        isError = this.errors[name];
      }
    }
    return isError;
  }

  /**
   * Check input error
   *
   * @return mixed
   */
  checkInputError(input, field, name, data, value) {
    let isError = false;
    let errorMsg = '';
    for (let i = 0; i < data.length; i += 1) {
      if (!isError && typeof data[i]['type'] !== 'undefined') {
        if (data[i].type === 'required') {
          isError = this.checkRequiredError(value);
          if (isError) {
            errorMsg = data[i]['message'] || 'Input error';
          }
        } else if (data[i].type === 'email') {
          isError = this.checkEmailError(value);
          if (isError) {
            errorMsg = data[i]['message'] || 'Input error';
          }
        }
      }
    }

    const errorEl = field.querySelector('.field__error');
    if (errorEl) {
      errorEl.remove();
    }
    if (isError) {
      field.classList.add('field__is-error');
      // Add message
      const newErrorEl = document.createElement('DIV');
      const errorTxt = document.createTextNode(errorMsg);
      newErrorEl.classList.add('field__error');
      newErrorEl.appendChild(errorTxt);
      field.appendChild(newErrorEl);
      this.errors[name] = true;
      this.values[name] = null;

    } else {
      field.classList.remove('field__is-error');
      this.errors[name] = false;
      this.values[name] = value;
    }
  }

  /**
   * Check required
   *
   * @return mixed
   */
  checkRequiredError(value) {
    if (value === '') {
      return true;
    }
    return false;
  }

  /**
   * Check required
   *
   * @return mixed
   */
  checkEmailError(value) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return !re.test(value);
  }

  /**
   * Set options
   *
   * @return mixed
   */
  setOptions() {
    if (this.options) {
      // Field ID
      let fieldId = 'form__field';
      if (typeof this.options['fieldId'] !== 'undefined') {
        fieldId = this.options['fieldId'];
      }
      this.fieldId = fieldId;

      // Rules
      let rules = {};
      if (typeof this.options['rules'] !== 'undefined') {
        rules = this.options['rules'];
      }
      this.rules = rules;

      // onSubmit
      let onSubmit = () => {};
      if (typeof this.options['onSubmit'] !== 'undefined') {
        onSubmit = this.options['onSubmit'];
      }
      this.onSubmit = onSubmit;
    }
  }
}
  
  export default FormValidator;
      