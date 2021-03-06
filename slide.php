

    <div style="height: 500px;margin-top:80px;width:80% " id="slide" class=" container ">
        <!-- Swiper -->
        <div class="swiper-container gallery-top gallery-top1 " style="margin-bottom: 20px">
            <div class="swiper-wrapper ">
                <div class="swiper-slide " > <img src="./images/1.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/2.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/3.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/4.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/5.jpg" alt="" style="max-height:100%"></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white swiper-button-next1 "></div>
            <div class="swiper-button-prev swiper-button-white swiper-button-prev2"></div>
        </div>
        <div class="swiper-container gallery-thumbs gallery-thumbs1 " style="margin-bottom:0px">
            <div class="swiper-wrapper ">
                <div class="swiper-slide " > <img src="./images/1.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/2.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/3.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/4.jpg" alt="" style="max-height:100%"></div>
                <div class="swiper-slide " > <img src="./images/5.jpg" alt="" style="max-height:100%"></div>
                
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
