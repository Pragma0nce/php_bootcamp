#!/usr/bin/php
<?php
	function ft_split($line){
		$line = preg_replace('/\s+/'," ",$line);
		$line = trim($line);
		$arr = explode(" ", $line);
		sort($arr);
		return ($arr);
	}
?>

