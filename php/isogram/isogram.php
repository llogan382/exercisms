<?php
function isIsogram($isogram){

   $isogram = mb_strtolower(str_replace([' ', '-', '_'], '', $isogram));

    $old_array = str_split($isogram, 1);

   $new_array = array_unique($old_array  );

    return $new_array == $old_array; 
}

?>