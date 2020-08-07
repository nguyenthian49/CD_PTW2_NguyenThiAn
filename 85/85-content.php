<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-85">
    <div class="container">
        <div class="row">
            <!-- Html List Question -->
            <div class="col-inner">
                <!-- Tiêu đề chính -->
                <div class="title">
                    <h3 class="section_title"><span class="section_title_main">Faq</span>
                    </h3>
                </div>
                <!-- Child Question List-->
                <div class="accordion" id="accordion" role="tablist">
                    <!-- Child Question One-->
                    <div class="accordion_item">
                        <div class="panel-heading panel-title" role="tab" id="headingOne">
                            <!-- Question -->
                            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne" class="accordion_item_title collapsed"> <i
                                    class="fa fa-pencil" aria-hidden="true"></i> Praesent mattis commodo
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam
                                sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec
                                elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar
                                ac, congue id, iaculis ut, est.</p>
                        </div>
                    </div>
                    <!-- End Child Question One -->

                    <!-- Child Question Two-->
                    <div class="accordion_item">
                        <div class="panel-heading panel-title" role="tab" id="headingTwo">
                            <!-- Question -->
                            <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo" class="accordion_item_title collapsed"><i
                                    class="fa fa-search" aria-hidden="true"></i> Praesent mattis commodo
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam
                                sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec
                                elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar
                                ac, congue id, iaculis ut, est.</p>
                        </div>
                    </div>
                    <!-- End Child Question Two -->

                    <!-- Child Question Three-->
                    <div class="accordion_item">
                        <div class="panel-heading panel-title" role="tab" id="headingThree">
                            <!-- Question -->
                            <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree" class="accordion_item_title collapsed"><i
                                    class="fa fa-trophy" aria-hidden="true"></i> Praesent mattis commodo
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam
                                sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec
                                elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar
                                ac, congue id, iaculis ut, est.</p>
                        </div>
                    </div>
                    <!-- End Child Question Three -->

                    <!-- Child Question Four-->
                    <div class="accordion_item">
                        <div class="panel-heading panel-title" role="tab" id="headingFour">
                            <!-- Question -->
                            <a role="button" data-toggle="collapse" href="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour" class="accordion_item_title collapsed"><i
                                    class="fa fa-pencil" aria-hidden="true"></i> Praesent mattis commodo
                            </a>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam
                                sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec
                                elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar
                                ac, congue id, iaculis ut, est.</p>
                        </div>
                    </div>
                    <!-- End Child Question Four -->

                    <!-- Child Question Five-->
                    <div class="accordion_item">
                        <div class="panel-heading panel-title" role="tab" id="headingFive">
                            <!-- Question -->
                            <a role="button" data-toggle="collapse" href="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive" class="accordion_item_title collapsed"><i
                                    class="fa fa-pencil" aria-hidden="true"></i> Praesent mattis commodo
                            </a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam
                                sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec
                                elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar
                                ac, congue id, iaculis ut, est.</p>
                        </div>
                    </div>
                    <!-- End Child Question Five -->

                    <!-- Child Question Six-->
                    <div class="accordion_item">
                        <div class="panel-heading panel-title" role="tab" id="headingSix">
                            <!-- Question -->
                            <a role="button" data-toggle="collapse" href="#collapseSix" aria-expanded="false"
                                aria-controls="collapseSix" class="accordion_item_title collapsed"><i
                                    class="fa fa-pencil" aria-hidden="true"></i> Praesent mattis commodo
                            </a>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSix" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam
                                sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec
                                elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar
                                ac, congue id, iaculis ut, est.</p>
                        </div>
                    </div>
                    <!-- End Child Question Five -->

                    <!-- Child Question Save-->
                    <div class="accordion_item">
                        <div class="panel-heading panel-title" role="tab" id="headingSave">
                            <!-- Question -->
                            <a role="button" data-toggle="collapse" href="#collapseSave" aria-expanded="false"
                                aria-controls="collapseSave" class="accordion_item_title collapsed"><i
                                    class="fa fa-pencil" aria-hidden="true"></i> Praesent mattis commodo
                            </a>
                        </div>
                        <div id="collapseSave" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSave" aria-expanded="false" style="height: 0px;"
                            data-parent="#accordion">
                            <!-- Answer -->
                            <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam
                                sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Donec
                                elit lectus, pharetra quis, vulputate in, lobortis at, mi. Donec libero purus, pulvinar
                                ac, congue id, iaculis ut, est.</p>
                        </div>
                    </div>
                    <!-- End Child Question Five -->


                </div>
            </div>
            <!-- End List Question -->
        </div>
    </div>
</div>