//
// Main JS
//
import Select from './components/Select';

(function() {
  'use strict';

  // Get url filtered 
  const getUrlFiltered = (filterName, value) => {
    let url = `${CASE_STUDY_PERMALINK}?${filterName}=${value}`;

    // Get other filter options
    const selects = document.querySelectorAll('.case-study__filter__item .select');
    selects.forEach((select) => {
      const selectName = select.getAttribute('data-filter');
      const selectValue = select.getAttribute('data-value');
      if (selectName !== filterName) {
        url += `&${selectName}=${selectValue}`;
      }
    });

    return url;
  };

  // Filter options
  new Select({
    changeSelected: false,
    multiple: false,
    onClick: () => {
      const elements = document.querySelectorAll('.case-study__filter .select');

      elements.forEach((element) => {
        element.setAttribute('data-state', 'close');
      });
    },
    onOptionClick: (button, select) => {
      const value = button.getAttribute('data-value');
      const filterName = select.getAttribute('data-filter');
      window.location.href = getUrlFiltered(filterName, value);
    },
    onInitOptions: () => {
      // Remove all active options
      const options = document.querySelectorAll('.case-study__filter .select__options button');
      options.forEach((opt) => {
        opt.removeAttribute('data-state');
      });

      // Set active option
      const currentUrl = new URL(window.location.href);
      currentUrl.searchParams.forEach((value, key) => {
        const filterEl = document.querySelector(`.case-study__filter .select[data-filter="${key}"]`);
        if (filterEl) {
          filterEl.setAttribute('data-value', value);
          const selector = `.select[data-filter="${key}"] .select__options button[data-value="${value}"]`;
          const button = filterEl.querySelector(selector);

          if (button) {
            button.setAttribute('data-state', 'active');
          }
        }
      });
    }
  }).init();

})();
 