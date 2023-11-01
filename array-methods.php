<?php

$first = array();
if (is_array($first)) echo "It's an array";

// ------------------------------------- Разбить/собрать строку по указателю

$months = 'jan, feb, mar';
$monthsArr = explode(', ', $months);
print_r($monthsArr);
var_dump($monthsArr[0]);

$namesArr = ['Jim', 'Robert', 'Carl'];
$names = implode(', ', $namesArr);
var_dump($names);

// ------------------------------------------ Работа с регистром

$cars = array(
  'Sport' => 'BMW',
  'Retro' => 'Cadilac',
  'Buisness' => 'Mersedes'
);

$carsLowCase = array_change_key_case($cars, CASE_LOWER);
print_r($carsLowCase);

$carsUpCase = array_change_key_case($cars, CASE_UPPER);
print_r($carsUpCase);

// ----------------------------------------- Разбить на части

$friends = ['Jim', 'Carl', 'Liza', 'Mary', 'Bob'];
$membersPerTeam = 2;

$teams = array_chunk($friends, $membersPerTeam);
var_dump($teams);

$lastTeam = $teams[count($teams) - 1];
if (count($lastTeam) != $membersPerTeam)
  echo "Невозможно разделить команды поровну\n";
  
echo "Делим команды по $membersPerTeam\n";
$lastTeamLength = count($lastTeam);
echo "В последней команде $lastTeamLength человек\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7];
$numsSlice = array_slice($numbers, 0, 3); // arr, index, length
print_r($numsSlice);

// 27 самых частоимпользуемых метода массивов

$cars = ['BMW', 'Mers', 'Lambo'];

echo is_array($cars);
echo in_array('BMW', $cars);

$dublicated = [1,1,1,2,2,3,3,3,3];
$unique = array_unique($dublicated);
var_dump( $unique);

echo array_search('Lambo', $cars);

function showCar($car) {
  echo $car;
}

array_map('showCar', $cars);

$myNumbs = [1, 45, 23, 4567];
echo max($myNumbs);

$myLetters = ['a', 'f', 'z'];
echo max($myLetters);