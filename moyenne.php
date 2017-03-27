<?php


$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
$moyenne = 0;

foreach ($students as $clef => $valeur){
    echo $clef." à ".$valeur." ans. </br>";
    $moyenne += $valeur;
}

echo "</br> Ces personnes ont donc en moyenne ".($moyenne / count($students))." ans.";
?>