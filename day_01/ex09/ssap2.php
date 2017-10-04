#!/usr/bin/php
<?php
	function is_alpha($c)
	{
		if (preg_match('/^[a-z]/i', $c[0])){
			return (1);
		}
		return (0);
	}

	function cmp($a, $b){
		// Check if A starts with an alphabet char
		echo "Comparing: $a to $b\n";
		if (is_alpha($a))
		{
			// Check if B starts with an alphabet char
			if (is_alpha($b)){
				if (strtolower($a) > strtolower($b))
					return (1);
				else if (strtolower($a) < strtolower($b))
					return (-1);
			}
			return (-1);
		}
		// Check if A starts with a number
		else if (is_numeric($a[0]))
		{
			if (is_numeric($b[0]))
			{
				if ($a > $b)
					return (1);
				else
					return (-1);
			}
			else if (is_alpha($b))
				return (-1);
		}
		else{
			return (-1);
		}
	}

	function ft_split($line){
		$line = preg_replace('/\s+/'," ",$line);
		$line = trim($line);
		$arr = explode(" ", $line);
		unset($arr[0]);
		usort($arr, 'cmp');
		print_r($arr);
		return ($arr);
	}
	$joined = implode(" ", $argv);
	$arr = ft_split($joined);
?>