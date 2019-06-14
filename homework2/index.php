<?php

function renderTemplate ($page, $content = '', $info = '') {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}


$content = renderTemplate("about");
$info = renderTemplate("info");
echo renderTemplate("layout", $content, $info);
