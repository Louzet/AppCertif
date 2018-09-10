<?php

if(! function_exists ('time_ago')){

	function time_ago($timestamp)
	{	
		date_default_timezone_set('Europe/Paris');

		$now = time();
		
		$time_ago = strtotime($timestamp);

		$diff_time = $now - $time_ago;

		$seconds = $diff_time;

		$minutes = round($seconds / 60 );  				/** 60 = 1min **/

		$hours = round($seconds / 3600 );				/** 3600 = 1heure **/

		$days = round($seconds / 86400 );				/** 86400 = 1jour **/

		$weeks = round($seconds / 604800 );				/** 604800 = 1semaine **/

		$months = round($seconds / 2629440 );			/** 2629440 = 1mois **/

		$years = round($seconds / 31553280 );			/** 31553280 = 1an **/

		/**
		 * conditions
		 */

		if($seconds <= 60 )
		{
			return "posté à l'instant";
		}
		else if($minutes <= 60)
		{
			if( $minutes == 1 )
			{
				return "posté il y a une minute";
			}
			else{
				return "posté il y a $minutes minutes";
			}
		}
		else if( $hours <= 24 )
		{
			if( $hours == 1 )
			{
				return "posté il y a une heure";
			}
			else{
				return "posté il y a $hours heures";
			}
		}
		else if( $days <= 7 )
		{
			if( $days == 1 )
			{
				return "posté il y a un jour";
			}
			else{
				return "posté il y a $days jours";
			}
		}
		else if( $weeks <= 4.3 )
		{
			if( $weeks == 1 )
			{
				return "posté il y a une semaine";
			}
			else{
				return "posté il y a $weeks semaines";
			}
		}
		else if( $months <= 12 )
		{
			if( $months == 1 )
			{
				return "posté il y a un mois";
			}
			else{
				return "posté il y a $months mois";
			}
		}
		else
		{
			if( $years == 1 )
			{
				return "posté il y a un an";
			}
			else{
				return "posté il y a $years ans";
			}
		}
	}

}
