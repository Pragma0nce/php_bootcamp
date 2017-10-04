#!/usr/bin/php
<?php
	function ft_split($line){
		$line = preg_replace('/\s+/'," ",$line);
		$line = trim($line);
		$arr = explode(" ", $line);
		sort($arr);
		return ($arr);
	}
	$joined = implode(" ", $argv);
	$arr = ft_split($joined);
	unset($arr[0]);
	foreach ($arr as $line) {
		echo $line."\n";
	}

?>