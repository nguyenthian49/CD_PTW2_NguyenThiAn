<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-83">
    <div class="frog-content">
        <div class="toad-banner">
            <div class="container">
                <div class="spider">
                    <div class="dragon">
                        <h5 class="snail"> Our People Testimonials </h5>
                        <h2 class="albatross">Our People Says about<br />
                            Best Quality Services </h2>
                    </div>
                    <div class="cat">
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hedgehog">
                                <div class="col-antelope">
                                    <div class="carp">
                                        <img src="./images/3.png" alt="" class="img-hyena" />
                                        <div class="parrot">
                                            <div class="finch ">
                                                <p class="falcon">Elit odio erat vel eget consectetuer
                                                    adipiscing
                                                    elit
                                                    Suspendisse et justo Praesent mattis commodo.</p>
                                                <h5 class="cuckoo">Margaret</h5>
                                                <h6 class="pigeon ">Devoloper</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hedgehog">
                                <div class="col-antelope">
                                    <div class="carp">
                                        <img src="./images/2.png" alt="" class="img-hyena" />
                                        <div class="parrot">
                                            <div class="finch ">
                                                <p class="falcon">Elit odio erat vel eget consectetuer
                                                    adipiscing
                                                    elit
                                                    Suspendisse et justo Praesent mattis commodo.</p>
                                                <h5 class="cuckoo">Margaret</h5>
                                                <h6 class="pigeon ">Devoloper</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hedgehog">
                                <div class="col-antelope">
                                    <div class="carp">
                                        <img src="./images/1.png" alt="" class="img-hyena" />
                                        <div class="parrot">
                                            <div class="finch ">
                                                <p class="falcon">Elit odio erat vel eget consectetuer
                                                    adipiscing
                                                    elit
                                                    Suspendisse et justo Praesent mattis commodo.</p>
                                                <h5 class="cuckoo">Margaret</h5>
                                                <h6 class="pigeon ">Devoloper</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    

    </div>
</div>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    loop: true,
    autoplay: {
        delay: 3000,
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
});
</script>