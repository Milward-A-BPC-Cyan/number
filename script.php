<?php
$n = rand(1,6);
echo "$n \n";
if ($n == 1) {
	echo "Almost Snake Eyes";
} elseif ($n == 6) {
	echo "Winner";
} 
else {
	echo "You didn't win, click the roll button to play again";
}
?>
