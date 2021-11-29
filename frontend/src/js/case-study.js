//
// Case study JS
//
import Select from './src/components/Select';

(function() {
  'use strict';

  // Get url filtered
  const getUrlFiltered = (filterName, value) => {
    const currentUrl = new URL(window.location.href);
    if (value.length === 0) {
        currentUrl.searchParams.delete(filterName);
        return currentUrl.toString();
    }
    var exist = currentUrl.searchParams.get(filterName);
    if (exist != null) {
        var existArr = exist.split(",");
        var idx = existArr.indexOf(value);
        console.log("idx "+idx);
        currentUrl.searchParams.delete(filterName);
        if (idx > -1) {
            existArr.splice(idx, 1);
            currentUrl.searchParams.append(filterName, existArr.join(','));
        } else {
            currentUrl.searchParams.append(filterName, `${exist},${value}`);
        }
    } else {
        currentUrl.searchParams.delete(filterName);
        currentUrl.searchParams.append(filterName, value);
    }
    return currentUrl.toString();
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
      console.log(getUrlFiltered(filterName, value));
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
