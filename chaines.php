<?php


$message1= "0@sn9sirppa@#?ia'jgtvryko1";

$message2= "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";

$message3= "aopi?sgnirts@#?sedhtg+p9l!";


$lengthMess1= strlen($message1)/2;

// echo $lengthMess1 . PHP_EOL;


$lengthMess2= strlen($message2)/2;

// echo $lengthMess2 . PHP_EOL;


$lengthMess3= strlen($message3)/2;

// echo $lengthMess3 . PHP_EOL;


$rest1 =substr($message1, 5,13 );

// echo "$rest" . PHP_EOL;

$rest2 =substr($message2, 5,23 );

// echo "$rest" . PHP_EOL;

$rest3 =substr($message3, 5,13 );

// echo "$rest" . PHP_EOL;



$rest1_replace = str_replace('@#?', ' ', $rest1);

$rest2_replace = str_replace('@#?', ' ', $rest2);

$rest3_replace = str_replace('@#?', ' ', $rest3);


$decryptedMsg1 = strrev($rest1_replace);

$decryptedMsg2 = strrev($rest2_replace);

$decryptedMsg3 = strrev($rest3_replace);

echo "$decryptedMsg1 $decryptedMsg2 $decryptedMsg3";