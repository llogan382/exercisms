<?php

$learn = array('Conditionals', 'arrays', 'loops');

// to add a new value at the end of an array use empty brackets
$learn[] = 'Build somethin Awesome';

// to add more than one item at a time to an array, separated by commas, use array_push
//this will add a new item at the end of the index

array_push($learn, 'Functions', 'forms', 'Objects');

// to add items to the beginning of an array, use array_unshift. This will add a new item
//in the index and offset everything

array_unshift($learn, 'HTML', 'CSS', 'PHP');

//to remove the first item from an element from an array, use array_shift. This doesn't delete, but it does RETURN the element. 
array_shift($learn);

// //to remove an item from the end of an array, use array_pop
array_pop($learn);

// //to remove a specified item in an array, use unset. Belo will remove the 2nd and 3rd parameters
// //unset does not update keys to be in order
unset($learn[1],$learn[2]);

// //to update the index back to a numerical order:
$learn = array_values($learn);

// //to update 1 element in an . Below will update the first item in the array
$learn[0] = 'Email';


// print_r($learn);

// Keys can be string or integers. Strings with only numbers will be converted to integers
//Boolean values will be changed to 1 for true, 0 for false in an array
$currentYear = date('Y');
$year = $currentYear - 100;

while ($year <= $currentYear){
    echo $year . "<br />\n";
    $year++;
}

//do while loop

do {
    echo $year . "<br />\n";
} while (++$year <= $currentYear);

$learn = array('Conditionals', 'arrays', 'loops');

// to add a new value at the end of an array use empty brackets
$learn[] = 'Build somethin Awesome';

// to add more than one item at a time to an array, separated by commas, use array_push
//this will add a new item at the end of the index

array_push($learn, 'Functions', 'forms', 'Objects');

// to add items to the beginning of an array, use array_unshift. This will add a new item
//in the index and offset everything

array_unshift($learn, 'HTML', 'CSS', 'PHP');
asort($learn);

//array each() function will return the key. It will pass the key value pair for each item in the array, and then move the 
//array cursor. It is usually used with the "list" function in an array

$count = 0; //to create another condition in the loop, and only return 

while ( ( list($key, $val) = each ( $learn ) )  && $count++ < 2) {
    echo "$key => $val\n";
}

?>