<?php
	$grikiai = 5000;
	$days = 0;
	while ($grikiai > 0) {
		$grikiai -= rand(200,500);
		$days++;
	}
	echo "kiek dienu: ",$days, "<br>";
	echo "pasibaigs: ", date("Y:m:d", strtotime("+$days days"));

