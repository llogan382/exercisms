<?php

class Bob
{
    // property declaration

    public $chill = "Whoa, chill out!";
    public $calm = "Calm down, I know what I'm doing!";
    public $sure = "Sure.";
    public $fine = "Fine. Be that way!";
    public $whatever = "Whatever.";
    

    // method declaration
    public function respondTo($text )
    { 
        //remove whitespace
        $text= trim($text);
        //Check Punctuation at end
        $punct = substr($text, -1 );
        //Check if all caps
        $YELLING = strtoupper($text) ;
        //check if all text, not numbers or characters
        $cleanText = preg_replace("/[^A-Za-z0-9\,?!'[:space:]]/","", $text);
        //remove ONLY numbers
        $includesText = preg_replace("/[0-9\,?:)[:space:]]/","", $text);


        echo $includesText;

        // He answers 'Calm down, I know what I'm doing!' if you yell a question at him.
        //caps and ends w a question
        if ( $YELLING===$text && $punct === '?' && $includesText != Null)
        return $this->calm;

        //He answers 'Whoa, chill out!' if you yell at him. This
        //includes CAPS, Caps w numbers, 
        if ( $YELLING===$text && $includesText != Null)
        return $this->chill; 

        //Bob answers 'Sure.' if you ask him a question.
        //includes numbers w question
        if ( $punct === '?')
        return $this->sure;

        //He says 'Fine. Be that way!' if you address him without actually saying anything.
        if ($text==Null && $includesText==Null)
        return $this->fine;

        //everything else
        return $this->whatever;

    }
}

?>

