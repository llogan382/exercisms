<?php

//
// This is only a SKELETON file for the "Run Length Encoding" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function encode($input)
{
    // // YOUR CODE GOES HERE
    // //
   $array=str_split($input);
   $howMany = 0;
   $newString = '';


   //if the next item does not match
    foreach ($array as $key => $value){
        //Add 1 to the counter for each loop
        $howMany++;
        //create a variable for the next value
        $nextValue = $array[$key + 1];
        // check if the next value is the same
        if ($value !== $nextValue){   
            // get rid of empty string, or array value of false
            if ($howMany > 1 ){
            //add the running total to the end of the new string
            $newString .= $howMany . $value;
            }
            else{
            //if the next value is different, add the value to the new string     
                $newString .= $value;
            }
            $howMany = 0;
        }   
    }        
    return $newString;
    
}

function decode($input)
{
    // YOUR CODE GOES HERE
    //
    $array=str_split($input);
    $howMany ='';
    $newString ='';


    foreach ($array as $key => $value){

        //create a variable for the next value
        $nextValue = $array[$key + 1];
        //is this a number or a letter/space?
        if (is_numeric($value) ){   
            //add the number to the running total
            $howMany .=$value;
        }
            //for a letter
            else  {
                if ($howMany !== ''){
            //Letter. Multiply times $howmany and echo to New String                                                    
                $newString .= str_repeat($value, intval($howMany) );    
                }
                else {
                $newString .= $value;
                }
        $howMany ='';
        }
        //if a letter, add to the string
    }
    print_r($newString);
    return $newString;
}
