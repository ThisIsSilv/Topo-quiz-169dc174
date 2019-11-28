<?php
$count =0;
$plaatsen = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);
$aantal = count($plaatsen);

foreach ($plaatsen as $stad => $hoofdstad){
    echo "Wat is de hoofdstad van $stad?".PHP_EOL;
    $answer = readline();
    if ($answer != $hoofdstad){
        echo "FOUT BroodMOGOOL, het antwoord is $hoofdstad.".PHP_EOL;
        }
    if($answer == $hoofdstad){
        echo "EPIC!".PHP_EOL;
        $count++;
    }
}
echo "je hebt $count van de $aantal goed".PHP_EOL;