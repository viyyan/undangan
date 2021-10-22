<?php
/**
 * Header view
 */
?>
<header class="header header--fixed">
    <div class="header__container header__sticky">
        <div class="header__inner">
        <div class="header__main"><a href="/"><img src="{{ frontImage('logo.png') }}" alt="Taisho"></a></div>
        <div class="header__nav">
            <div class="header__nav__main nav nav--horizontal">
            <ul>
                <li class="header__nav__home"><a class="{{ isCurrent('home') }}" href="{{ route('home') }}" title="Home"><span>Home</span></a></li>
                <li class="header__nav__vision"><a class="{{ isCurrent('about-us') }}" href="{{ route('about-us') }}" title="About Us"><span>About Us</span></a>
                    <ul class="dropdown-navbar">
                        <li class="{{ isCurrent('about-us.organization') }} dropdown_item-1">
                            <a href="{{ route('about-us.organization') }}">Organization Structure</a>
                        </li>
                        <li  class="{{ isCurrent('about-us.shareholder') }} dropdown_item-2">
                            <a href="{{ route('about-us.shareholder') }}">Shareholder Structure</a>
                        </li>
                        <li class="{{ isCurrent('about-us.board') }} dropdown_item-3">
                            <a href="{{ route('about-us.board') }}">Board of Commisioner &amp; Directors</a>
                        </li>
                        <li class="{{ isCurrent('about-us.id-management') }} dropdown_item-4">
                            <a href="{{ route('about-us.id-management') }}">Indonesia Management</a>
                        </li>
                        <li class="{{ isCurrent('about-us.audit') }} dropdown_item-5">
                            <a href="{{ route('about-us.audit') }}">Audit Comittee</a>
                        </li>
                        <li class="{{ isCurrent('about-us.coorporate') }} dropdown_item-6">
                            <a href="{{ route('about-us.coorporate') }}">Corporate Secretary</a>
                        </li>
                        <li class="{{ isCurrent('about-us.whistle') }} dropdown_item-7">
                            <a href="{{ route('about-us.whistle') }}">Whistle Blowing System</a>
                        </li>
                    </ul>
                </li>
                <li class="header__nav__product"><a class="{{ isCurrent('products') }}" href="{{ route('products') }}" title="Products"><span>Products</span></a></li>
                <li class="header__nav__article"><a class="{{ isCurrent('articles') }}" href="{{ route('articles') }}" title="News articles"><span>News articles</span></a></li>
                <li class="header__nav__store"><a class="{{ isCurrent('official-store') }}" href="{{ route('official-store') }}" title="Official store"><span>Official store</span></a></li>
                <li class="header__nav__investor"><a class="{{ isCurrent('investors') }}" href="{{ route('investors') }}" title="Investor"><span>Investor </span></a></li>
                <li class="header__nav__career"><a class="{{ isCurrent('careers') }}" href="{{ route('careers') }}" title="Career"><span>Career</span></a></li>
                <li class="header__nav__contact"><a class="{{ is_active('contact-us') }}" href="{{ route('contact-us') }}" title="Contact Us"><span>Contact Us </span></a></li>
            </ul>
            </div>
            <div class="header__nav__mobile">
                <button class="hamburger-menu menu-btn"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div class="header__addon">
            <div class="header__addon_lang">
            <!-- <select class="lang_picker ">
                @if ($support_locals)
                @foreach ($support_locals as $key => $local)
                    @if($current_local == $local['id'])
                    <option class="select_option"
                        value="{{ LaravelLocalization::getLocalizedURL($local['id']) }}"
                        selected
                    >
                        <label class="select_label {{ $key == (count($support_locals) - 1) ? 'last-option' : '' }}" for="lang-english">
                                {{ $local['name'] }}</label>
                    </option>
                    @else
                    <option class="select_option"
                        value="{{ LaravelLocalization::getLocalizedURL($local['id']) }}"
                    >
                        <label class="select_label {{ $key == (count($support_locals) - 1) ? 'last-option' : '' }}" for="lang-english">
                                {{ $local['name'] }}</label>
                    </option>
                    @endif
                @endforeach
                @endif
            </select> -->
            <ul class="select">
                <li>
                    <input class="select_close" id="awesomeness-close" type="radio" name="lang" value="">
                    <span class="select_label select_label-placeholder">English</span>
                </li>
                <li class="select_items">
                    <input class="select_expand" id="lang-opener" type="radio" name="lang">
                    <label class="select_closeLabel" for="awesomeness-close"></label>
                    <ul class="select_options">
                        @if ($support_locals)
                        @foreach ($support_locals as $key => $local)
                            <li class="select_option">
                                <input class="select_input select_lang" type="radio" id="lang-{{ $local['id'] }}" name="lang"
                                value="{{ LaravelLocalization::getLocalizedURL($local['id']) }}"
                                {{ ($current_local === $local['id']) ? "checked" : "" }} >
                                <label class="select_label {{ $key == (count($support_locals) - 1) ? 'last-option' : '' }}" for="lang-{{ $local['id'] }}" >
                                    {{ $local['name'] }}</label>
                                <!-- -->
                            </li>
                        @endforeach
                        @endif
                    </ul>
                    <label class="select_expandLabel" for="lang-opener"></label>
                </li>
            </ul>
            </div>
            <div class="header__addon_search">
            <div class="search">
                <input class="search__checkbox" id="trigger" type="checkbox">
                <label class="search__label-init" for="trigger"></label>
                <label class="search__label-active" for="trigger"></label>
                <div class="search__border"></div>
                <div class="search__close"></div>
            </div>
            </div>
        </div>
        </div>
        <div class="header__search">
            <form method="GET" action="{{ route('search') }}" style="display: contents;">
                <input class="search__input" type="text" name="q" placeholder="Type your search here" value="{{ app('request')->input('q') }}"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type your search here'">
                <input class="search__submit" type="submit" value="Search">
            </form>
        </div>
    </div>
