<?php  
	date_default_timezone_set('Europe/Amsterdam');

	$ochtend = date("06:00");
	$middag = date("12:00");
	$avond = date("18:00");
	$nacht = date("00:00");
	$tijd = date("H:i:s");


	if(strtotime($tijd) >= strtotime($ochtend) && strtotime($tijd) < strtotime($middag)){
		$goede = "morgen";
	}
	elseif(strtotime($tijd) >= strtotime($middag) && strtotime($tijd) < strtotime($avond)){
		$goede = "middag";
	}
	elseif(strtotime($tijd) >= strtotime($avond) && strtotime($tijd) > strtotime($nacht)){
		$goede = "avond";
	}
	elseif(strtotime($tijd) >= strtotime($nacht) && strtotime($tijd) < strtotime($ochtend)){
		$goede = "nacht";
	}
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="1">
	<title>B3W2O1</title>
	<style>
		.morgen{
			background-image: url(morning.png);
			background-size: 100%;
		}

		.middag{
			background-image: url(afternoon.png);
			background-size: 100%;
		}

		.avond{
			background-image: url(evening.png);
			background-size: 100%;
		}

		.nacht{
			background-image: url(night.png);
			background-size: 100%;
		}
		
		h1{
			text-align: center;
			color: white;
			font-style: oblique;
			font-size: 40px;
		}
	</style>
</head>
<body class="<?php echo $goede ?>">
		<h1>Goede <?php echo $goede ?></h1>
		<h1>Het is nu <?php echo $tijd ?></h1>
</body>
</html>