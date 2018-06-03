<?php
function from($date){
    $born = clone $date;
    $born->add(new DateInterval('PT10000000000S')); 
    return $born;
}

?>
