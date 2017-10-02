<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br>";
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

echo "<br>";

if(($tar == $date)>0)
{
	echo "The future";
}
elseif(($tar == $date)<0)
{
	echo "the past";
}
elseif(($tar == $date)==0)
{
	echo "oops";
}

echo "<br>";



for ($i=0; $i < strlen($date) ; $i++)
{
	$letter = substr($date,$i,1);
	if($letter =="/")
		echo $i . " ";
}
echo "<br>";

echo str_word_count($date);
echo "<br>";

$name = "Edward Carbonaro";
echo strlen($name);
echo "<br>";

echo ord($name);
echo "<br>";

echo substr($date,-2);
echo "<br>";

$x =  explode("/",$date);
echo "<br>";
print_r($x);
echo "<br>";

foreach($year as $x)
{
	switch($x)
	{
		case 2012:
			echo "False ";
			break;

		case 396:
			echo "False ";
			break; 

		case 300:
			echo "False ";
			break;

		case 2000:
			echo "True ";
			break;

		case 1100:
			echo "False ";
			break;

		case 1089:
			echo "False ";
			break;
	}
}
echo "<br>";


for ($i=0, $size = count($year); $i < $size; $i++)
{
	// switch($year[$i])
	// {
	// 	case 2012:
	// 		echo "False ";
	// 		break;

	// 	case 396:
	// 		echo "False ";
	// 		break; 

	// 	case 300:
	// 		echo "False ";
	// 		break;

	// 	case 2000:
	// 		echo "True ";
	// 		break;

	// 	case 1100:
	// 		echo "False ";
	// 		break;

	// 	case 1089:
	// 		echo "False ";
	// 		break;
	// }
	if ($year[$i]%400 == 0)
		echo "$year[$i] is a leap year".", ";
	else
		echo "$year[$i] is not a leap year".", ";
}

?>