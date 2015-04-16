<?php

$imin = 0;
$imax = 0;
$lambda = 0;
$sum = 0;

for ($i = $imin; $i<=$imax; $i++){
	$sum +=  ( (M_E^(-1*$lambda)) * ($lambda^$i) )/($i);
}

echo $sum;
?>