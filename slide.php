<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
           
        .swiper-container {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .swiper-slide {
            background-size: cover;
            background-position: center;
        }
        
        .gallery-top {
            height: 80%;
            width: 100%;
        }
        
        .gallery-thumbs {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }
        
        .gallery-thumbs .swiper-slide {
            height: 100%;
            opacity: 0.4;
        }
        
        .gallery-thumbs .swiper-slide-thumb-active {
            opacity: 1;
        }
            }
        </style>
        <link href="./plugin-frameworks/swiper.css" rel="stylesheet">
    </head>
    <body>
        
<div style="margin-top: 120px;height: 500px;z-index: -1; " class=" container-fluid ">
            <!-- Swiper -->
            <div class="swiper-container gallery-top " style="margin-bottom: 20px" >
                <div class="swiper-wrapper ">
                    <div class="swiper-slide " style="background-image: url(./images/1.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/2.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/3.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/4.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/5.jpg) "></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white "></div>
                <div class="swiper-button-prev swiper-button-white "></div>
            </div>
            <div class="swiper-container gallery-thumbs ">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide " style="background-image: url(./images/1.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/2.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/3.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/4.jpg) "></div>
                    <div class="swiper-slide " style="background-image: url(./images/5.jpg) "></div>
                    >
                </div>
            </div>
    
 <!-- Swiper JS -->
 <script src="./plugin-frameworks/swiper.js "></script>

<!-- Initialize Swiper -->
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,

    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
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
</div>

    </body>
</html>