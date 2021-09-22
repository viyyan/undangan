//
// Select lib
//
class Select {
  /**
   * Class constructor
   *
   * @return void 
   */
  constructor() {
    this.elements = document.querySelectorAll('.select');
  }

  /**
   * Init
   *
   * @return mixed
   */
  init() {
    this.elements.forEach((element) => {
      element
        .querySelector('button')
        .addEventListener('click', () => {
          const state = element.getAttribute('data-state');
          const newState = '';
          element.setAttribute('data-state', !state);
        });
    });
    return this;
  }
}

export default Select;
  