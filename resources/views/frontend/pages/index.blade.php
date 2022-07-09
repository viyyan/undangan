@extends('frontend.layouts.invitation')
@section('content')
<div class="main">
        <section class="header-cover" id="home">
            <div class="title">
                <h1>The Weeding</h1>
                <p>Bogor, 24 Juli 2022 </p>
            </div>
            <div class="name">
                <h1>Fian</h1>
                <h1>&</h1>
                <h1>Tyas</h1>
            </div>
            <div class="scroll">
                <a href="#akad"><img src="{{ frontImages('scroll.svg') }}" alt="scroll"></a>
            </div>
        </section>

        <section class="akad" id="akad">
            <div class="akad-info">
                <h1 class="color-brown ls-1px fs-36 fw-400">Akad Nikah</h1>
                <p>Minggu, 24 JULI 2022</p>
                <p>08:30 WIB</p>
                <p>Lembur Kuring, Parung, Bogor</p>
                <div class="gmaps">
                    <img src="{{ frontImages('map.svg') }}" alt="map">
                    <a class="color-light-brown" href="#"> Google Map</a>
                </div>
            </div>
            <div class="akad-konfirmasi">
                <h2 class="color-brown ls-1px fs-36 fw-400">Konfirmasi</h2>
                <div class="form-konfirmasi">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="alamat" rows="10" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kehadiran" id="hadir" value="yes"
                                checked>
                            <span class="checkmark"></span>
                            <label class="form-check-label" for="hadir">
                                ya, saya akan hadir
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kehadiran" id="tidakHadir" value="no">
                            <span class="checkmark"></span>
                            <label class="form-check-label" for="tidakHadir">
                                maaf, saya tidak bisa
                            </label>
                        </div>
                        <div class="form-group row-center">
                            <p>Jumlah Tamu :</p>
                            <input type="number" id="jumlahTamu" class="form-control tamu" name="name">
                        </div>
                        <div class="submit-content">
                            <button type="submit" class="btn btn-primary mb-2">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="gallery" class="gallery">
            <h2 class="fs-36 ls-1px color-green fw-400">Gallery</h2>
            <div class="gallery-carousal">
                <div class="your-class">
                    <div class="image-crsl">
                        <img src="{{ frontImages('gallery/g1.png') }}">
                    </div>
                    <div class="image-crsl">
                        <img src="{{ frontImages('gallery/g2.png') }}">
                    </div>
                    <div class="image-crsl">
                        <img src="{{ frontImages('gallery/g3.png') }}">
                    </div>
                    <div class="image-crsl">
                        <img src="{{ frontImages('gallery/g1.png') }}">
                    </div>
                    <div class="image-crsl">
                        <img src="{{ frontImages('gallery/g2.png') }}">
                    </div>
                    <div class="image-crsl">
                        <img src="{{ frontImages('gallery/g3.png') }}">
                    </div>
                </div>
                <img class="prev-bg" src="{{ frontImages('prev-bg.svg') }}" alt="pbg">
                <img class="next-bg" src="{{ frontImages('next-bg.svg') }}" alt="nbg">
                <a href="#" class="prev"><img src="{{ frontImages('l-arrow.svg') }}" alt="p"></a>
                <a href="#" class="next"><img src="{{ frontImages('r-arrow.svg') }}" alt="n"></a>
            </div>
            <div class="gallery-caption text-center fs-12">
                <p>Terimakasih telah menjadi bagian <br> di hari bahagia kami</p>
                <p class="color-brown">Fian & Tyas</p>
            </div>
        </section>

        <section class="footer">
            <div class="row">
                <div class="image-logo">
                    <img src="{{ frontImages('logo.svg') }}" alt="logo">
                </div>
                <div class="footer-group">
                    <div class="footer-link">
                        <img src="{{ frontImages('email.svg') }}" alt="#">
                        <a href="#">invitoo (undangan digital)</a>
                    </div>
                    <div class="footer-link">
                        <img src="{{ frontImages('camera.svg') }}" alt="#">
                        <a href="#">@xo.photoworks</a>
                    </div>
                </div>
            </div>
        </section>

        <div id="image-viewer">
            <div class="full-center">
                <div class="group-img">
                    <img class="modal-content" id="full-image">
                    <span class="close"><img style="border-radius:0px;" src="{{ frontImages('close.svg') }}"
                            alt="close"></span>
                    <a class="share" href="#">
                        <img style="border-radius:0px;" src="{{ frontImages('share.svg') }}" alt="share">
                        <p>Bagikan</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
