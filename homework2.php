<?php
require_once 'function.php';
$arrA =
[
'a' => 1,
'b' => 2,
'c' => 3,
];
//$value = array_values($arrA);
//$keys = array_keys($arrA);
//echo '<br>'. var_dump($keys);
//echo  '<br>'. var_dump($value);
//$letter = ['a','b','c'];
//$number = [1, 2, 3];
//
//$arrB = array_combine($letter,$number);
//echo '<br>'. var_dump($arrB);

//$arrFlips = array_flip($arrA);
//echo '<br>'. var_dump($arrFlips);
//
//$arrB = [1, 2, 3, 4, 5];
//$arRev = array_reverse($arrB);
//echo '<br>'. var_dump($arRev);
//$arrC = ['a', '-', 'b', '-', 'c', '-', 'd'];
//$arrKey = array_search('-', $arrC);
//echo '<br>'. var_dump($arrKey);
//$arr1 = array_splice($arrC, 1, 1);
//echo   var_dump($arrC);

//$arrB = ['a','b','c','d','e'];
//$replacements = [0 => '!', 3 => '!!'];
//
//
//$arrRep = array_replace($arrB,$replacements);
//echo debug($arrRep);


//function getYears()
//{
//    $years = range(1, 2022);
//    $thirteens = [];
//    foreach($years as $year)
//    {
//       if(getDigitsSum($year) === 13)
//       {
//       $thirteens[] = $year;
//       }
//    }
//       for($i = 0; $i < count($thirteens); $i++)
//       {
//       echo $thirteens[$i]. ', ';
//        }
//}
// echo getYears();
//
//function getDigitsSum($num)
//{
// return array_sum(str_split($num));
//}
//
function isEven($item) : int
{
   if( $item % 2 == 0)
    {
       echo "False";
   }else{
     echo "true";
    }
    return ($item);
}

echo isEven(115);

$arr1 = [1, 10, 25, 30, 40, 51, 53, 85, 87, 9];
function isEvenArr($arr)
{
    $arr2 = [];
    foreach ($arr as $key => $value)
    {
        if ($value % 2 ==0)
        {
            $arr2[] += $value;
        }
    }
    return $arr2;
}

debug(isEvenArr($arr1));

function getDivisors ($x)
{
   $arrDivisors = [];
   if (is_int($x))
{
    for ($i = 1; $i <= abs($x); $i++)
{
    if (($x % $i) == 0)
{
    $arrDivisors[] = $i;
}
 }
   } else echo 'Ошибка';

    return $arrDivisors;
}

debug(getDivisors(65));
debug(getDivisors(20));
debug(getDivisors('привет'));

function getCommonDivisors($a, $b)
{
    $arrA = [];
    $arrB = [];
    $arrC = [];

    if (is_int($a) && is_int($b))
    {
        $arrA = getDivisors($a);
        $arrB = getDivisors($b);
        $arrC = array_intersect($arrA, $arrB);
    } else echo 'ошибка';

    return $arrC	;
}
debug(getCommonDivisors(20,65));
debug(getCommonDivisors(-6, 18));
