<?php

// function isPangram($string)
// {
//     $string = str_replace(['-', ' '], '', mb_strtolower($string));
//     $letters = preg_split('//u', $string);
//     $alphabet = str_split('abcdefghijklmnopqrstuvwxyz');
//     return count(array_intersect($alphabet, $letters)) === count($alphabet);
// }


function isPangram($sentence){

    //convert to similar characters,
    $sentence=mb_strtolower($sentence);

    //remove spaces, underscores, etc
    $cleanSentence=str_replace([' ', '_'], '', $sentence);

    //split characters in the string
    $stringChars = str_split($cleanSentence);

    //check against the alphabet
    $alphabet = str_split('abcdefghijklmnopqrstuvwxyz');

    //do the number of unique characters match unique characters in the alphabet?
    return count(array_intersect($alphabet, $stringChars)) === count($alphabet);


}



?>