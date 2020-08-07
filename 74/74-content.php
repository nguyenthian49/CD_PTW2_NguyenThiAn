<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-74">
    <div class="container">
        <div class="footer-modern">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-headermodern">
                        <div class="footer-block">
                            <h5 class="footer-title">Get Awesome Features</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-left">
                                <h2 class="footer-sec">what we do for <br /> Successful Business</h2>
                                <div class="footer-te">&nbsp;</div>
                            </div>
                            <p class="footer-p">Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus
                                In
                                pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam.</p>
                        </div>
                        <div class="footer-button">
                            <div class="footer-addon">
                                <a href="#" class="sppb-btn"><i class="fa fa-play-circle-o" aria-hidden="true">
                                        Read more</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media-footer">
                                <div class="footer-img">
                                    <img alt="#" src="./images/208.png" class="img-fluid" width="100%" />
                                </div>
                                <div class="footer-dolpin">
                                    <h5 class="dolpin-title"> Who We are & what We do</h5>
                                    <div class="title-media">
                                        <p class="title-text">Praesent mattis commodo augue Aliquam ornare hendrerit
                                            augue Cras
                                            tellus In pulvinar lectus a est</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media-footer">
                                <div class="footer-img">
                                    <img alt="#" src="./images/209.png" class="img-fluid"  width="100%" />
                                </div>
                                <div class="footer-dolpin">
                                    <h5 class="dolpin-title"> Who We are & what We do</h5>
                                    <div class="title-media">
                                        <p class="title-text">Praesent mattis commodo augue Aliquam ornare hendrerit
                                            augue Cras
                                            tellus In pulvinar lectus a est</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>