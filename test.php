<?php
$pot = 0;
foreach (array_reverse(str_split(decbin(error_reporting()))) as $bit) {
    if ($bit == 1) {
        echo array_search(pow(2, $pot), get_defined_constants(true)['Core']). "<br>\n";
    }
    $pot++;
}