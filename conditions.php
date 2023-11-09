<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

$indyWeapon = '???';

if ( $weapons[2] < $weapons[1]){
    $indyWeapon = $weapons[2];
}elseif($weapons[0]<$weapons[1])  {
    $indyWeapon= $weapons[0];
}elseif($weapons[1]<$weapons[2]){
    $indyWeapon=[1];
} else{
    $indyWeapon=$opponentWeapon;
};
echo $indyWeapon;