<?php
/**
 * About menu view
 */
?>

<section class="sidebar bigger">
    <ul class="hidden-sm hidden-xs">
        <li class="{{ isCurrent('about-us.vision') }} {{ isCurrent('about-us') }}">
            <a href="{{ route('about-us.vision') }}#content-about">Vision &amp; Mission</a>
        </li>
        <li class="{{ isCurrent('about-us.organization') }}">
            <a href="{{ route('about-us.organization') }}#content-about">Organization Structure</a>
        </li>
        <li  class="{{ isCurrent('about-us.shareholder') }}">
            <a href="{{ route('about-us.shareholder') }}#content-about">Shareholder Structure</a>
        </li>
        <li class="{{ isCurrent('about-us.board') }}">
            <a href="{{ route('about-us.board') }}#content-about">Board of Commisioner &amp; Directors</a>
        </li>
        <li class="{{ isCurrent('about-us.id-management') }}">
            <a href="{{ route('about-us.id-management') }}#content-about">Indonesia Management</a>
        </li>
        <li class="{{ isCurrent('about-us.audit') }}">
            <a href="{{ route('about-us.audit') }}#content-about">Audit Comittee</a>
        </li>
        <li class="{{ isCurrent('about-us.coorporate') }}">
            <a href="{{ route('about-us.coorporate') }}#content-about">Corporate Secretary</a>
        </li>
        <li class="{{ isCurrent('about-us.whistle') }}">
            <a href="{{ route('about-us.whistle') }}#content-about">Whistle Blowing System</a>
        </li>
    </ul>
    <div class="hidden-lg hidden-md visible-sm visible-xs">
        <select id="sub-menu" name="sub-menu">
          <option value="#">Navigate to...</option>
          <option value="{{ route('about-us.vision') }}">vision &amp; Mission</option>
          <option value="{{ route('about-us.organization') }}">Organization Structure</option>
          <option value="{{ route('about-us.shareholder') }}">Shareholder Structure</option>
          <option value="{{ route('about-us.board') }}">Board of Commisioner &amp; Directors</option>
          <option value="{{ route('about-us.id-management') }}">Indonesia Management</option>
          <option value="{{ route('about-us.audit') }}">Audit Comittee</option>
          <option value="{{ route('about-us.coorporate') }}">Corporate Secretary</option>
          <option value="{{ route('about-us.whistle') }}">Whistle Blowing System </option>
        </select>
      </div>
</section>
