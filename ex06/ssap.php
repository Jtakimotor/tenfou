#!/usr/bin/php
<?PHP

$i = 0;
$result = array();
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
sort($result);
$i = 0;
while ($i < count($result))
{
	print("$result[$i]\n");
	$i++;
}

?>
