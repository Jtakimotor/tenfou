#!/usr/bin/php
<?PHP

$i = 0;
$result = array();
$alpha = array();
$num = array();
$rest = array();
array_shift($argv);
while ($i+1 < $argc)
{
	$argv[$i] = trim($argv[$i]);
	$i++;
}
$i = 0;
while (strstr($argv[$i], "  "))
{
	$argv = str_ireplace("  ", " ", $argv);
	if (!strstr($argv[$i], "  "))
		$i++;
}
foreach($argv as $tmp)
	$ret[$i++] = explode(" ", $tmp);
$i = 0;
while ($i < count($ret))
{
	if ($ret[$i] != "")
		$result = array_merge($result, $ret[$i]);
	$i++;
}
$i = 0;
$a = 0;
$b = 0;
natcasesort($result);
foreach($result as $tmp)
{
	if (($tmp >= "A" && $tmp <= "Z") || ($tmp >= "a" && $tmp <= "z"))
	{
		$alpha[$i] = $tmp;
		$i++;
	}
	else if (is_numeric($tmp))
	{
		$num[$a] = $tmp;
		$a++;
	}
	else
	{
		$rest[$b] = $tmp;
		$b++;
	}
}
rsort($num);
$result = array_merge($alpha, $num);
$result = array_merge($result, $rest);
$i = 0;
while ($i < count($result))
{
	print($result[$i]);
	echo "\n";
	$i++;
}

?>
