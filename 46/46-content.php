<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-46">
    <div class="container">
        <div class="cherry">
            <div class="banana">
                <h5 class="banana-content">about our company and success</h5>
            </div>
            <div class="coconut">
                <h2 class="coconut-title">We are digitalagency studio and
                    <br /> Create Awesome Features
                </h2>
            </div>
        </div>
        <div class="logan">
            <div class="row">
                <div class="col-md-3 peach">
                    <div class="starfruit">
                        <span class="guava-icon">
                        </span>
                    </div>
                    <div class="tangerine">
                        <h5 class="fully">Fully Responsive</h5>
                        <p class="fully-title">Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices posuere
                            cubilia
                            Curae ornare hendrerit.</p>
                    </div>
                </div>
                <div class="col-md-3 peach">
                    <div class="starfruit">
                        <span class="peach-icon">
                        </span>
                    </div>
                    <div class="tangerine">
                        <h5 class="fully">Animation Styles</h5>
                        <p class="fully-title">Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices posuere
                            cubilia
                            Curae ornare hendrerit.</p>
                    </div>
                </div>
                <div class="col-md-3 peach">
                    <div class="starfruit">
                        <span class="lychee-icon">
                        </span>
                    </div>
                    <div class="tangerine">
                        <h5 class="fully">Shop Pages</h5>
                        <p class="fully-title">Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices posuere
                            cubilia
                            Curae ornare hendrerit.</p>
                    </div>
                </div>
                <div class="col-md-3 peach">
                    <div class="starfruit">
                        <span class="durian-icon">
                        </span>
                    </div>
                    <div class="tangerine">
                        <h5 class="fully">Best Support</h5>
                        <p class="fully-title">Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices posuere
                            cubilia
                            Curae ornare hendrerit.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>