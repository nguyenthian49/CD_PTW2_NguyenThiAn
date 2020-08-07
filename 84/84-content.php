<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-84">
    <div class="container">
        <div class="row">
            <div class="collumn-addon">
                <h3 class="title">faq </h3>
                <h3 class="title-one">Q. Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                    commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur
                    eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel,
                    bibendum in, nibh. Donec elit lectus, pharetra quis, vulputate in
                </p>
            </div>
            <div class="collumn-addon">
                <h3 class="title-one">Q. Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                    commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur
                    eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel,
                    bibendum in, nibh. Donec elit lectus, pharetra quis, vulputate in
                </p>
            </div>
            <div class="collumn-addon">
                <h3 class="title-one">Q. Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                    commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur
                    eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel,
                    bibendum in, nibh. Donec elit lectus, pharetra quis, vulputate in
                </p>
            </div>
            <div class="collumn-addon">
                <h3 class="title-one">Q. Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                    commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur
                    eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel,
                    bibendum in, nibh. Donec elit lectus, pharetra quis, vulputate in
                </p>
            </div>
            <div class="collumn-addon">
                <h3 class="title-one">Q. Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                    commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur
                    eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel,
                    bibendum in, nibh. Donec elit lectus, pharetra quis, vulputate in
                </p>
            </div>
        </div>

    </div>
</div>