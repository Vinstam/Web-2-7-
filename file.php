<?php

$very_bad_unclear_name = "15 chicken wings";

#order = &$very_bad_unclear_name;

$order.= "kek228";

echo "\nYourOrderIs:$very_bad_unclear_name.";

$num = 5;

echo "Here's your number: $num";

echo "</br>";

$dec = 5.1;

echo "$dec";

echo "12";

$last_month = 1187.23;
$this_month = 1089.98;

echo $last_month - $this_month;

$num_languages = 4;

$months = 11;

$days = 16 * $months;

$days_per_language = $days / $num_languages;

echo 8**2."\n";

$my_num = 5;

$answer = $my_num;

$asnwer += 2;

$answer *= 2;

$answer -= 2;

$answer /= 2;

$answer -= $my_num;

echo $answer."\n";

$a = 10;

$b = 3;

echo $a % $b;

if ($a % $b == 0)
{
	echo "a is divided by b and its result is "
	echo ($a / $b)."\n";
}
else
{
	echo "a isn't divided by b and modulo of a by b is "
	echo ($a/$b)."\n";
}
	
$st = pow(2,10);

$sq = sqrt(245);

$arr = [4,2,5,19,13,0,10];

$sum = 0;

foreach($arr as $d)
{
    $sum+=pow($d,2);
}

$sum= sqrt($sum)

$v = sqrt(379);

$int = round($v);

$ten = round($v,1);

$hun = round($v,2);

$v1 = sqrt(587);
$array = ["floor"=>floor($v1), "ceil"=>ceil($v1)];
echo "\n{$array["floo"]} {$array["ceil"]}";

$nums = [4,-2,5,19,-130,0,10];

$max  = $nums[0];

$min = $nums[0];

foreach($nums as $d)
{
    $max = max($max,$d);
    $min = min($min,$d);
}

$r = rand(1,100);

echo "Random number: $r\n";

$randomarray=[];

for($i =0; $i<10;$i++)
{
    $randomarray[$i]=rand(1,100);
}

$a = 5;

$b = 10;

echo abs($a-$b)."\n";

$arr = [4,5,6,7,-1,4,-4,-6,-7];

foreach($arr as $d)
{
	$d = abs($d);
}

$val = 30;

$arr = [];

$cnt = 0;


for ($i = 1; $i < sqrt($va); ++($i))
{
	if ($val % $i == 0)
	{
		$arr[cnt++] = ($val % $i);
		$arr[cnt++] = ($val / $i);
	}
}

// if i*i == val and i is int => sqrt(val) is also divisior of val;

if (sqrt($val) * sqrt($val) ==  $val)
{
	$arr[cnt++] = sqrt($val);
}

$arr = [1,2,3,4,5,6,7,8,9,10];

$cnt = 0;

$sum = 0;

while ($sum <= 10)
{
	$sum += $arr[$cnt++];
}

echo $cnt."\n";

function printStringReturnNumber()
{
	echo "some string\n";
	return 12;
}

$myNum = printStringReturnNumber();

echo $myNum."\n";

function increaseEnthusiasm(string $tmp)
{
	return $tmp."!";
}

echo increaseEnthusiasm("Cringe");

function repeatThreeTimes(string $tmp)
{
	for ($i = 0; $i < 2; ++($i))
	{
		$tmp.=$tm;
	}
	return $tmp;
	
}

echo repeatThreeTimes("Cringe")."\n";

echo increaseEnthusiasm(repeatThreeTimes("Cringe"))."\n";

function cut(string $tmp, int $cnt = 10)
{
	for ($i = 0; $i < $cnt; ++($cnt))
	{
		$tmp.=$tmp[0];
	}
	
	return $tmp;
}

$arr = [1,2,3,4];

function printNumberOfArray($arr, $i)
{
	if ($i < sizeof($arr))
	{
		echo $arr[$i]." ";
		printNumberOfArray($arr,$i + 1);
	}
	
}

echo printNumberOfArray($arr,0);

function sumOfDigits($number)
{
    $summa = 0;

    while($number>0)
    {
        $summa+= (int)($number%10);
        $number= (int)($number/10);
    }

    if($summa>9)
    {
        sumOfDigits($summa);
    }
    else
    {
        echo $summa;
    }
}

$arr;

function fillArray(&$arr,$n,$symbol)
{
	
	for ($i = 0; $i < $n; ++($i))
	{
		$arr[$i++] = $symbol;
	}
}

$Array = [[1,246,2,12],[21,0,12],[23,9]];
$sum = 0;
for($i=0;$i<sizeof($Array);$i++)
{
    for($j =0;$j<sizeof($Array[$i]);$j++)
    {
        $sum+=$Array[$i][$j];
    }
}

$array;

for ($i = 0; $i < 3; $i++)
{
	for ($j = 1; $j <= 3; $j++)
	{
		arr[$i][$j] = ($i*3) + $j; 
	}
}

$arr = [2,3,5,9];

$res = ($arr[0]*$arr[1]) + ($arr[2]*$arr[3]);

echo "$res\n";

$user = ["firstName" => "kebab", "lastName" => "kebabchik", "middleName" -> "kebabovich"];

echo $user["firstName"]." ".$user["lastName"]." ".$user["kebabovich"]."\n";

$arr = ['a','b','c','d','e'];

echo "cnt: sizeof($arr), first : $arr[0], last: $arr[sizeof($arr)-1]\n";

function isGreaterThan($first, $second)
{
	return ($first + $second) > 10;
}

function isEqual($first, $second)
{
	return $first === $second;
	
}

$arr = [1,3,4];

if (sizeof($arr) >= 3)
{
	echo "array_sum($arr)\n";
}

$tmp = "x";
$i = 5;

for ($j = 0; $j < $i; $j++)
{
	echo $tmp."\n";
	$tmp.="x";
}

$arr = [1,2,29,100];
echo  array_sum($arr)/sizeof($arr);
$arr3= range(1,100);
echo  array_sum($arr3)/sizeof($arr3);

$arr = array(1,4,9,16,25);
$arr = array_map("sqrt", $arr);
var_dump($arr);

$key = range('a', 'z');
$val = range(1,26);
$arr = array_combine($key, $val);
var_dump($arr);


$str = "1234567890";
$arr = str_split($str, 2);
$sum = array_sum($arr);
echo "$sum";