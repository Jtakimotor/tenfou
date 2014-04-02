#!/usr/bin/php
<?PHP

$i = 0;
$a = 1;
$array = explode(" ", $argv[1]);
foreach ($array as $strtmp)
	if ($strtmp != "")
		$ret[$i++] = $strtmp;
array_reverse($ret);
while ($i--)
{
	if (!$ret[$a])
		$a = 0;
	print("$ret[$a]\n");
	$a++;
}

?>
