#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$i = 0;
	$array = explode(" ", $str);
	foreach ($array as $strtmp)
		if ($strtmp != "")
			$ret[$i++] = $strtmp;
	sort($ret);
	return($ret);
}
?>
