<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-79">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container-fluid bg-headermodern-src1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-bg-headermodern-title text-center">
                                    <p class="p-title-content-headermodern">
                                        Beautifully Crafted Layouts
                                    </p>
                                    <p class="p-title-headermodern-nav">
                                        Excellent Design <br /> Styles and Concepts
                                    </p>
                                    <p class="button-title-headermodern">
                                        Get Started now!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid bg-headermodern-src2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-bg-headermodern-title text-center">
                                    <p class="p-title-content-headermodern">
                                        Awesome Shop Pages and more
                                    </p>
                                    <p class="p-title-headermodern-nav">
                                        Get Unlimited Shop <br /> Design Sections
                                    </p>
                                    <p class="button-title-headermodern">
                                        Get Started now!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
    </script>
</div>