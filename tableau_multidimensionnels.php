<?php
$movies = [
    "Indiana Jones et le Cadran de la destinée" => ["harrison Ford","John-Henry Butterworth","David Koepp"],
    "Indiana Jones et le Temple maudit" => ["Harrison Ford","Kate Capshaw","Ke Huy Quan"],
    "Indiana Jones et le royaume du crâne de cristal" => ["Harrison Ford","Cate Blanchett","Karen Allen "],
];

$presentation="Dans le film";
$presentation2=",principaux acteurs sont:";

// var_dump($movies);


foreach($movies as $keys => $actors){
    foreach($actors as $actor){
        // echo $actors;
        echo $presentation ." ". $keys ." ". $presentation2 ." ". PHP_EOL . "-". $actor . PHP_EOL ;
         
    };
    
   
};

