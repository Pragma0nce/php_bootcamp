#!/usr/bin/php
<?php
	function ft_split($line){
		$line = preg_replace('/\s+/'," ",$line);
		$line = trim($line);
		$arr = explode(" ", $line);
		return ($arr);
	}
	if ($argc < 2)
		return (0);
	$arr = ft_split($argv[1]);
	$temp = $arr[0];
	unset($arr[0]);
	$arr[] = $temp;
	$line = implode(" ", $arr);
	echo $line."\n";
?>