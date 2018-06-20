<?php


//create an array for every number up to 
function sieve($n){
// Create a list of consecutive integers from 2 through n: (2, 3, 4, ..., n).
//Let A be an array of Boolean values, indexed by integers 2 to n,
    $A = range(1, $n);
    $prime = array();
 
// When the algorithm terminates, the numbers remaining not marked in the list are all the primes below n.
    foreach($A as $i){

// Initially, let p equal 2, the smallest prime number.
        for($p = 2; $p <= $n; $p++){
            
            for($k = 2; $k < $p; $k++){
                if($p%$k==0){
                    break;
                }
            }
            if($k==$p){
            var_dump($k);
            }

        }
    }

        


}

?>