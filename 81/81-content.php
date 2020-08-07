<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-81">
    <div class="container">
        <div class="row">
            <div class="col-md-6 success">
                <img src="./images/headerwhite_1.png" alt="">
            </div>
            <div class="col-md-6 warning">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-millipede">
                                <div class="ant">
                                    <h2 class="flea"> Our Journey and Business milestones </h2><br />
                                </div>
                                <div class="louse">
                                    <h6 class="cricket ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo. Praesent mattis elite justo .</h6><br />
                                    <p>Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                        pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet
                                        dolor. Vestibulum ante ipsum primis in faucibus.</p>
                                    <p>Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                        pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet
                                        dolor. Vestibulum ante ipsum primis.</p>
                                </div>
                                <div class="wasp">
                                    <a class="btn-locust"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                        Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-millipede">
                                <div class="ant">
                                    <h2 class="flea">We are Creative Business Agency for Startups </h2><br />
                                </div>
                                <div class="louse">
                                    <h6 class="cricket ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo. Praesent mattis elite justo .</h6><br />
                                    <p>Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                        pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet
                                        dolor. Vestibulum ante ipsum primis in faucibus.</p>
                                    <p>Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                        pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet
                                        dolor. Vestibulum ante ipsum primis.</p>
                                </div>
                                <div class="wasp">
                                    <a class="btn-locust"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                        Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 1500,
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