<?php
// https://www.codewars.com/kata/54b724efac3d5402db00065e

    $morse = array(" " => "", "a" => ".- ",
    "b" => "-... ", "c" => "-.-. ",
    "d" => "-.. ", "e" => ". ",
    "f" => "..-. ", "g" => "--. ",
    "h" => ".... ", "i" => ".. ",
    "j" => ".--- ", "k" => "-.- ",
    "l" => ".-.. ", "m" => "-- ",
    "n" => "-. ", "o" => "--- ",
    "p" => ".--. ", "q" => "--.- ",
    "r" => ".-. ", "s" => "... ",
    "t" => "- ", "u" => "..- ",
    "v" => "...- ", "w" => ".-- ",
    "x" => "-..- ", "y" => "-.-- ",
    "z" => "--.. ", "." => ".-.-.- ",
    "," => "--..-- ", "?" => "..--.. ",
    "/" => "-..-. ", "@" => ".--.-. ",
    "1" => ".---- ", "2" => "..--- ",
    "3" => "...-- ", "4" => "....- ",
    "5" => "..... ", "6" => "-.... ",
    "7" => "--... ", "8" => "---.. ",
    "9" => "----. ", "0" => "----- ",
    ":" => "---... ", "'" => ".----. ",
    "-" => "-....- ", '"' => ".-..-. ",
    "=" => "-...- ", "(" => "-.--.- ",
    "SOS" => '...---...', '!' => '-.-.--');
    function decode_morse($text){
        return trim(strtoupper(str_replace('  ', ' ', join(array_map(function($e){global $morse;return array_flip(array_map('trim',$morse))[$e];},explode(' ',$text))))));
    }