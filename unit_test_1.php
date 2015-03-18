<?php

/****This file contains automated unit testing for the php string processor, Once the file is 
 * run from a browser , it will test the  program as below :-
 *      1. The unit that checks if string contains a special character not in either vowels or
 *         consonants and replaces with a space character
 *        
 */

$string = "This@is@our)test(string that we will use5for#our test case 1";

// Include the Processor Class
include_once 'lib/Processor.php';


// The default object / Class constructor
$processor = new Processor();

echo "The test sting is <br />";
echo '"'.$string .'"';
echo "<br /><br />";

echo "The output of the test that checks if string contains a special character not in either vowels or
      cononants and replaces with a space character :<br /><br />";
echo '"' .$processor->findSpecialChars($string) . '"';

