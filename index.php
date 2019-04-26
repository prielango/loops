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
	'baisu',
	'baisu',
	'baisu',
	'baisu',
];

// $bendri = array_intersect($mano, $draugo);

$bendri = [];

foreach ($mano as $prisiminimas) {
	if (in_array($prisiminimas, $draugo) && !in_array($prisiminimas, $bendri)) {
		$bendri[] = $prisiminimas;
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>bla</title>
</head>

<body>
	<ul>
		<?php foreach ($bendri as $value) : ?>
			<?= "<li>$value</li>"; ?>
		<?php endforeach; ?>

	</ul>
</body>

</html>