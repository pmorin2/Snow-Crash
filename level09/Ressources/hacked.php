<?php
$str = str_split($argv[1]);
$nbr = 0;
foreach($str as $c) {
	echo(chr(ord($c) - $nbr));
	$nbr += 1;
}
echo("\n");
?>
