<html>
	<head>
		<title>PHP Labs!</title>
	</head>
	<body>
		<?php
			date_default_timezone_set('GMT');
			echo "Hello! Today is " . date('l \t\h\e jS \of F Y');
			//Hello! Today is Sunday the 18th of October 2020			
		?> <br><br>

		<?php	
			$yearsSince = date("Y", mktime(0,0,0,date("m")-9, date("d")-25, date("Y")-1066));
			echo "The Battle of Stamford Bridge took place " . floor($yearsSince) . " years ago <br>";
			//The Battle of Stamford Bridge took place 954 years ago

			$today = new DateTime(date("Y-m-d"));
			$battleDate = new DateTime('1066-09-25');
			$interval = $battleDate->diff($today);  
			
			echo "The Battle of Stamford Bridge took place $interval->y years, $interval->m month/s, $interval->d day/s ago.";
			//The Battle of Stamford Bridge took place 954 years, 0 months and 23 days ago.
		?> <br><br>

		<?php	
			$future = new DateTime('2027-08-02');
			$diff = $future -> diff($today);
			echo "The 2nd of August 2027 is in $diff->y year/s, $diff->m month/s, $diff->d day/s.";
		?> <br><br>

		<?php
			$dates = array('3000-01-01', '2020-10-10', '2000-01-01', '1991-08-21');
			echo "Hello! Today is " . date('l \t\h\e jS \of F Y') . "<br>";

			foreach($dates as $d){
				$aDate = new DateTime($d);
				$difference = $aDate->diff($today);
				$resultDate = $aDate->format('Y-m-d'); //Couldn't be printed without this formatting
				echo "$difference->y year/s, $difference->m month/s and $difference->d day/s since $resultDate" . "<br>";
			}
		?> <br><br>

		<?php
			$dates = array('3000-01-01', '2020-10-10', '2000-01-01', '1991-08-21');
			echo "Hello! Today is " . date('l \t\h\e jS \of F Y') . "<br>";
			$nowDate = date('Y-m-d');

			foreach($dates as $d){
				$aDate = new DateTime($d);
				$difference = $aDate->diff($today);
				$formattedDate = $aDate->format('Y-m-d');
				//$diffMonths = intval($diff->format("%m")); //Used months, since days didn't work, but can be inaccurate

				if ($nowDate < $formattedDate){
					$word = "until";
				} else {
					$word = "since";
				}

				//if ($diffMonths > 0) {
				//	$word = "until";
				//} else {
				//	$word = "since";
				//}
				echo "$difference->y year/s, $difference->m month/s and $difference->d day/s $word $formattedDate" . "<br>";
			}
		?> <br><br>

		<?php
			$dates = $_GET;
			echo "Hello! Today is " . date('l \t\h\e jS \of F Y') . "<br>";
			$nowDate = date('Y-m-d');

			foreach($dates as $d){
				$aDate = new DateTime($d);
				$difference = $aDate->diff($today);
				$formattedDate = $aDate->format('Y-m-d');

				if ($nowDate < $formattedDate){
					$word = "until";
				} else {
					$word = "since";
				}

				echo "$difference->y year/s, $difference->m month/s and $difference->d day/s $word $formattedDate" . "<br>";
			}
		?>
	</body>
</html>