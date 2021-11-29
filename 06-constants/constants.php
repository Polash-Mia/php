<?php

/*Constants are like variables except that once they are defined 
  they cannot be changed or undefined.
 *A valid constant name starts with a letter or underscore 
  (no $ sign before the constant name). 
*/

define("polash",03);
echo polash;
echo PolasH;

echo "<br/>";

$polash=05;
echo polash;

define("polash",06);
echo polash;


echo "<br/>";

define("prince",40,true);
echo PRince;





?>