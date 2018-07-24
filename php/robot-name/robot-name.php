<?php
/**
 * create a class called robot
 * this class will return an object from the second class
 * first class will return method getname and rest
 * second class will run the methods, store the array
 * of unique values
 */

class Robot {
   private $name;

   public function __construct() {
   $this->reset();
   }
   public function getName() {
   return $this->name;
   }
   public function reset() {
   $this->name = NamesArray::getName();
   }
}
class NamesArray {
   private $name; 
   private static $letters; 
   private static $number = 0; 
   private static $new_name; 

   public function getName() {
      $letters = range( 'A', 'Z' );
      $number = str_pad( rand( 1, 999 ), 3, '0', STR_PAD_LEFT );      
      $name = array_rand($letters, 2);
      $new_name = $letters [ $name[0] ] . $letters [ $name[1] ] . $number;
      $used_names = array_unique( explode( ' ', $new_name ) );
      $new_name = array_unique( $used_names );
      return ( implode( $new_name ) );
   }
}
