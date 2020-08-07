<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-41">
    <div class="banner-content">
        <div class="img-banner">
            <div class="container">
                <div class="button-video">
                    <span>
                        <a class="select_video" href="#"> <img class="btn_video" src='./images/btn_video.png' /></a>
                    </span>
                </div>
                <div class="title_first">
                    <h2>Add your own Youtube Videos <br />
                        <span class="second-title">for Successful Business</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="back-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-header">
                        <div class="col-adon-header">
                            <img src="./images/header_1.png" alt="" class="addon-img-header" />
                            <div class="adon-infor-header">
                                <h4 class="adon-title-header">Wireframes</h4>
                                <div class="adon-text-header">
                                    <p class="textitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo.</p>
                                    <a href="#" class="btn-button"><i class="fa fa-play-circle-o" aria-hidden="true">
                                            Read more</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-header">
                        <div class="col-adon-header">
                            <img src="./images/header_2.png" alt="" class="addon-img-header" />
                            <div class="adon-infor-header">
                                <h4 class="adon-title-header">Design Mockups</h4>
                                <div class="adon-text-header">
                                    <p class="textitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo.</p>
                                    <a href="#" class="btn-button"><i class="fa fa-play-circle-o" aria-hidden="true">
                                            Read more</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-header">
                        <div class="col-adon-header">
                            <img src="./images/header_3.png" alt="" class="addon-img-header" />
                            <div class="adon-infor-header">
                                <h4 class="adon-title-header">Development</h4>
                                <div class="adon-text-header">
                                    <p class="textitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo.</p>
                                    <a href="#" class="btn-button"><i class="fa fa-play-circle-o" aria-hidden="true">
                                            Read more</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>