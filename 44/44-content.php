<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-44">
    <div class="menustyle-content">
        <div class="img-style">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-menustyle">
                        <div class="col-adon-menustyle">
                            <span class="icon-bargraph">
                            </span>
                            <div class="infor-menustyle">
                                <h4 class="title-menustyle">Company</h4>
                                <div class="adon-text-menustyle">
                                    <h6 class="texmenustyle">Praesent mattis commodo <br> augue Aliquam ornare</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-menustyle">
                        <div class="col-adon-menustyle">
                            <span class="icon-map">
                            </span>
                            <div class="infor-menustyle">
                                <h4 class="title-menustyle">Address</h4>
                                <div class="adon-text-menustyle">
                                    <h6 class="texmenustyle">Praesent mattis commodo <br> augue Aliquam ornare</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-menustyle">
                        <div class="col-adon-menustyle">
                            <span class="icon-evelop">
                            </span>
                            <div class="infor-menustyle">
                                <h4 class="title-menustyle">Send Mail</h4>
                                <div class="adon-text-menustyle">
                                    <h6 class="texmenustyle">Praesent mattis commodo <br> augue Aliquam ornare</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>