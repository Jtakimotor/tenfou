#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
	$i = 0;
	$tmp = $tab;
	sort($tmp);
	while (count($tab) > $i)
	{
		if ($tab[$i] != $tmp[$i])
			return (0);
		else
			$ret = 1;
		$i++;
	}
	return ($ret);
}

include("ft_is_sort.php");

$tab = array("!/@#;^",  "42", "Hello world", "Salut", "zZzZzZz");
if (ft_is_sort($tab))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n'est pas trie\n";
?>
