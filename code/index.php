<?php
/* Imagine a lot of code here */ 
 $very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ' and fries';

  
 // Don't change the line below
 echo "\n Your order is: $very_bad_unclear_name.";
 echo "\n";


 $a = 15;
 echo $a;
 echo "\n";
 
 $b = 16.3;
 echo $b;
 echo "\n";

 echo 16 - 4;
 echo "\n";


 
 $last_month = 1187.23;
 $this_month = 1089.98;

 echo "Разница ($last_month - $this_month)";
 echo "\n";



 $num_languages = 4;
 $months = 11;
 $days = $months * 16;

 $daysPerLangue = $days / 4;
 echo "Дней на каждый язык: $daysPerLangue";
 echo "\n";



 echo "Степень: ". (8**2);
 echo "\n";



 $my_num = 56;
 $answer = $my_num;
 $answer += 2;
 $answer *= 2;
 $answer -= 2;
 $answer /= 2;
 $answer -= $my_num;
 echo "Если всё пошло по плану: $answer";
 echo "\n";



 $a=10;
 $b=3;
 echo "Остаток от деления а на б: ($a % $b)";
 echo "\n";

 if ($a % $b == 0){
    echo 'Делится '.($a / $b);
 }else{
    echo "Делится с остатком: ($a % $b)";
 }
 echo "\n";



 $st = pow(2,10);
 echo "2 в 10й степени: $st";
 echo "\n";
 $st = sqrt(245);
 echo "Корень из 245: $st";
 echo "\n";

 $array = [4, 2, 5, 19, 13, 0, 10];
 $sumOnSquares = 0;

 foreach ($array as $value){
    $sumOnSquares += pow($value,2);
 }
 $sqrt = sqrt($sumOnSquares);
 echo "Квадратный корень из суммы квадратов: $sqrt";
 echo "\n";


// Найдем квадратный корень из 379 и округлим до целых, до десятых, до сотых
$number1 = 379;
$sqrt1 = sqrt($number1);
$result1 = array(
    'integer' => round($sqrt1), // Округление до целых
    'tenths' => round($sqrt1, 1), // Округление до десятых
    'hundredths' => round($sqrt1, 2) // Округление до сотых
);
var_dump($result1);

// Найдем квадратный корень из 587 и округлим результат в большую и меньшую сторону
$number2 = 587;
$sqrt2 = sqrt($number2);
$result2 = array(
    'floor' => floor($sqrt2), // Округление вниз
    'ceil' => ceil($sqrt2) // Округление вверх
);
var_dump($result2);



// min and max

$array1 = [4, -2, 5, 19, -130, 0, 10];
$min = min($array1);
$max = max($array1);
echo "\n";
echo "Минимальное число: $min \n", "Максимальное число: $max";
echo "\n";


$r = rand(1,100);
echo "Случайное число: $r";
echo "\n";  

$arrRand = [];
for ($i = 0; $i<10; $i++){
    $arrRand[] = rand(1,100);
}
$mass = "";
foreach ($arrRand as $number){
    $mass .= "$number ";
}
echo "Массив случайных чисел: $mass";
echo "\n"; 


// Работа с модулем
$a = -5;
$b = 5;
$modRazn = abs($a-$b);
echo $modRazn;
echo "\n";

$arrMod = [1, 2, -1, -2, 3, -3];
$arrModNew = [];
foreach ($arrMod as $value){
    $arrModNew[] = abs($value);
}
var_dump($arrModNew);
print_r($arrModNew);

$k = 14;
$mass = "";
for ($i = 1; $i<$k; $i++){
    if ($k  % $i == 0){
        $mass .= " ".$i;
    }
}
echo $mass;
echo "\n";


$arrSumm = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arrSummCheck = [];
$summ = 0;
$k = 0;
foreach ($arrSumm as $value){
    if ($summ > 10){
        break;
    }
    else{
        $summ += $value;
        $k += 1;
    }
}
echo $k;
echo "\n";

// Функции

function printStringReturnNumber($str){
    echo $str."\n"."Len: ".strlen($str);
}
$my_str = "Hello, my name is Vladimir";

echo printStringReturnNumber($my_str);
echo "\n";


$str = "I'm fine";
function increaseEnthusiasm($string){
    echo $string."!";
}
echo increaseEnthusiasm($str);
echo "\n";

$str = "How are U?";
function  repeatThreeTimes($string, $times){
    for ($i = 0; $i < $times; $i++){
        echo $string." ";
    }
}
echo  repeatThreeTimes($str,3);
echo "\n";
echo  increaseEnthusiasm(repeatThreeTimes($str,3));
echo "\n";

$str = "123456789123456";
function cut($string, $k = 10){
    echo substr($string,$k);
}
echo cut($str);
echo "\n";

function recursityElenemt($array, $index = 0){
    if($index < count($array)){
        echo $array[$index]." ";
        recursityElenemt($array, $index+1);
    }
}
$array = [1, 2, 3, 4, 5];
echo recursityElenemt($array);
echo "\n";




