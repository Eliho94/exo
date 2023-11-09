
<?php
$movies = [
    "Les Aventuriers de l'arche perdue" => 1981  ,
    "Indiana Jones et le royaume du crâne de cristal" => 2008  ,
   "Piège de cristal"  =>  1988,
];
arsort($movies);
foreach($movies as $key => $movie){
    echo $key ."-". $movie . PHP_EOL ; 
     
}