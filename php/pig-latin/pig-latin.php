<?php

function translate($string){

    //create an array of vowels
    $vowels = "a,e,i,o,u";
    $arrVowels = explode(',', $vowels);

    //find consonants
    $consonants = "b,c,d,f,g,h,j,k,l,m,n,p,q,r,s,t,v,w,x,y,z";
    $arrCons = explode(',', $consonants);

    //find the first letter, second, third
    $first = substr($string, 0, 1);
    $second = substr($string, 1, 1);
    $third = substr($string, 2, 1);


    //check if first letter is a vowel
    foreach($arrVowels as $check){
        if($check == $first){
            //if first letter is a vowel, add "ay"
            $pigLatin = $string . "ay";
            return $pigLatin;

        }
    }

    //check if first letters are consonants
    $cluster = $first;
    foreach($arrCons as $value){
        if($second == $value ){
            $cluster .= $second;
        }
        
    }
    $pigLatin = str_replace($cluster, '', $string) . $cluster . "ay";
    return $pigLatin;


    
    // $pigLatin = substr($string, 1, 75) . $first . 'ay';
    // return $pigLatin;

    //if not a vowel, remove first letter and add
    //it to the end

    //add "ay" to the end. 

}



?>