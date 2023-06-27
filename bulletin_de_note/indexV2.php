<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css" type="text/css" />
    <title>Bulletin de note</title>
</head>
<body>
    <?php

$students = [
    [
        "firstName" => "James",
        "lastName" => "Fields",
        "grades" => [12, 11, 15],
        "average" => -1
    ],
    [
        "firstName" => "Richard",
        "lastName" => "Stein",
        "grades" => [18, 12, 13],
        "average" => -1
    ],
    [
        "firstName" => "Mark",
        "lastName" => "Hartoff",
        "grades" => [9, 11, 10],
        "average" => -1
    ],
    [
        "firstName" => "Thomas",
        "lastName" => "Nestle",
        "grades" => [9, 8, 5],
        "average" => -1
    ],
    [
        "firstName" => "Jeremy",
        "lastName" => "Brent",
        "grades" => [18, 15, 16],
        "average" => -1
    ]
];
foreach ($students as $student){
    calculateAverage($student)
?>
    <article class="<?php echo colorAverage($student["average"]);?>">
        <header>
            <h1><?php echo $student["firstName"]." ".$student["lastName"];  ?> </h1>
        </header>
        <section>
            <h2>Notes : </h2>
            <ul>
                <?php foreach ($student["grades"] as $grades){
                    echo "<li>$grades</li>";
                 } ?>
            </ul>
        </section>
        <footer>
            <h3><?php echo "Votre moyenne est de ".round($student["average"]); ?></h3>
               
        </footer>
    </article>
    <?php }?> 
</body>
</html>

<?php
function calculateAverage(&$student)
{
        
    $sum = array_sum($student["grades"]);
    $count = count($student["grades"]);
    if ($count === 0)
    {
        return $student["average"] = 0;
    }
    else
    {
        $student["average"] = $sum/ $count;
    }  
}
function colorAverage($average)
{
        
        if($average < 10){
            return "red";
        }
        else if (10 <= $average && $average <= 13)
        {
            return "orange";
        }
        else
        {
            return "green";
        }
}
?>