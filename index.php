<?php

$mano = [
	'saule',
	'sviecia',
	'dangus',
	'dumai',
	'tamsu',
	'baisu'
];

$draugo = [
	'saule',
	'sviecia',
	'dangus',
	'grazus',
	'apakina',
	'baisu'
];

$bendri = array_intersect($mano, $draugo);
var_dump($bendri);

?>

<!DOCTYPE html>
<html>
<head>
	<title>bla</title>
</head>
<body>
	<ul>
		<?php foreach ($bendri as $value) {
			print "<li>$value</li>";
		}; ?> 
			
	</ul>
</body>
</html>