<?php
function menuList(array $arr)
{
    foreach ($arr as $index => $value) {
        if (is_array($value)) {
            echo " <li><a href=\"\"><b>$index</b><span class=\"fa fa-angle-down\"></span></a> <ul class=\"submenu\">";
            menuList($value);
            echo " </ul></li>";
        } else {
            echo "<li><a href=\"$value\">$value</a></li>";
        }
    }
}

function renderImg(array $arr)
{
    foreach ($arr as $ind => $value) {
        if (is_array($value)) {
            renderImg($value);
        } else {
            echo " <img src=\"$value\" alt=\"$value\" class=\"imgs\">";
        }
    }
}
