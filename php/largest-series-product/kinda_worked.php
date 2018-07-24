<?php

class Series
{
    // poperty declaration
    public $series = [];
    public $smallest_series = 1;
    public $largest_series = 1;

    function __construct($input){
        $this->series = str_split($input);
       
    }

    // method declaration

    public function largestProduct($seq)
    {   
        $count = count($this->series);
        var_dump($this->series);

        //use array_shift() for each pass through the loop

        //use array slice to get the new value

        //use array_product to find the new value
        
        // for($i = 0; $seq; $i++)
        // {
        //     //have we reached the $seq?
        //     foreach (range($i, $seq) as $value){
            
        //     $this->series[$i] *= next($this->series);
        //     // $value *= $value;
            
        //     var_dump($this->series[$i]);
        //     }


        //     if($smallest_series > $largest_series){
        //         $largest_series = $smallest_series;
        //     }

        // }
        // return $largest_series; 
        
        
    }
}
?>
