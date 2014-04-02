#!/usr/bin/php
<?PHP

while (!feof(STDIN))
{
	echo "Entrez un nombre: ";
	$line = trim(fgets(STDIN));
	if (is_numeric($line))
	{
		if ($line % 2 == 0)
			echo "Le chiffre $line est pair\n";
		else
			echo "Le chiffre $line est impair\n";
	}
	else
		echo "'$line' n'est pas un chiffre\n";
}

?>
