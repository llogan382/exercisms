<?php
/**
 * OOP has different PATTERNS in each code
 * examples include constructors- some tutorials might not have them
 * We will use MVC patterns
 * So what is MVC patterns? 
 * View- what you see
 * Controller- takes input, requests from the user
 * Model- knows everything about the database
 */
class Robot
{
    /**
     * todo: test name sticks
     */
    private $name;
    private $letters;
    private $usedNames = [];
    private $number = 0;
    private $newName;
  
    /**
     * Creates function used in class
     * 
     * @return Newname;
     */
    public function getName()
    
    {
        $letters = range('A', 'Z');
        $number = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        $name = array_rand($letters, 2);
        $newName = $letters[$name[0]] . $letters[$name[1]] . $number;
        $usedNaes = array_unique(explode( " ", $newName));
        $newName = array_unique($usedNaes);
    

        return (implode($newName));
    }

    public function reset() {

    }

}