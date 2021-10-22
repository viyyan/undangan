<?php
/**
 * Career Detail view
 */
?>
@extends('frontend.layouts.basic')
@section('content')
@if (isset($career))
<div class="career_detail-head">
    <div class="main-container"> <span class="text--midle-range light-blue">{{ $career->category->name }}</span>
    <h2 class="title--big_title main-blue">{{ $career->title }}</h2>
    </div>
</div>
<div class="career_detail-content">
    <div class="main-container">
    <div class="career_detail-content-wrapper">
        <div class="career_detail-copy block-career">
        <div class="qoute">
            <p class="text--midle-range">
                {{ $career->desc }}
            </p>
        </div>
        @if (isset($career->requirements))
        <div class="requirements">
            <h3 class="title--sub main-blue">Requirements</h3>
            {!! $career->requirements !!}
        </div>
        @endif
        @if (isset($career->responsibilities))
        <div class="responsibilities">
            <h3 class="title--sub main-blue">Responsibilities</h3>
            {!! $career->responsibilities !!}
        </div>
        @endif
        @if (isset($career->linkedin_url))
        <a class="blue-button" href="{{$career->linkedin_url}}" target="_blank">
            Linkedin Job
        </a>
        @endif
        </div>
        <div class="career_detail-form block-career">
        <h4 class="title--main light-blue">Insterested? Apply now!</h4>
        <input class="main-input" type="hidden" name="career_id" value="{{ $career->id }}"/>
        <input class="main-input" type="hidden" name="email_to" value="{{ $career->email_to }}"/>
        <div class="career_detail-form_input">
            <label class="text--medium">First name<sup>*</sup></label>
            <input class="main-input" type="text">
        </div>
        <div class="career_detail-form_input">
            <label class="text--medium">Last name<sup>*</sup></label>
            <input class="main-input" type="text">
        </div>
        <div class="career_detail-form_input">
            <label class="text--medium">E-mail address<sup>*</sup></label>
            <input class="main-input" type="email">
        </div>
        <div class="career_detail-form_input">
            <label>Upload Resume / CV<sup>*</sup></label>
            <form class="dropzone TaisoCv" action="/file-upload" id="dropcv">
            <div class="fallback">
                <input name="file" type="file" multiple>
            </div>
            <div class="dz-default dz-message"><span>Drop files here or&nbsp;</span>
                <button class="dz-button" type="button">Select File(s)</button>
            </div>
            </form>
        </div>
        <div class="career_detail-form_input" style="margin-top:20px">
            <input id="agree" type="checkbox">
            <label class="checker" for="agree"></label><span class="agreement">I agree to the <a href="#modal-terms" rel="modal:open" style="color:#0E5BA1">Terms &amp; Conditions</a></span>
        </div>
        <div class="career_detail-form_button">
            <input class="blue-button" type="submit" value="Submit">
        </div>
        </div>
    </div>
    </div>
    <div class="career-modal modal" id="modal-terms">
    <h3 class="title--main light-blue">Terms &amp; Conditions</h3>
    <h4 class="text--medium">CONSENT LETTER</h4>
    <p>I understand that PT Taisho Pharmaceuticals Indonesia, Tbk. (the “Company”) needs to collect and use my personal data, whether currently available in the Company’s database or provided by me or obtained by the Company in the future (including but not limited to, data provided by me in my application when joining the Company, or relating to my medical record/history, salary, benefits, tax, training, family member) for human resources department, insurance matters, corporate actions, applications and registrations with government and other public agencies, and to disclose my personal data to relevant third parties and group companies (in other countries) where necessary.  I agree to at all-time update my personal data by contacting human resources department. </p>
    <p>I agree that the Company may also collect and use my personal data for assessment and training programmes organised by the Company and/or its group companies (in other countries). </p>
    <p>The Company respects your privacy and assures that your personal data will be kept confidential.</p>
    <p>I hereby give my acknowledgement and consent to the Company to keep, use and disclose my personal data for the purpose as mentioned above and for any other relevant needs in the future. </p><a class="button_simple blue-background" href="#" rel="modal:close">I agree</a>
    </div>
</div>
@endif
@endsection
