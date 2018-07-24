<?php 
function raindrops($noise)
{    
    $sound = '';
    $Pling = 'Pling';
    $Plang = 'Plang';
    $Plong = 'Plong';

    if ( $noise % 3 === 0 ){
        $sound .= $Pling;
    }
    if ( $noise % 5 === 0 ){
        $sound .= $Plang;
    }
    if ( $noise % 7 === 0 ){
        $sound .= $Plong;
    }
    if ( $sound ){
        return $sound;
    }
    return (string) $noise;
}
?>