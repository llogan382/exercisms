<?php

    function difference($diff){
        return squareOfSums($diff) - sumOfSquares($diff);
    }

    function squareOfSums($sq_of_sums){
        while ($sq_of_sums > 0){
            $new_sq_of_sums += $sq_of_sums--; 
         }
        return $new_sq_of_sums ** 2;
    }

    function sumOfSquares($sum_of_sq){
        while ($sum_of_sq > 0){
            $new_sum_of_sq += $sum_of_sq ** 2;
            --$sum_of_sq;
        }
        return $new_sum_of_sq;
    }
?>
