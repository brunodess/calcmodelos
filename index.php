<?php

if (array_key_exists("calc",$_POST)){
	$imin = $_POST['imin'];
	$imax = $_POST['imax'];
	$lambda = $_POST['lambda'];
	$t = $_POST['t'];
	$sum = 0;

	for ($i = $imin; $i<=$imax; $i++){
		$sum +=  ( (M_E^(-1*$lambda*$t)) * ( ($lambda*$t)^$i ) )/(gmp_fact ($i));
	}

	$comp = 1-$sum; 
	echo "Soma: $sum<br> Complementar: $comp<br> <a href='http://www.brunodess.com.br/calcmodelos'>Voltar</a>";
} else {
	
?>
<form action="#" method="POST">
	<input type="number" name="imin" />
	<label for="imin">I min</label><br>
	<input type="number" name="imax" />
	<label for="imax">I max</label><br>
	<input type="text" name="lambda" />
	<label for="lambda">Lambda</label><br>
	<input type="number" name="t" />
	<label for="t">t</label><br>
	<input type="submit" />
</form>
<?php } ?>