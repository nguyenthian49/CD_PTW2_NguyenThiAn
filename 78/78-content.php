<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-78">
    <div class="monthly-year">
        <div class="container">
            <div class="monthty">
                <ul class="tab-monthly">
                    <li class="active-monthly">
                        <span class="sppb-tab" aria-label="Monthly"><i class="fa " aria-hidden="true">
                            </i> Monthly
                        </span>
                    </li>
                    <li class="active-monthly1">
                        <span class="sppb-tab1" aria-label="Monthly"><i class="fa " aria-hidden="true">
                            </i> Yearly
                        </span>
                    </li>
                </ul>
            </div>
            <div class="free-content">
                <div class="row">
                    <div class="col-md-4 col-footer">
                        <div class="border-modern">
                            <div class="box-text-footer">
                                <h3 class="less-monder">Free</h3>
                                <div class="price-circle">
                                    <div class="price"><sup>$</sup>0</div>
                                    <br />
                                    <span class="life">Lifetime</span>
                                </div>
                                <br />
                                <ul class="plan-features">
                                    <li>One user</li>
                                    <li>10 GB Disk Space</li>
                                    <li class="highlight">Free Domain</li>
                                </ul>
                                <a class="btn btn-dark" href="#"><i class="fa fa-play-circle"
                                        aria-hidden="true"></i> Order
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-footer">
                        <div class="border-modern">
                            <div class="box-text-footer">
                                <h3 class="less-monder">Free</h3>
                                <div class="price-circle">
                                    <div class="price"><sup>$</sup>59</div>
                                    <br />
                                    <span class="life">/Month</span>
                                </div>
                                <br />
                                <ul class="plan-features">
                                    <li>Up to 10 user</li>
                                    <li>50 GB Disk Space</li>
                                    <li class="highlight">2 Free Domain</li>
                                </ul>
                                <a href="" class="btn btn-dark" href="#"><i class="fa fa-play-circle"
                                        aria-hidden="true"></i> Order
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-footer">
                        <div class="border-modern">
                            <div class="box-text-footer">
                                <h3 class="less-monder">Free</h3>
                                <div class="price-circle">
                                    <div class="price"><sup>$</sup>99</div>
                                    <br />
                                    <span class="life">/Month</span>
                                </div>
                                <br />
                                <ul class="plan-features">
                                    <li>Unlimited user</li>
                                    <li>250 GB Disk Space</li>
                                    <li class="highlight">Unlimited Domain</li>
                                </ul>
                                <a class="btn btn-dark" href="#"><i class="fa fa-play-circle"
                                        aria-hidden="true"></i> Order
                                    now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>