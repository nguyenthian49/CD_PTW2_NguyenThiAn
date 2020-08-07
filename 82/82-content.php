<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-82">
    <div class="bat-content">
        <div class="chimpanze">
            <div class="badger">
                <h5 class="bear">What our people and clients says</h5>
            </div>
            <div class="beaver">
                <h2 class="camel">Our Customers and people Says<br />
                    we deliver quality products</h2>
            </div>
            <div class="deer">&nbsp;</div>
        </div>
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="dolphin">
                            <div class="col-mammoth">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="giraffe">
                                            <div class="fox-text">
                                                <p>
                                                    Praesent mattis commodo augue Aliquam ornare hendrerit augue
                                                    Cras tellus In
                                                    pulvinar lectus a est Curabitur eget orci Cras laoreet ligula
                                                    Etiam sit amet
                                                    dolor Vestibulum ante.
                                                </p>
                                            </div>
                                            <div class="guinea">
                                                <img src="./images/74.png" alt="" class="img-responsive">
                                            </div>
                                            <div class="hedgehog">
                                                <h6 class="less-mar-1">Benjamin</h6>
                                                <p>CEO - maxtech</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="giraffe">
                                            <div class="fox-text">
                                                <p>
                                                    Praesent mattis commodo augue Aliquam ornare hendrerit augue
                                                    Cras tellus In
                                                    pulvinar lectus a est Curabitur eget orci Cras laoreet ligula
                                                    Etiam sit amet
                                                    dolor Vestibulum ante.
                                                </p>
                                            </div>
                                            <div class="guinea">
                                                <img src="./images/75.png" alt="" class="img-responsive" />
                                            </div>
                                            <div class="hedgehog">
                                                <h6 class="less-mar-1">Margaret</h6>
                                                <p>Designer - maxtech</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dolphin">
                            <div class="col-mammoth">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="giraffe">
                                            <div class="fox-text">
                                                <p>
                                                    Praesent mattis commodo augue Aliquam ornare hendrerit augue
                                                    Cras tellus In
                                                    pulvinar lectus a est Curabitur eget orci Cras laoreet ligula
                                                    Etiam sit amet
                                                    dolor Vestibulum ante.
                                                </p>
                                            </div>
                                            <div class="guinea">
                                                <img src="./images/74.png" alt="" class="img-responsive" />
                                            </div>
                                            <div class="hedgehog">
                                                <h6 class="less-mar-1">Benjamin</h6>
                                                <p>CEO - maxtech</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="giraffe">
                                            <div class="fox-text">
                                                <p>
                                                    Praesent mattis commodo augue Aliquam ornare hendrerit augue
                                                    Cras tellus In
                                                    pulvinar lectus a est Curabitur eget orci Cras laoreet ligula
                                                    Etiam sit amet
                                                    dolor Vestibulum ante.
                                                </p>
                                            </div>
                                            <div class="guinea">
                                                <img src="./images/75.png" alt="" class="img-responsive" />
                                            </div>
                                            <div class="hedgehog">
                                                <h6 class="less-mar-1">Margaret</h6>
                                                <p>Designer - maxtech</p>
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
</div>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    slidesPerView: 1,
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
</div>