<?php
$n1 = rand(1,6);
$n2 = rand(1,6);
echo "$n1 \n"
echo "$n2 \n"
if ($n1 xor $n2 == 1) {
	echo "Almost Snake Eyes";
} elseif ($n1 && $n2 == 1) {
	echo "Snake Eyes!";
} elseif ($n1 && $n2 == 6) {
	echo "DA TING GO SKKRRRRRRAT";
}
?>
