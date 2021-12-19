<html>
	<head>
		<title>PHP Labs!</title>
	</head>
	<body>
		<?php
			date_default_timezone_set('UTC');
			echo "Hello! Today is " . date('l \t\h\e jS \of F Y');
			//Hello! Today is Sunday the 18th of October 2020			
		?> <br><br>
		<?php	
			$yearsSince = date("Y", mktime(0,0,0,date("m")-9, date("d")-25, date("Y")-1066));
			echo "The Battle of Stamford Bridge took place " . floor($yearsSince) . " years ago <br>";
			//The Battle of Stamford Bridge took place 954 years ago

			$today = new DateTime(date("Y-m-d"));
			$warDate = new DateTime('1066-09-25');
			$interval = $warDate->diff($today);  
			
			echo "The Battle of Stamford Bridge took place $interval->y years, $interval->m month/s, $interval->d day/s ago." ;
			//The Battle of Stamford Bridge took place 954 years, 0 months and 23 days ago.
		?> <br><br>
		<?php	
			$future = new DateTime('2027-08-02');
			$diff = $future -> diff($today);
			echo "The 2nd of August 2027 is in $diff->y year/s, $diff->m month/s, $diff->d day/s ago." ;
		?> <br><br>
		<?php
			$dates = array('3000-01-01', '2020-10-10', '2000-01-01', '1991-08-21');
			echo "Hello! Today is " . date('l \t\h\e jS \of F Y') . "<br>";

			foreach($dates as $d){
				echo $d . "<br>";
				$date = new DateTime($d);
				$dif = $date->diff($today);
				echo "$dif->y year/s, $dif->m month/s and $dif->d day/s since $date" . "<br>";
			}


		?>
	</body>
</html>