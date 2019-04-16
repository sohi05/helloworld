<?php
/*
 * A simple php class to print hello world!
 */
class base {
   function foo(){
     echo "Hello world!".PHP_EOL;  
   } 
}

$base = new base();
$base->foo(); //prints hello world!
?>
