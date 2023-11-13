<?php
// $animal=["Chat","Lion","Singe","Dragon"];
// $element=["l'eau","la Terre","le feu","l'air"];


function writeSecretSentence(string $animal, string $element): string {
    $sentence = $animal . " s'incline face à " . $element;
    return $sentence;
}

// Appels de la fonction avec différents paramètres
$result1 = writeSecretSentence("le chat", "la terre");
$result2 = writeSecretSentence("le dragon", "l'eau");
$result3 = writeSecretSentence("le singe", "l'air");
$result4 = writeSecretSentence("le lion", "le feu");


echo $result1 . PHP_EOL;
echo $result2 . PHP_EOL;
echo $result3 . PHP_EOL;
echo $result4 . PHP_EOL;