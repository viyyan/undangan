//
// Modal lib
//
class Modal {
  /**
   * Class constructor
   *
   * @return void 
   */
  constructor() {}

  /**
   * Init
   *
   * @return mixed
   */
  init() {
    this.initClose();

    return this;
  }

  /**
   * Init close
   *
   * @return mixed
   */
  initClose() {
    const modals = document.querySelectorAll('.modal');

    modals.forEach((element) => {
      const buttons = element.querySelectorAll('.modal__trigger__close');

      buttons.forEach((button) => {
        button.addEventListener('click', (evt) => {
          evt.preventDefault();

          this.onClose(button, element);
        })
      });
    });
  }

  /**
   * On close
   *
   * @return mixed
   */
  onClose(button, modal) {
    modal.setAttribute('data-state', 'close');
  }
}

export default Modal;
    