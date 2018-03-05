<?php

function stringCount($str, $n){
 
if (mb_strlen($str) > $n){
	echo rtrim(mb_strimwidth($str , 0,  $n)) . '...';
}
else {
	echo $str;
}
}
stringCount('A very long string!', 15);