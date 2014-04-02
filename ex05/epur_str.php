#!/usr/bin/php
<?php

	$final_str = str_ireplace("  ", " ", $argv[1]);
	while (strstr($final_str, "  "))
	{
		$final_str = str_ireplace("  ", " ", $final_str);
	}
	$final_str = trim($final_str);
	$array = explode(" ", $final_str);
	print("$final_str\n");

?>
