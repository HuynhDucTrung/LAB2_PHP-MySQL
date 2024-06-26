<?php
function is_str_lowercase($str)
{
    if (ctype_lower(str_replace(' ', '', $str))) {
        echo "The string '" . $str . "' is in lowercase." . "<br>";
    } else {
        echo "The string '" . $str . "' is not in lowercase." . "<br>";
    }
}

$str1 = 'abc ';
$str2 = 'ABC';

is_str_lowercase($str1);
is_str_lowercase($str2);
