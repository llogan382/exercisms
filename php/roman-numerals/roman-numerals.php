<?php

function toRoman($integer){
    $roman = '';
    // make all integers the same length
    if($integer <= 10){
        $integer = 0 . 0 . 0 . $integer;
    }
    if($integer <= 100 && $integer > 10){
        $integer = 0 . 0 . $integer;
    }
    if($integer <= 1000 && $integer > 100){
        $integer = 0 . $integer;
    }
    //create variable that turns integers into an array
    $arr = str_split($integer);
    //start with the largest (first in the array, the thousands space) numeral [0] and 
    //store value as $roman
    switch($arr[0]){
        //no '.=' because nothing is being appended
        case "1":
            $roman = "M";
            break;
        case "2":
            $roman = "MM";
            break;
        case "3":
            $roman = "MMM";
            return $roman;
            break;
    }

    switch($arr[1]){
        case "1":
        //append [1], the hundreds integer, to [0] (if there was one)
        //and update value of $roman
        $roman .= "C";
        break;
        case "2":
        $roman .= "CC";
        break;
        case "3":
        $roman .= "CCC";
        break;
        case "4":
        $roman .= "CD";
        break;
        case "5":
        $roman .= "D";
        break;
        case "6":
        $roman .= "DC";
        break;
        case "7":
        $roman .= "DCC";
        break;
        case "8":
        $roman .= "DCCC";
        break;
        case "9":
        $roman .= "CM";
        break;
    }
    switch($arr[2]){
        //continue appending the 10's digit, or  [2], to $roman;
        case "1":
        $roman .= "X";
        break;
        case "2":
        $roman .= "XX";
        break;
        case "3":
        $roman .= "XXX";
        break;
        case "4":
        $roman .= "XL";
        break;
        case "5":
        $roman .= "L";
        break;
        case "6":
        $roman .= "LX";
        break;
        case "7":
        $roman .= "LXX";
        break;
        case "8":
        $roman .= "LXXX";
        break;
        case "9":
        $roman .= "XC";
        break;
    }
    switch($arr[3]){
        case "1":
        $roman .= "I";
        break;
        case "2":
        $roman .= "II";
        break;
        case "3":
        $roman .= "III";
        break;
        case "4":
        $roman .= "IV";
        break;
        case "5":
        $roman .= "V";            
        break;
        case "6":
        $roman .= "VI";
        break;
        case "7":
        $roman .= "VII";
        break;
        case "8":
        $roman .= "VIII";
        break; 
        case "9":
        $roman .= "IX";
        break;
        
    }
    return $roman;
}
?>