</header>
<nav class="pushy pushy-right">
    <div class="pushy-content">
      <div class="mobile-header_menu">
        <div class="mobile-header_lang">
            <select class="lang-picker">
                @if ($support_locals)
                @foreach ($support_locals as $key => $local)
                    @if($current_local == $local['id'])
                    <option class="select_option"
                        value="{{ LaravelLocalization::getLocalizedURL($local['id']) }}"
                        selected
                    >
                        <label class="select_label {{ $key == (count($support_locals) - 1) ? 'last-option' : '' }}" for="lang-english">
                                {{ $local['name'] }}</label>
                    </option>
                    @else
                    <option class="select_option"
                        value="{{ LaravelLocalization::getLocalizedURL($local['id']) }}"
                    >
                        <label class="select_label {{ $key == (count($support_locals) - 1) ? 'last-option' : '' }}" for="lang-english">
                                {{ $local['name'] }}</label>
                    </option>
                    @endif
                @endforeach
                @endif
            </select>
        </div>
        <div class="mobile-header_search">
          <div class="search">
            <input class="search__checkbox" id="trigger-mobile" type="checkbox">
            <label class="search__label-init" for="trigger-mobile"></label>
            <label class="search__label-active" for="trigger-mobile"></label>
            <div class="search__border"></div>
            <div class="search__close"></div>
          </div>
          <div class="close-mobile pushy-link"><span></span><span></span></div>
        </div>
      </div>
      <ul>
        <!-- Submenu-->
        <li class="pushy-link"><a class="{{ isCurrent('home') }}" href="{{ route('home') }}">Home</a></li>
        <li class="pushy-submenu">
          <button>About Us</button>
          <ul>
            <li class="pushy-link"><a class="{{ isCurrent('about-us') }}" href="{{ route('about-us') }}">Vision &amp; Mission</a></li>
            <li class="pushy-link"><a href="{{ route('about-us.organization') }}">Organization Structure</a></li>
            <li class="pushy-link"><a href="{{ route('about-us.shareholder') }}">Shareholder Structure</a></li>
            <li class="pushy-link"><a href="{{ route('about-us.board') }}">Board of Commisioner &amp; Directors</a></li>
            <li class="pushy-link"><a href="{{ route('about-us.id-management') }}">Indonesia Management</a></li>
            <li class="pushy-link"><a href="{{ route('about-us.audit') }}">Audit Comittee</a></li>
            <li class="pushy-link"><a href="{{ route('about-us.coorporate') }}">Corporate Secretary</a></li>
            <li class="pushy-link"><a href="{{ route('about-us.whistle') }}">Whistle Blowing System </a></li>
          </ul>
        </li>
        <li class="pushy-link"><a class="{{ isCurrent('products') }}" href="{{ route('products') }}">Products</a></li>
        <li class="pushy-link"><a class="{{ isCurrent('articles') }}" href="{{ route('articles') }}">News articles</a></li>
        <li class="pushy-link"><a class="{{ isCurrent('official-store') }}" href="{{ route('official-store') }}">Official store</a></li>
        <li class="pushy-link"><a class="{{ isCurrent('investors') }}" href="{{ route('investors') }}">Investor  </a></li>
        <li class="pushy-link"><a class="{{ isCurrent('careers') }}" href="{{ route('careers') }}">Career</a></li>
        <li class="pushy-link"><a class="{{ is_active('contact-us') }}" href="{{ route('contact-us') }}">Contact Us  </a></li>
      </ul>
    </div>
  </nav>
