<?php

function sp_strip_tags_minimal($string)
{
    $string = preg_replace('@<(script|style)[^>]*?>.*?</\\1>@si', '', $string);
    $string = strip_tags($string);
    return trim($string);
}
