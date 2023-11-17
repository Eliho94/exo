<?php

$weapons = ['fists', 'whip', 'gun'];

echo $opponentWeapon = $weapons[rand(0,2)]; 

// Cela permet de choisir une arme de manière aléatoire.


// TODO


$indyWeapon = '???';


if ($opponentWeapon === $weapons[0]){  //if the opponent have fists

    $indyWeapon = $weapons[2];  //indiana take his gun

} elseif($opponentWeapon === $weapons[1])  {  //if the opponent have a whip

    $indyWeapon = $weapons[0];   //indiana take his fists

} elseif($opponentWeapon === $weapons[2]){   //if the opponent have a gun

    $indyWeapon = $weapons[1];    //indiana take his whip

};

echo PHP_EOL .$indyWeapon;