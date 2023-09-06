<?php
$myArr = array(
'Vova' => 29,
'Dima' => 31,
'Lena' => 26 
);

var_dump($myArr);

$mySecondArr = [
  'BMW' => 50000,
  'Vovlo' => 19200,
  'Ferrari' => 70000,
];

$myIntArr = [1, 3, 6, 10];
var_dump($myIntArr);
var_dump($myIntArr[2]);

$weirdArr = [
  1 => 'Bob',
  "1" => 'Bill',
  1.123 => 'Jim',
  true => 'Last'
];
var_dump($weirdArr);

$indexedArr = array(
  22,
  33,
  44 => "44 string",
  55,
  66
);
var_dump($indexedArr);

$nestedArr = array(
  'car' => 'Jeep',
  'moto' => 'Honda',
  'colors' => array(
    'blue', 'grey', 'black'
  ),
  'food' => [
    'eggs', 'avacados', 'milk'
  ]
);
var_dump($nestedArr);
var_dump($nestedArr['moto']);
var_dump($nestedArr['colors'][2]);

$insertArr = [1, 2, 3, 4, 5];
$insertArr[] = 21;
var_dump($insertArr);

$insertArr['breakfast'] = 'cereal with milk';
var_dump($insertArr);

$insertArr[0] = 121;
var_dump($insertArr);

unset($insertArr[1]);
var_dump($insertArr);

unset($insertArr);
var_dump($insertArr);

$intArr = array(1, 2, 3, 4, 5);
print_r($intArr);

foreach ($intArr as $key => $value) {
  unset($intArr[$key]);
};

print_r($intArr);
$intArr[] = 11; // 11 будет с индексом 5!
// Чтобы было 0, надо переиндексировать массив.
$intArr = array_values($intArr);
print_r($intArr);

$workers = [
  'John' => 'Boss',
  'Tom' => 'Backend'
];

foreach ($workers as $key => $value) {
  print_r($key);
  echo "\n";
  print_r($value);
  echo "\n";
};

// ----------------------------------------- Деструктуризация

$names = ['Timmy', 'Bob', 'Gavin'];
[$backend, $tester, $teamlead] = $names;
var_dump($backend);
var_dump($tester);
var_dump($teamlead);

$myTeam = [
  [01, 'Eddy'],
  [02, 'Allan'],
  [03, 'Alex']
];

foreach ($myTeam as [$id, $name]) {
  echo "$name has id - $id\n";
};

$userInfo = [
  'name' => 'Joshua',
  'age' => 23,
  'sex' => 'male'
];

['name' => $userName] = $userInfo;
['age' => $userAge] = $userInfo;

var_dump($userName);
var_dump($userAge);

// ----------------------------------------- Полезные Методы

$unsetItemArr = [0, 1, 2, 3];

unset($unsetItemArr[0]); // удалил
$unsetItemArr = array_values($unsetItemArr); // переиндексировал
var_dump($unsetItemArr);

function getRandomIndex($arr): int {
  return random_int(0, count($arr) - 1);
}

$randomArr = array('Java', 'Python', 'JS', 'Php');
$randomLanguage = $randomArr[getRandomIndex($randomArr)];
var_dump($randomLanguage);

$employees = [
  'managers' => [
    'a' => [
      'Allan',
      'Anna'
    ],
    'b' => [
      'Billy',
      'Bryan',
      'Bobby'
    ],
    'c' => [
      'Carl',
      'Carel'
    ]
  ],
  'developers' => [],
  'boss-level' => []
];

var_dump($employees['managers']['a'][0]);

// При присвоении массив всегда копируется
// Если хочешь присвоить ссылку, используй оператор &

$original = [1994, 1995, 1996];
$copy = $original;
$linkCopy = &$original;

$copy[] = 'year 2023';
$linkCopy[] = 2023;

print_r($original);
print_r($copy);
print_r($linkCopy);