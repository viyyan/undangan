//
// Select lib
//
class Select {
  /**
   * Class constructor
   *
   * @return void 
   */
  constructor(options = {}) {
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
  init() {
    this.initSelected();
    this.initOptions();

    return this;
  }

  /**
   * Init selected
   *
   * @return mixed
   */
  initSelected() {
    // Selected click
    this.elements.forEach((element) => {
      element
        .querySelector('button')
        .addEventListener('click', (evt) => {
          evt.stopPropagation();

          if (this.onClick) {
            this.onClick(element);
          }

          const state = element.getAttribute('data-state');
          const newState = state === 'open' ? 'close' : 'open';
          element.setAttribute('data-state', newState);

          if (this.onChangeState) {
            this.onChangeState(element, newState);
          }
        });
    });

    // Remove options
    document.querySelector('body').addEventListener('click', () => {
      this.elements.forEach((element) => {
        element.setAttribute('data-state', 'close');
      });
    });
    
    
  }

  /**
   * Init options
   *
   * @return mixed
   */
   initOptions() {
     /**
      * To make flexibility custom init options not call per element
      */
    if (this.initOptions) {
      this.onInitOptions();
    }
    
    this.elements.forEach((element) => {
      // Selected first option
      if (!this.onInitOptions) {
        const firstOpt = element.querySelector('.select__options li:first-child button');
        firstOpt.setAttribute('data-state', 'active');
        element.setAttribute('data-value', firstOpt.getAttribute('data-value'));
      }

      // Click option
      const options = element.querySelectorAll('.select__options button');
      options.forEach((button) => {
        button.addEventListener('click', (evt) => {
          evt.preventDefault();
          if (!this.multiple) {
            // Remove all active
            options.forEach((btn) => {
              btn.removeAttribute('data-state');
            });
            // Active current
            button.setAttribute('data-state', 'active');
          } else {
            const state = button.getAttribute('data-state');
            if (state) {
              button.removeAttribute('data-state');
            } else {
              button.setAttribute('data-state', 'active');
            }
          }

          // Callback
          if (this.onOptionClick) {
            this.onOptionClick(button, element, evt);
          }
        });
      });
    });
  }
}

export default Select;
  