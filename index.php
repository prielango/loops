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

?>

<!DOCTYPE html>
<html>
<head>
	<title>bla</title>
</head>
<body>
	<ul>
		<?php foreach ($mano as $key => $value) {
			print $value === $draugo[$key] ? "<li>$value</li>" : '';
		}; ?> 
			
	</ul>
</body>
</html>