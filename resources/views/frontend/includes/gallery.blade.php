<section id="gallery" class="gallery">
    <h2 class="fs-36 ls-1px color-green fw-400">Gallery</h2>
    <div class="gallery-carousal">
        <div class="your-class">
            @foreach (getPhotos(10) as $photo)
            <div class="image-crsl">
                <img src="{{ $photo }}">
            </div>
            @endforeach
        </div>
        <img class="prev-bg" src="{{ frontImages('prev-bg.svg') }}" alt="pbg">
        <img class="next-bg" src="{{ frontImages('next-bg.svg') }}" alt="nbg">
        <a href="#" class="prev"><img src="{{ frontImages('l-arrow.svg') }}" alt="p"></a>
        <a href="#" class="next"><img src="{{ frontImages('r-arrow.svg') }}" alt="n"></a>
    </div>
    <div class="gallery-caption text-center fs-12">
        <p>Semoga doa restu dan cinta yang Bapak/Ibu/Saudara/i sekalian kirimkan,
            dapat menjadi keberkahan dan kekuatan bagi kami dalam mengarungi kehidupan baru.</p>
        <p >Terima kasih,</p>
        <p class="color-brown">Fian & Tyas</p>
    </div>
</section>
