@extends('frontend.layouts.invitation')
@section('content')
<div class="main">
        <!-- header -->
        @include('frontend.includes.header')

        <section class="akad" id="akad">
            <div class="akad-konfirmasi">
                <h2 class="color-brown ls-1px fs-36 fw-400">Akad Nikah</h2>
                <p>Minggu, 24 Juli 2022 </p>
                <p>08:30 WIB </p>
                <p>Bogor</p>
                <p class="color-light-brown center">
                    <br>
                    Tanpa mengurangi rasa hormat, kami memohon maaf sebesar-besarnya karena belum dapat mengundang Bapak/Ibu/Saudara/i
                    untuk menghadiri acara pernikahan kami secara langsung.<p>
            </div>
        </section>

        <!-- gallery -->
        @include('frontend.includes.gallery')

        <!-- footer -->
        @include('frontend.includes.footer')


        <!-- gallery details -->
        @include('frontend.includes.gallery-details')
    </div>
@endsection
