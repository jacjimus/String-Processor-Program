<?php

/****This file contains automated unit testing for the php string processor, Once the file is 
 * run from a browser , it will test  the program as below :-
 *      
 *       The unit that checks if 2 corresponding characters in a word are subset of either vowels or consonants
 *  
 */

$string = "This@is@our)test(string that we will use5for#our test case 1";

// Include the Processor Class
include_once 'lib/Processor.php';


// The default object / Class constructor
$processor = new Processor();

echo "The test string is <br /><br />";
echo '"'.$string .'"';
echo "<br /><br />";
 $str = $processor->findSpecialChars($string); 
 $exploded_string = array_filter(explode(Processor::DELIMITER, $str));
echo "The output of the test that checks if 2 corresponding characters in a word are subset of either vowels or consonants is: <br /><br />";
echo $processor->findCorrespondingCharacter($exploded_string) ;

