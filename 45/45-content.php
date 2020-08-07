<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-45">
    <div class="mule">
        <div class="container">
            <div class="row">
                <div class="col-md-4 coyote">
                    <div class="gorilla">
                        <img class="polar" src="./images/181.png" alt="">
                    </div>
                    <div class="skunk">
                        <h4 class="cheetah">
                            Who we are
                        </h4>
                        <div class="chameleon">
                            <p class="crocodile">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et
                                justo.</p>
                            <a class="read"><i class="fa fa-play-circle" aria-hidden="true"></i> Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 coyote">
                    <div class="gorilla">
                        <img class="polar" src="./images/182.png" alt="">
                    </div>
                    <div class="skunk">
                        <h4 class="cheetah">
                            Who we are
                        </h4>
                        <div class="chameleon">
                            <p class="crocodile">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et
                                justo.</p>
                            <a class="read"><i class="fa fa-play-circle" aria-hidden="true"></i> Read more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 coyote">
                    <div class="gorilla">
                        <img class="polar" src="./images/183.png" alt="">
                    </div>
                    <div class="skunk">
                        <h4 class="cheetah">
                            Who we are
                        </h4>
                        <div class="chameleon">
                            <p class="crocodile">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et
                                justo.</p>
                            <a class="read"><i class="fa fa-play-circle" aria-hidden="true"></i> Read more</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>