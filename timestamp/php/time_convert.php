<?php

	// Zaid Rashid
	// Time Zone converter for PHP
	// Test Code on 17/9/2014
	// Will be enhanced from time to time
 
	class Time{

		public static function GetTime($timezone)
		{
			try{
				$utcTime = new DateTime();
				$new = $utcTime->setTimezone(new DateTimeZone($timezone));
				return $new->format('Y-m-d H:i:s');
			}
			catch(Exception $ex){
				return $ex->getMessage();
			}
		}

		public static function GetTimeZone($timezone)
		{
			try{
				return timezone_name_get(new DateTimeZone($timezone)) ;
			}catch(Exception $ex){
				return $ex->getMessage();
			}
		}
	}
	



?>