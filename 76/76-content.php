<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-76">
    <div class="container">
        <div class="error-found">
            <h3 class="error-title">
                404
                <span class="error-notpage"> Oops... Page Not Found!</span>
            </h3>
            <div class="error-content">
                Sorry the Page Could not be Found here. Try using the button below to go to main page of the site
            </div>
            <div class="error-search">
                <div class="row">
                    <div class=" hept">
                        <form>
                            <input class="search" type="text" placeholder="Search" name="search" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>