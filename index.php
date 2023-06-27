<?php

$nb = '42';
echo $nb."<br>";
$str = "42";
echo $str."<br>";
$nbstr = "$nb";
echo $nbstr."<br>";
$nb_tab = [42, 35, 9.4, 5.2];
print_r($nb_tab)."<br>";
$str_tab = ['42', '35', '9.4', '5.2'];
print_r($str_tab)."<br>";
$animal = [
	"species" => "American Staff",
	"name" => "Furious",
    "age" => "14 years"
];
print_r($animal)."<br>";
$data = 42;
var_dump($data);
$float = (float) $data;
var_dump($float);
$string = (string) $float;
var_dump($string);
$i = 0;
$tab = ["Chat", "Chien", "Lapin", "Souris"];

while($i < count($tab))
{
	echo "$tab[$i].<br>";
	$i++;
}

$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach ($numbers as $number) {
    if ($number < 0) {
        echo $number;
        echo "<br>";
    }
}

$user = [
    "firstName" => "Barack",
    "lastName" => "Obama"
];

$presidentNumber = 44;

echo "Je suis {$user['firstName']} {$user['lastName']}, le {$presidentNumber}ème président des USA.";

$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];

foreach ($users as $user) {
    echo $user['firstName'] . ' ' . $user['lastName'];
    echo "<br>";
}

?>