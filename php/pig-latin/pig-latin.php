<?php

function translate($string){

    //create an array of vowels
    $vowels = "a,e,i,o,u";
    $arrVowels = explode(',', $vowels);

    //find consonants
    $consonants = "b,c,d,f,g,h,j,k,l,m,n,p,q,r,s,t,v,w,x,y,z";
    $arrCons = explode(',', $consonants);

    //find the first letter, second, third for clusters
    $first = substr($string, 0, 1);
    $second = substr($string, 1, 1);
    $third = substr($string, 2, 1);
    $fourth = substr($string, 3, 1);



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
            foreach($arrCons as $value){
                if($third == $value){
                    $cluster .= $third;
                    foreach($arrCons as $value){ 
                        if($fourth == $value){
                            $pigLatin = $string . "ay";
                            return $pigLatin;
                        }
                    }
                }
                //if two consonants and one vowel. Check if fourth is a vowel here

            }
        }     
    }
    $pigLatin = str_replace($cluster, '', $string) . $cluster . "ay";
    return $pigLatin;

//queen->eenquay, square->aresquay, 'yttria->yttriaay', 'xray-> xrayay', multi-word
//these should pass:
//cons and three vowels 
//two con and one vowels? (square)
}



?>