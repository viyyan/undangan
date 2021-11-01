<?php
/**
 * Quiz result view
 */
?>
<div class="quiz__result modal" data-state="open">
  <div class="modal__overlay"></div>
  <div class="quiz__result__inner modal__main">
    <div class="quiz__result__top">
      <div class="quiz__result__top__inner">
        <div class="quiz__result__top__main">
          <h2>Congratulation</h2>
          <p>You’ve finished the market research check up. Based on your answer, your suitable market research for you is :</p>
          <div class="quiz__result__tag">
            Product Test
          </div>
        </div>
      </div>
    </div>
    <div class="quiz__result__main">
      <div class="quiz__result__form">
        <p>Please fill out this form below before we proceed into your related case studies based on the research.</p>
        <form method="post" action="">
          <div class="quiz__result__form__fields">
            <div class="quiz__result__form__field">
              <div class="quiz__result__form__icon">
                <img src="" alt="" />
              </div>
              <div class="quiz__result__form__input">
                <input type="text" name="name" placeholder="Name *" />
              </div>
            </div>
            <div class="quiz__result__form__field">
              <div class="quiz__result__form__icon">
                <img src="" alt="" />
              </div>
              <div class="quiz__result__form__input">
                <input type="text" name="company_name" placeholder="Company Name *" />
              </div>
            </div>
          </div>
          <div class="quiz__result__form__fields">
            <div class="quiz__result__form__field">
              <div class="quiz__result__form__icon">
                <img src="" alt="" />
              </div>
              <div class="quiz__result__form__input">
                <input type="text" name="email" placeholder="E-mail address *" />
              </div>
            </div>
          </div>
          <div class="quiz__result__actions">
            <div class="quiz__result__action">
              <button class="button button--white button--md" type="button">
                <span class="button__content">
                  <span class="button__label">Restart</span>
                  <span class="button__icon">
                    <i class="icon__arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M1 10.1525C1 15.0389 5.02944 19 10 19C14.9706 19 19 15.0389 19 10.1525C19 5.26622 15 1.30508 10 1.30508C4 1.30508 1 6.22034 1 6.22034M1 6.22034L1 1M1 6.22034H5.6551" stroke="#A81D1D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                  </span>
                </span>
              </button>
            </div>
            <div class="quiz__result__action">
              <button class="button button--white button--md" type="button" disabled="disabled">
                <span class="button__content">
                  <span class="button__label">See related case studies</span>
                  <span class="button__icon">
                    <i class="icon__arrow">
                      <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" x2="20" y1="12" y2="12"></line>
                        <polyline points="14 6 20 12 14 18"></polyline>
                      </svg>
                    </i>
                  </span>
                </span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>