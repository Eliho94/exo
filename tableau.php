
<?php
$movies = [
    1981 => "Les Aventuriers de l'arche perdue",
    2008 => "Indiana Jones et le royaume du crâne de cristal",
    1988 => "Piège de cristal",
];
ksort($movies);
foreach($movies as $key => $movie){
    echo $key ."-". $movie ; 
     
}