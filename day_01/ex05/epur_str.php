#!/usr/bin/php
<?php

	if ($argc != 2)
		return (0);
	$line = preg_replace('/\s+/'," ",$argv[1]);
	$line = trim($line);
	echo $line."\n";
?> 
