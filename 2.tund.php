<?php

	$age = 5;
	
	if ($age < 18) {
		
		echo "alaealine";
		
	} else {
		
		echo "täisealine";
		
	}

?>

<br>

<?php
	
	// for(1;2;3) {sisu}
	// 1. kord koige alguses $i = 0
	// 2. enne sisu iga kord $i < $age
	// 3. p2rast sisu iga kord $i = $i+1
	
	for ($i = 1; $i <= $age; $i = $i + 1) {
		
		echo $i."palju ";
		
	}
	
	echo "õnne";
	

?>

<br>

<?php
	//päev.kuu.aasta.tunnid.minutid.sekundid.nädalapäev
	
	echo date("d.m.Y. H:i:s. l");


?>