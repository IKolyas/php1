<?php
function renderTemplate(string $template, array $params = [])
{
    extract($params);
    ob_start();
    include VIEWS_DIR . $template . ".php";
    return ob_get_clean();
}

function render (string $template, array $params = [], $useLayout = true) {
    $content = renderTemplate($template, $params);
    if($useLayout) {
        return renderTemplate('layouts/main', ['content' => $content]);
    }
    return $content;
}