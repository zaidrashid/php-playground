<!-- 
	Zaid Rashid
	Time Zone converter for PHP
	Test Code on 17/9/2014
	Will be enhanced from time to time
 -->

 
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">

	</head>
	
	<body>
	<?php require("php/time_convert.php");?>

	<div id="main">
		<div id="title">Time Converter</div>
		<div class="underline"></div>
		
		<div class="overall-holder">
		<!-- 
			send the correct time zone string into the public static function 
			for GetTime and GetTimeZone
		 -->

			<div class="time-holder local">
				<span class="time"><?php echo Time::GetTime('Asia/Kuala_Lumpur')?></span>
				<span class="time-zone"><?php echo Time::GetTimeZone('Asia/Kuala_Lumpur')?></span>
			</div>

			<div class="time-holder">
				<span class="time"><?php echo Time::GetTime('Europe/Moscow')?></span>
				<span class="time-zone"><?php echo Time::GetTimeZone('Europe/Moscow')?></span>
			</div>

			<div class="time-holder">
				<span class="time"><?php echo Time::GetTime('America/Louisville')?></span>
				<span class="time-zone"><?php echo Time::GetTimeZone('America/Louisville')?></span>
			</div>
		</div>
	</div>
	</body>

</html>