<?php include('header.php'); ?>

    <main id="home" tabindex="-1">
        <h1 class="visually-hidden" aria-hidden="true">Site Base</h1>
        <section class="banner" role="banner">
            <div class="swiper-banner swiper-container">
                <div class="swiper-button-prev"></div>
                <div class="swiper-wrapper">
                    <a class="swiper-slide" href="#">
                        <picture>
                            <source media="(max-width: 767px)" data-srcset="imgs/banners/banner-01-m.jpg">
                            <img data-src="imgs/banners/banner-01.jpg" class="img-cover swiper-lazy" alt="Banner 01">
                        </picture>
                        <div class="swiper-lazy-preloader"></div>
                    </a>
                    <a class="swiper-slide" href="#">
                        <picture>
                            <source media="(max-width: 767px)" data-srcset="imgs/banners/banner-02-m.jpg">
                            <img data-src="imgs/banners/banner-02.jpg" class="img-cover swiper-lazy" alt="Banner 02">
                        </picture>
                        <div class="swiper-lazy-preloader"></div>
                    </a>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>

<?php include('footer.php'); ?>