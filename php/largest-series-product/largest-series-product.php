<?php

class Series
{
    // poperty declaration
    public $series = [];
    public $smallest_series = 1;
    public $largest_series = 1;
    public $integer = [];

    function __construct($input){
        $this->series = str_split($input);

    }

    // method declaration

    public function largestProduct($seq)
    {
        $count = count($this->series);
        //start looping
        foreach($this->series as $value[]){
            
            $integer = intval ($value);
            
            $slice=array_slice($this->series, 0, $seq);
            
            $smallest_series = array_product($slice);

            //store the smallest 
            if($smallest_series > $largest_series){
                $largest_series = $smallest_series;
            }

            // to the next loop
            $shift[]=array_shift($this->series);

        }
        
       return($largest_series);
    }
    
}
?>
