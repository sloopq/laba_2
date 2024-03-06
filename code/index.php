<?php
/* Imagine a lot of code here */ 
 $very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ' and fries';

  
 // Don't change the line below
 echo "\nYour order is: $very_bad_unclear_name.";
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

 echo "Разница " . ($last_month - $this_month);
 echo "\n";



 $num_languages = 4;
 $months = 11;
 $days = $months * 16;

 $daysPerLangue = $days / 4;
 echo "Дней на каждый язык: ".$daysPerLangue;
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
 echo "Если всё пошло по плану: ".$answer;
 echo "\n";



 $a=10;
 $b=3;
 echo "Остаток от деления а на б: " . ($a % $b);
 echo "\n";

 if ($a % $b == 0){
    echo 'Делится '.($a / $b);
 }else{
    echo "Делится с остатком: ".($a % $b);
 }
 echo "\n";



 $st = pow(2,10);
 echo "2 в 10й степени: ".$st;
 echo "\n";
 $st = sqrt(245);
 echo "Корень из 245: ".$st;
 echo "\n";

 $array = [4, 2, 5, 19, 13, 0, 10];
 $sumOnSquares = 0;

 foreach ($array as $value){
    $sumOnSquares += pow($value,2);
 }
 $sqrt = sqrt($sumOnSquares);
 echo "Квадратный корень из суммы квадратов: ".$sqrt;
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
echo "Минимальное число: ".$min,"\n", "Максимальное число: ".$max;
echo "\n";


$r = rand(1,100);
echo "Случайное число: ".$r;
echo "\n";  

$arrRand = [];
for ($i = 0; $i<10; $i++){
    $arrRand[] = rand(1,100);
}
$mass = "";
foreach ($arrRand as $number){
    $mass .= $number." ";
}
echo "Массив случайных чисел: ".$mass;
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
    if ($k%$i == 0){
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
        $k+=1;
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