<?php

$name = array("Polash", "Asad", "Prince");
sort($name);

for($i=0;$i<3;$i++){
  echo $name[$i]."<br/>";
}

echo "<br/>";
echo "<br/>";

foreach ($name as $value) {
  echo $value."<br/>";
}

echo "<br/>";
echo "<br/>";


?>




<?php

$name = array("Polash", "Asad", "Prince");
rsort($name);

for($i=0;$i<3;$i++){
  echo $name[$i]."<br/>";
}

echo "<br/>";
echo "<br/>";

foreach ($name as $value) {
  echo $value."<br/>";
}

echo "<br/>";
echo "<br/>";


?>


<?php

$students=array("Polash."=>3,"Prince."=>40,"Jui."=>16);

asort($students);
foreach ($students as $Name => $Roll) {
  echo "Name:".$Name."Roll:".$Roll."<br/>";
}

echo "<br/>";
echo "<br/>";




?>
<?php

$students=array("Polash."=>3,"Prince."=>40,"Jui."=>16);

ksort($students);
foreach ($students as $Name => $Roll) {
  echo "Name:".$Name."Roll:".$Roll."<br/>";
}

echo "<br/>";
echo "<br/>";


?>