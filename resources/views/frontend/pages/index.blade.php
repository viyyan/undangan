@extends('frontend.layouts.invitation')
@section('content')
<div class="main">
        <!-- header -->
        @include('frontend.includes.header')

        <section class="akad" id="akad">
            <div class="akad-info">
                <h2 class="color-brown ls-1px fs-36 fw-400">Akad Nikah</h2>
                <p>Minggu, 24 JULI 2022 </p>
                <p>08:30 WIB </p>
                @if ($guest->type == 1)
                <p>Lembur Kuring, Parung, Bogor</p>
                <div class="gmaps">
                    <img src="{{ frontImages('map.svg') }}" alt="map">
                    <a class="color-light-brown" href="https://g.page/lemburkuringprg?share" target="_blank"> Google Map</a>
                </div>
                @else
                <p>Bogor</p>
                @endif
            <div class="akad-konfirmasi">
                @if ($guest->type < 3)
                    @if ($guest->type == 1)
                    <h2 class="color-brown ls-1px fs-36 fw-400">Konfirmasi</h2>
                    @else
                    <h2 class="color-brown ls-1px fs-36 fw-400">Kirim Souvenir</h2>
                    @endif
                    <div class="form-konfirmasi">
                        <form action="{{ route('guest-submit') }}" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="id" value="{{ $guest->id }}" hidden>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $guest->name }}" readonly>
                            </div>
                            @if ($guest->type == 1)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="confirmed" id="hadir" value="1"
                                    {{ $guest->confirmed ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                                <label class="form-check-label" for="hadir">
                                    ya, saya akan hadir
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="confirmed" id="tidakHadir" value="0"
                                {{ !$guest->confirmed ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                                <label class="form-check-label" for="tidakHadir">
                                    maaf, saya tidak bisa
                                </label>
                            </div>
                            <div class="form-group row-center">
                                <p>Jumlah Tamu :</p>
                                <input type="number" id="jumlahTamu" class="form-control tamu" name="total_guests" value="{{ $guest->total_guests }}">
                            </div>
                            @else
                            <div class="form-group">
                                <textarea class="form-control" name="address" rows="10" placeholder="Alamat">{{ $guest->address }}</textarea>
                            </div>
                            @endif
                            <div class="submit-content">
                                <button type="submit" class="btn btn-primary mb-2">Kirim</button>
                            </div>
                        </form>
                    </div>
                @endif
                @if ($guest->type > 1)
                    <p class="color-light-brown center"> <br>
                        Tanpa mengurangi rasa hormat, kami memohon maaf sebesar-besarnya karena belum dapat mengundang Bapak/Ibu/Saudara/i
                        untuk menghadiri acara pernikahan kami secara langsung.
                    <p>
                @endif
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
