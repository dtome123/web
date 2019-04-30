<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    
    
    </style>
    <link href="./plugin-frameworks/swiper.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slide.css">
</head>

<body>

    <div style="height: 500px;margin-top:80px " id="slide" class=" container ">
        <!-- Swiper -->
        <div class="swiper-container gallery-top gallery-top1 " style="margin-bottom: 20px">
            <div class="swiper-wrapper ">
                <div class="swiper-slide " style="background-image: url(./images/1.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/2.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/3.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/4.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/5.jpg) "></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white swiper-button-next1 "></div>
            <div class="swiper-button-prev swiper-button-white swiper-button-prev2"></div>
        </div>
        <div class="swiper-container gallery-thumbs gallery-thumbs1 " style="margin-bottom:0px">
            <div class="swiper-wrapper ">
                <div class="swiper-slide " style="background-image: url(./images/1.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/2.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/3.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/4.jpg) "></div>
                <div class="swiper-slide " style="background-image: url(./images/5.jpg) "></div>
                >
            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="./plugin-frameworks/swiper.js "></script>

    <!-- Initialize Swiper -->
    <script>
    var galleryThumbs = new Swiper('.gallery-thumbs1', {
        spaceBetween: 10,
        slidesPerView: 4,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,

    });
    var galleryTop = new Swiper('.gallery-top1', {
        spaceBetween: 10,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev2',
        },
        thumbs: {
            swiper: galleryThumbs,
        },

        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
    </script>

</body>

</html>