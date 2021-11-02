//
// Form Contact
//
import _A from 'lodash/array';
import Validator from '../../libs/Form/Validator';
import { submitQuizUser } from './services/general';
// import { showLoader, hideLoader } from './helpers/loader';
// import { showModal, showApiError } from './helpers/modal';

class QuizResultSubmit extends Validator {
  /**
   * Constructor
   *
   * @param object settings
   * @return void
   */
    constructor(settings = {})
    {
      super('.quiz__result__form', { ignore: "", ...settings });
      this.logo = null;
    }

    /**
     * Get rules
     *
     * @return object
     */
    getRules()
    {
      return {
        name: {
          required: true
        },
        company_name: {
          required: true
        },
        email: {
          email: true,
          required: true,
        }
      };
    }

    /**
     * After setup
     *
     * @return object
     */
    afterSetup()
    {
    }

    /**
     * Get messages
     *
     * @return object
     */
    getMessages()
    {
      return {
        name: 'You must enter your name',
        company_name: 'You must enter the name of your company',
        email: {
          email: 'You must enter your email addreess',
          required: 'Your email address is wrong, eg: name@site.com.'
        }
      };
    }

    /**
     * Handling submit form
     *
     * @param object form
     * @return void
     */
    submit(form)
    {
      const loader = document.querySelector('.loader__page');
      loader.setAttribute('data-state', 'open');

      let name = $('input[name="name"]').val();
      let companyName = $('input[name="company_name"]').val();
      let email = $('input[name="email"]').val();

      let formData = new FormData();
      formData.append('name', name);
      formData.append('company_name', companyName);
      formData.append('email', email);

      // Call API
      submitQuiz(formData)
        .then(response => {
          form.reset();
        })
        .catch(error => {
          // showApiError(error, ERROR_SEND_MESSAGE);
        })
        .finally(() => {
          loader.setAttribute('data-state', 'close');
        });

      return false;
    }

    /**
     * Handling error placemenet
     *
     * @param object error
     * @param object element
     * @return void
     */
    errorPlacement( error, element )
    {
      const field = $(element).parents('._form--input');
      field.append(error);
    }

    /**
     * Handling highlighting
     *
     * @param object element
     * @param string errorClass
     * @param string validClass
     * @return void
     */
    highlight( element, errorClass, validClass )
    {
      $(element)
        .parents('.quiz__result__form__field')
        .addClass('_invalid');
    }

    /**
     * Handling unhighlighting
     *
     * @param object element
     * @param string errorClass
     * @param string validClass
     * @return void
     */
    unhighlight( element, errorClass, validClass )
    {
      const field = $(element).parents('._form--input');
      field.removeClass('input--invalid');
      $('.input--error--msg', field).remove();
    }

    /**
     * Error process
     *
     * @param response error
     * @param object form
     * @return void
     */
    error(error, form ){}
}
export default Contact;
