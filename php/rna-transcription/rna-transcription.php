<?php
function toRna($text){
    $fromDNA = array("G" => "C", "C" => "G", "T" => "A", "A" => "U");
    return strtr($text,$fromDNA);
}
?>
