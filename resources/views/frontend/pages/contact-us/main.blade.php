<?php
/**
 * Contact Us
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="p-contact__ornament">
  <img src="{{ frontImages('contact--ornament.png') }}" alt=""/>
</div>
<div class="page-top page-top--fixed">
  <div class="container">
    <div class="page-top__main">
      <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><span class="page-top__breadcrumb_current">Contact Us</span></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="p-contact__main">
  <div class="section section--space-md">
    <div class="section__inner">
      <div class="container container--lg">
          <div class="section__main">
          <div class="cta cta--thumb-left cta--align--middle">
              <div class="cta__inner">
              <div class="cta__main grid gap--2xl">
                  <div class="cta__thumbnail column--50"><img src="{{ frontImages('contact--thumbnail.png') }}" alt=""/></div>
                  <div class="cta__content column--50 cta__content--left">
                  <div class="cta__header">
                      <h2 class="cta__title text--3xl">Let’s get in touch!</h2>
                  </div>
                  <div class="cta__body">
                      <p>The goal of loyalty initiatives is to engage, not pander more products to frequent buyers. We are here to create value and loyalty from your customers.</p>
                  </div>
                  </div>
              </div>
              </div>
          </div>
          </div>
      </div>
    </div>
  </div>
  <div class="p-contact__info">
  <div class="container container--xl">
    <div class="p-contact__info__inner grid">
      <div class="column--50 p-contact__map">
        <div id="contact-map"></div>
      </div>
      <div class="column--50 p-contact__office">
      <div class="p-contact__office__inner">
        <h3 class="text--xl">Our Office</h3>
        <ul>
          <li>
            <i>
              <svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.4181 22.853L15.7887 15.7248C15.6912 15.2983 15.3119 14.9959 14.8744 14.9959H14.2859C15.711 12.8201 16.7345 10.3363 16.7345 7.7342C16.7345 3.46954 13.2649 0 9.0003 0C4.73568 0 1.2661 3.46954 1.2661 7.7342C1.2661 10.3355 2.28895 12.8192 3.71475 14.9959H3.12624C2.68875 14.9959 2.3094 15.2983 2.2119 15.7248L0.582533 22.853C0.448409 23.4398 0.894863 24 1.49687 24H16.5037C17.1056 24 17.5522 23.44 17.4181 22.853ZM9.0003 1.87586C12.2306 1.87586 14.8587 4.50393 14.8587 7.7342C14.8587 11.6633 11.9003 15.6448 9.0003 18.2604C6.09938 15.6439 3.14195 11.6631 3.14195 7.7342C3.14195 4.50393 5.76998 1.87586 9.0003 1.87586ZM2.67336 22.1241L3.87396 16.8717H5.09449C6.76076 18.9103 8.34793 20.1777 8.41761 20.2329C8.75893 20.5035 9.24159 20.5035 9.58294 20.2329C9.65263 20.1777 11.2398 18.9104 12.9061 16.8717H14.1266L15.3272 22.1241H2.67336ZM9.0003 8.90661C8.3528 8.90661 7.82789 8.3817 7.82789 7.7342C7.82789 7.0867 8.3528 6.56179 9.0003 6.56179C9.6478 6.56179 10.1727 7.0867 10.1727 7.7342C10.1727 8.3817 9.6478 8.90661 9.0003 8.90661ZM13.4496 7.7342C13.4496 5.28086 11.4536 3.28491 9.0003 3.28491C6.54696 3.28491 4.551 5.28086 4.551 7.7342C4.551 10.1875 6.54696 12.1835 9.0003 12.1835C11.4536 12.1835 13.4496 10.1875 13.4496 7.7342ZM6.42681 7.7342C6.42681 6.31521 7.58126 5.16076 9.00026 5.16076C10.4192 5.16076 11.5737 6.31521 11.5737 7.7342C11.5737 9.15319 10.4192 10.3076 9.00026 10.3076C7.58126 10.3076 6.42681 9.15319 6.42681 7.7342Z" fill="white"/>
              </svg>
            </i>
            <span>Jl. Mampang Prapatan X, RT.6/RW.1, Tegal Parang, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12790</span>
          </li>
          <li>
            <i>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.20827 15.7919C11.0894 18.673 13.7654 20.2789 15.7566 21.1713C17.4954 21.9506 19.5475 21.3391 21.1472 19.7395L21.5126 19.3728L17.1176 16.5762C16.2823 17.7943 14.7026 18.5089 13.1253 17.844C11.9308 17.3393 10.3498 16.4767 8.93663 15.0635C7.52342 13.6503 6.66207 12.0693 6.15744 10.8748C5.49123 9.29751 6.20467 7.71773 7.42399 6.88247L4.6274 2.48744L4.26073 2.85286C2.66108 4.45252 2.0508 6.50462 2.82888 8.24349C3.7213 10.2347 5.32716 12.9107 8.20827 15.7919ZM14.7411 23.4397C12.4852 22.4292 9.55561 20.6543 6.45077 17.5494C3.34594 14.4458 1.57103 11.5149 0.559288 9.25898C-0.776861 6.27592 0.443696 3.15614 2.50323 1.09534L2.86865 0.728674C3.13183 0.465316 3.45081 0.264441 3.80203 0.140881C4.15325 0.0173211 4.52774 -0.0257667 4.89784 0.0147994C5.26794 0.0553654 5.6242 0.178549 5.94032 0.375254C6.25643 0.571959 6.52433 0.83716 6.72422 1.15127L10.2417 6.68236C10.3349 6.82908 10.3962 6.9937 10.4218 7.16561C10.4474 7.33751 10.4367 7.51287 10.3903 7.68036C10.3439 7.84786 10.2629 8.00376 10.1525 8.13801C10.0422 8.27226 9.90487 8.38187 9.74951 8.45977L8.96273 8.85378C8.42579 9.12225 8.31641 9.59581 8.44692 9.90779C8.86827 10.9059 9.57301 12.1836 10.6941 13.306C11.8165 14.4271 13.0942 15.1319 14.0923 15.5532C14.4043 15.685 14.8778 15.5744 15.1463 15.0374L15.5403 14.2506C15.6181 14.0952 15.7276 13.9577 15.8618 13.8472C15.996 13.7367 16.1519 13.6556 16.3194 13.6091C16.4869 13.5626 16.6623 13.5518 16.8343 13.5773C17.0062 13.6028 17.1709 13.6641 17.3177 13.7572L22.8487 17.2759C23.1628 17.4758 23.428 17.7437 23.6248 18.0598C23.8215 18.376 23.9446 18.7322 23.9852 19.1023C24.0258 19.4724 23.9827 19.8469 23.8591 20.1982C23.7356 20.5494 23.5347 20.8684 23.2713 21.1315L22.9047 21.497C20.8451 23.5578 17.7254 24.7771 14.7411 23.4397Z" fill="white"/>
                  </svg>

            </i>
            <span>(021) 797 1913</span>
          </li>
          <li>
            <i>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.4852 3.5149C12.9434 -4.01096 0.010078 1.35135 0 12.0001V23.0625C0 23.5803 0.419715 24 0.937493 24H11.9999C22.6544 23.9888 28.0078 11.0519 20.4852 3.5149ZM11.9999 22.125H1.87499V12.0001C1.87499 6.41719 6.417 1.87518 11.9999 1.87518C25.4326 2.43153 25.4274 21.5713 11.9999 22.125ZM15.6211 11.976C15.2547 11.6106 14.6614 11.6111 14.2957 11.9773L13.6814 12.5924C13.3882 12.4119 12.9678 12.105 12.461 11.5995C11.9483 11.088 11.6384 10.6593 11.4576 10.361L12.0646 9.75311C12.4273 9.38993 12.4304 8.80264 12.0718 8.43551L8.82307 5.11056C8.64814 4.93154 8.40884 4.82987 8.15853 4.82828H8.15253C7.90438 4.82828 7.66621 4.92671 7.49043 5.10212L5.1503 7.4368C4.98816 7.59852 4.89085 7.81405 4.87674 8.04261C4.63065 12.4526 10.7221 19.1527 15.7341 19.1646C15.8167 19.1646 16.3187 19.0484 16.4784 18.8891L18.8495 16.5235C19.2137 16.1743 19.2136 15.5453 18.8495 15.1961L15.6211 11.976ZM15.442 17.2745C15.1484 17.2462 14.6657 17.1675 14.0496 16.953C13.0768 16.6142 11.5638 15.858 9.88103 14.1794C7.81222 12.043 7.00996 10.3345 6.76364 8.47578L8.14405 7.09856L10.0835 9.0836L9.66438 9.50337C9.42813 9.73999 9.33574 10.0845 9.42199 10.4075C9.47111 10.5916 9.78471 11.5782 11.1369 12.9269C12.488 14.2747 13.4528 14.5829 13.6325 14.631C13.9561 14.7176 14.3014 14.6249 14.5383 14.3878L14.9604 13.9652L16.8599 15.8599L15.442 17.2745Z" fill="white"/>
                  </svg>

            </i>
            <span>0878 8429 0137 (Whatsapp Only)</span>
          </li>
        </ul>
        <div class="p-contact__info__action">
          <a href="https://www.google.com/maps/dir//Jl.+Mampang+Prapatan+X,+RW.1,+Tegal+Parang,+Kec.+Mampang+Prpt.,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta+12790,+Indonesia/@-6.2489365,106.8288992,20.35z/data=!4m9!4m8!1m0!1m5!1m1!1s0x2e69f3d0230145bf:0xde995bcc629a7758!2m2!1d106.8290662!2d-6.2490786!3e0" class="button button--white button--md quiz__result__action__reset" target="_blank">
            <span class="button__content">
              <span class="button__label">Get direction</span>
              <span class="button__icon">
                <i class="icon__arrow">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <polyline points="14 6 20 12 14 18"></polyline>
                  </svg>
                </i>
              </span>
            </span>
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
  </div>
  <div class="chat">
    <div class="chat__inner">
      <div class="grid">
          <div class="column--50">
          <div class="chat__info">
              <div class="chat__info__inner">
              <div class="chat__info__thumb"><img src="{{ frontImages('chat--thumbnail.png') }}" alt=""></div>
              <div class="chat__info__main">
                  <h2 class="text--3xl">So, let’s have a chat!</h2>
                  <p>Your concern is the most <br/>important for us.</p>
              </div>
              </div>
          </div>
          </div>
          <div class="column--50">
          <div class="chat__form">
              <form class="form" method="post" action="" enctype="multipart/form-data">
              <div class="form__field">
                  <div class="form__icon"><img src="{{ frontImages('icon--user--white.svg') }}" alt=""></div>
                  <div class="form__main">
                  <div class="form__control">
                      <input type="text" name="name" placeholder="Name *">
                  </div>
                  </div>
              </div>
              <div class="form__field">
                  <div class="form__icon"><img src="{{ frontImages('icon--email--white.svg') }}" alt=""></div>
                  <div class="form__main">
                  <div class="form__control">
                      <input type="text" name="email" placeholder="E-mail *">
                  </div>
                  </div>
              </div>
              <div class="form__field form__upload">
                  <div class="form__icon"><img src="{{ frontImages('icon--notes--white.svg') }}" alt=""></div>
                  <div class="form__main">
                  <div class="form__label">Already have the brief?</div>
                  <div class="form__upload__main">
                      <div class="form__upload__info">(PDF, PPT or Word)</div>
                      <div class="form__upload__control">
                      <input type="file" name="doc" accept="application/pdf,application/vnd.ms-powerpoint,application/msword">
                      <div class="form__upload__button">
                          <button class="button button--dark button--sm" type="button"><span class="button__content"><span class="button__icon"><i class="icon__arrow">
                                  <svg stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <polyline points="16 12 12 8 8 12"></polyline>
                                  <line x1="12" x2="12" y1="16" y2="8"></line>
                                  </svg></i></span><span class="button__label">Upload here</span></span>
                          </button>
                      </div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="form__field form__field__message">
                  <div class="form__main">
                  <div class="form__control">
                      <textarea name="message" placeholder="What do you wanna say?"></textarea>
                  </div>
                  </div>
              </div>
              <div class="form__submit">
                  <button class="button button--white button--md" type="button"><span class="button__content"><span class="button__label">Submit</span><span class="button__icon"><i class="icon__arrow">
                          <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <line x1="4" x2="20" y1="12" y2="12"></line>
                          <polyline points="14 6 20 12 14 18"></polyline>
                          </svg></i></span></span>
                  </button>
              </div>
              </form>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
