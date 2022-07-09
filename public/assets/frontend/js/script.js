$(document).ready(function () {
    $('.your-class').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        autoplay: true,
        autoplaySpeed: 2000,
    });

let imgGallery = document.querySelectorAll(".your-class .image-crsl img");
let imgViewer = document.querySelector("#image-viewer");
let imgViewerClose = document.querySelector("#image-viewer .close");
let imgValue = document.querySelector("#image-viewer img");

for (let i = 0; i < imgGallery.length; i++) {
    imgGallery[i].addEventListener("click", (e) => {
        imgValue.src = imgGallery[i].src;
        imgViewer.style.display = "block";
    });
}

imgViewerClose.addEventListener("click", () => {
    imgViewer.style.display = "none";
});

document.querySelector(".share").addEventListener("click", (e) => {
    e.preventDefault();
    console.log("share");
});


let targetPos = document.querySelector(".scroll a");
let galleryPos = document.querySelector("#gallery");

window.addEventListener("scroll", function () {
    let height = $(window).scrollTop();


    if (height > targetPos.offsetTop) {
        targetPos.style.position = "fixed";
        targetPos.style.bottom = "20px";
        targetPos.setAttribute("href", "#gallery");
        targetPos.style.transform = "rotate(0deg)";
    }

    if (height < targetPos.offsetTop / 2) {
        targetPos.style.position = "relative";
        targetPos.setAttribute("href", "#akad");
        targetPos.style.transform = "rotate(0deg)";
    }

    if (targetPos.offsetTop + height > galleryPos.offsetTop + (galleryPos.offsetHeight / 1.1)) {
        targetPos.style.transform = "rotate(180deg)";
        targetPos.setAttribute("href", "#akad");
    }

});
});


