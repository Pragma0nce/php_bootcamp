#!/usr/bin/php
<?php
	include("ft_is_sort.php");

	$tab = array("a", "b", "c");
	$tab[] = "d";
	if (ft_is_sort($tab))
		echo "Array is sorted\n";
	else
		echo "is not sorted\n";
?>