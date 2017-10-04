#!/usr/bin/php
<?php
	function ft_is_sort($arr){
		$sorted = $arr;
		sort($sorted);
		for ($i = 0; $i < sizeof($sorted); $i++){
			if ($sorted[$i] != $arr[$i]){
				return (0);
			}
		}
		return (1);
	}
?>