<?php

//
// This is only a SKELETON file for the "Run Length Encoding" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function encode($input)
{
    // // YOUR CODE GOES HERE
    // //
   $array=str_split($input, 1);
   $howMany = 0;
   $newString = '';


   //if the next item does not match
    foreach ($array as $key => $value){
        //Add 1 to the counter for each loop
        $howMany++;
        //create a variable for the next value
        $nextValue = ($key+1)[$value];

        //check if the next value is the same
        if ($value !== $array[$nextValue]){   
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
    if ($input==Null)
    return '';
}