function sumDig($number){
    $sum = 0;
    while ($number > 0 || $sum > 9){
        if ($number == 0) {
            $number = $sum;
            $sum = 0;
        }
        $sum += $number % 10;
        $number = (int)($number / 10); 
    }
    echo $sum;  

}
$a = 987654321;
echo sumDig($a);
echo "\n";


$array = [];
$k = 5;
for ($i = 1; $i < ($k + 1); $i++) {
    $string = "";
    for ($j = 0; $j < $i; $j++){
        $string .= 'x';
    }
    $array[] = $string;
}
print_r($array);

// Еще можно через str_repeat
$array = [];
$k = 5;
for ($i = 1; $i < ($k+1); $i++){
    $array[] = str_repeat("x", $i);
}
print_r($array);
//arrayFill
function arrayFill($string, $k){
    for ($i = 0; $i<$k; $i++){
        $array[] = $string;
   }
   print_r($array);
}

echo arrayFill("k", 6);

//Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]].
//Найдите сумму элементов этого массива. 
//Массив, конечно же, может быть произвольным

function sumOfArrays($array){
    $sum = 0;
    foreach ($array as $subArray){
        foreach ($subArray as $value){
            $sum += $value;
        }
    }
    echo $sum;
}

$array = [[1,2],[3,5]];
echo sumOfArrays($array);
echo "\n";

$arr = [];
$n=1;
$rows = 3;
$cols = 3;
for ($i = 0; $i< $rows; $i++){
    $subArr = [];
    for ($j = 0; $j< $cols; $j++){
        $subArr[] = $n;
        $n++;
    }
    $arr[] = $subArr;
}
print_r($arr);

$arr = [2,5,3,9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;
echo "\n";


$user = [
    "name" => "Vladimir",
    "username" => "Beloded",
    "patronymic" => "Sergeevich"

];

echo $user["name"]." ".$user["username"]." ".$user["patronymic"];
echo "\n";


$date = [
    "year" => "2024",
    "month" => "03",
    "day" => "08"

];

echo $date["year"]."-".$date["month"]."-".$date["day"];
echo "\n";


// Количество элементов в массиве

$arr = ["a","b","c","d","e"];
$n = 0;
foreach ($arr as $value){
    $n+=1;
}
echo "Количество элементов в массиве: $n";
echo "\n";

// Последний и предпоследний элементы

$arr = ["a","b","c","d","e"];
$n = 0;
foreach ($arr as $value){
    $n+=1;
}
echo "Последний и предпоследний элементы: ";
echo "\n";
echo $arr[($n-1)];
echo "\n";
echo $arr[($n-2)];
echo "\n";

//Конструкция if else


function sum10($a,$b){
    if ($a+$b > 10){
        echo "true";
    }
    else{
        echo "false"; 
    }    
}
echo sum10(2,1);
echo "\n";


function equalNumber($a,$b){
    if ($a == $b){
        echo "true";
    }
    else{
        echo "false"; 
    }    
}
echo equalNumber(2,1);
echo "\n";
$int = 100;
echo ($int == 0) ? "Верно" : "Неверно";
echo "\n";


function numberInTheRange($a){
    if ($a < 10 || $a > 99){
        echo "число меньше 10 или больше 99";
    }
    else{
        if ((($a % 10) + floor($a / 10)) < 10){
            echo "сумма цифр однозначна";
        }
        else{
            echo "сумма цифр двузначна";
        }
    }
}

echo numberInTheRange(28);
echo "\n";


$arr = [1,5,7,53];
$n = 0;
foreach ($arr as $value){
    $n++;
}
if ($n == 3){
    $sum = $arr[0] + $arr[1] + $arr[2];
    echo $sum;
    echo "\n";
}
else{
    echo "В массиве не 3 элемента";
    echo "\n";
}


//ex 19 Cycles
$n = 0;
for ($i = 1; $i < 21; $i++){
    for ($j = 1; $j < ($i+1); $j++){
        echo "x";
       
    }
    echo "\n";
}

//ex 20 Combination of functions


$arr = [2,4,8,10];
$srAr = array_sum($arr) / count($arr);
echo "Среднее арифметическое: $srAr";
echo "\n";

// Сумма чисел от 1 до 100
$i = 100;
$sum = ($i * ($i + 1)) / 2; // Формула арифметической прогрессии

echo "Сумма чисел от 1 до 100: $sum";
echo "\n"; 

// Квадратные корни
$arr = [4,9,16,25];
print_r(array_map("sqrt", $arr));
echo "\n"; 


// Сумма пар чисел

$str = '1234567890';
$sum = array_sum(str_split($str, 2)); // после применения str_split str превращается в массив -> можно использовать array_sum
print_r($sum);
echo "\n"; 

$keys = range("a","z"); // range — Создаёт массив, содержащий диапазон элементов
$value = range(1,26);
print_r(array_combine($keys , $value)); //array_combine — Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений