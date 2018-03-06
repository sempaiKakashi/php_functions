<?php

function arrayMinMax (array $arr){
if(count($arr) > 0){
$min = min($arr);
$max = max($arr);
return ['min' => $min, 'max' => $max];
}
else {
	echo "pshel von";
}
}

//генерируем случайные значения в массиве
for ($i = 0; $i < 10; $i++){
    $arr2[$i] = rand(0, 50);
}

//выводим минимальные и максимальные значения
print_r(arrayMinMax($arr2));
