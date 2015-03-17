<?php
/******************The initial File ************/

// Include the Processor Class
include_once 'lib/Processor.php';


// The default object / Class constructor
$processor = new Processor();


// The sample test Strings
$string1 = "Hello there great new world";
$string2 = "Welcome to Radix!!!";
$string3 = "Everybody, thanks you for trying this out.";


$processor->receive($string1);
$processor->receive($string2);
$processor->receive($string3);
