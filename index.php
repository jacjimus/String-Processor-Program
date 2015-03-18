<?php
/******************The initial File ************/

// Include the Processor Class
include_once 'lib/Processor.php';


// The default object / Class constructor
$processor = new Processor();


// The sample test Strings
$string1 = "Hello there great new world";
$string2 = "WELCOME TO RADIX!!!";
$string3 = "Everybody, thanks you for trying this out.";


$processor->receive($string1);  // process te first string and output the results
$processor->receive($string2); // process te second string and output the results
$processor->receive($string3); // process te third string and output the results
