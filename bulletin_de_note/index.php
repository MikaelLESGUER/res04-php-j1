<!-- <article class="">
    <header>
        <h1></h1>
    </header>
    <section>
        <h2>Notes : </h2>
        <ul>
            <li>Note 1</li>
            <li>Note 2</li>
            <li>Note 3</li>
        </ul>
    </section>
    <footer>
        <h3>Moyenne des notes de l'étudiant </h3>
    </footer>
</article> -->

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
        ],
    ];

    function calculateAverage($grades)
{
    $total = array_sum($grades);
    $count = count($grades);
    if ($count > 0) {
        return $total / $count;
    } else {
        return 0;
    }
}

echo '<link rel="stylesheet" type="text/css" href="style.css">';

// Parcours du tableau des étudiants pour calculer et stocker les moyennes
foreach ($students as &$student) {
    $student['average'] = calculateAverage($student['grades']);
}

// Affichage du HTML avec la moyenne dynamique
foreach ($students as $student) {
    $average = $student['average'];
    $class = '';

    if ($average < 10) {
        $class = 'red';
    } elseif ($average >= 10 && $average <= 13) {
        $class = 'orange';
    } elseif ($average > 13) {
        $class = 'green';
    }

    echo '<article class="' . $class . '">';
    echo '<header>';
    echo '<h1>' . $student['firstName'] . ' ' . $student['lastName'] . '</h1>';
    echo '</header>';
    echo '<section>';
    echo '<h2>Notes :</h2>';
    echo '<ul>';
    foreach ($student['grades'] as $grade) {
        echo '<li>' . $grade . '</li>';
    }
    echo '</ul>';
    echo '</section>';
    echo '<footer>';
    echo '<h3>Moyenne des notes de l\'étudiant : ' . $student['average'] . '</h3>';
    echo '</footer>';
    echo '</article>';
}
?>