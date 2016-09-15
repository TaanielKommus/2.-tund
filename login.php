<?php

	//var_dump($_GET);
	
	//echo "<br>";
	
	//var_dump($_POST);
	
	$signupEmailError = "*";
	
	// kas keegi vajutas nuppu ja see on olemas
	
	if (isset ($_POST["signupEmail"])) {
		
		//on olemas
		// kas epost on tühi
		
		if (empty ($_POST["signupEmail"])) {
			
			// on tühi
			$signupEmailError = "Väli on kohustuslik";
			
		}
		
	}
	
	$signupPasswordError = "*";
	
	
	if (isset ($_POST["signupPassword"])) {
		
		
		if (empty ($_POST["signupPassword"])) {
			
			$signupPasswordError = "Väli on kohustuslik";
			
		} else {
			
			//parrol ei olnud tyhi
			
			if( strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "* Parool peab olema vähemalt 8 tähemärki pikk";
			}
		}
		
	}
	
	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST" >
			
			<label> E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			<label> Parool</label><br>
			<input name="loginPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Logi sisse">
			
		</form>
		

		<h1>Loo kasutaja</h1>
		
		<form method="POST" >
			
			<label> E-post</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			<label> Parool</label><br>
			<input name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
			
		</form>
		
	</body>
</html>