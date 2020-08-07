<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-75">
    <div class="container">
        <div class="other-careers">
            <h4 class="caress-title">Visual Designer</h4>
            <div class="page-careers">
                <ul class="tab-carees">
                    <li class="clearfix-carees">
                        <span class="carees-page"> Requirements </span>
                    </li>
                    <li class="clearfix-carees">
                        <span class="carees-page1"> Desired Skills </span>
                    </li>
                    <li class="clearfix-carees">
                        <span class="carees-page2"> Required </span>
                    </li>
                </ul>
                <div class="careers-offcanvas">
                    <h5 class="careers-list">Requirements</h5>
                    <p class="list-cmt">Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla
                        nulla, sit amet
                        consequat eros. <br> Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac
                        bibendum
                        et, dictum id ipsum. Quisque <br>sit amet accumsan tortor It has survived not only five centuries,
                        but
                        also the leap into electronic typesetting, remaining.</p><br />
                    <div class="listicon-careers">
                        <div class="icon-dank">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                        <div class="careers-text">
                            Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.
                        </div>

                    </div>
                    <div class="listicon-careers">
                        <div class="icon-dank">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                        <div class="careers-text">
                            Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.
                        </div>

                    </div>
                    <div class="listicon-careers">
                        <div class="icon-dank">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                        <div class="careers-text">
                            Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>