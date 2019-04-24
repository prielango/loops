<?php

	$months = 24;
	$carPrice = 30000;
	$depreciated = 0.02;

	for (; $months > 0 ;) {
		$carPrice -= $carPrice * $depreciated;
		$months--;
	}

	print $carPrice;
