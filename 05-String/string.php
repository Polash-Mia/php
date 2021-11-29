<?php

//A string is a sequence of characters.
$name="polash";

echo 'I am $name';
echo "<br/>";
echo "I am $name"; //String formating


echo "<br/>";
//some commonly used functions to manipulate strings.


 echo strlen("polash")."<br/>";
 echo strrev ("polash")."<br/>";
 echo strtoupper("polash")."<br/>";
 echo strtolower("POLASH")."<br/>";
 echo str_word_count("my name is polash")."<br/>";
 echo strpos("my name is polash","polash")."<br/>";
 echo ucfirst("my name is polash")."<br/>";
 echo ucwords("my name is polash")."<br/>";
 echo substr("my name is polash",0,7)."<br/>";
 echo str_replace("Hi","Hello","Hi i am polash,Hi this is prince")."<br/>";
 
 $str = "polash";
 echo md5($str);



?>