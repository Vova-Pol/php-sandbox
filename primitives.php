<?php
echo "Start\n";

$myVar = NULL;
if ($myVar == NULL) echo 'myVar = null';

echo "\n";

$myBool;
if ($myBool == null) echo 'myBool is null';

echo "\n";

$myBool = true;
if ($myBool) echo 'myBool is true';

echo "\n";

$myInt = 125;
$myFloat = 12.67;

function getInt($num): int {
  return $num;
}

function getFloat($num): float {
  return $num;
}

$result =  getInt($myInt);
echo $result;
echo "\n";

$result = getInt($myFloat);
echo $result;
echo "\n";

$result = getFloat($myFloat);
echo $result;
echo "\n";

$trueVar = 8967;
echo "$trueVar";
echo "\n";

$testVar = 1233;
var_dump($testVar);

$testVar = true;
var_dump($testVar);

$testVar = NULL;
var_dump($testVar);

$concat = "Hi" + " there"; // err
var_dump($concat);

$concat = "10" + "20"; // int(30)
var_dump($concat);

$concat = 10 + '20'; // int(30)
var_dump($concat);