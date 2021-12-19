<html>
	<head>
		<title>PHP Labs!</title>
	</head>
	<body>
		<?php
			date_default_timezone_set('UTC');
			echo "Hello! Today is " . date('l \t\h\e jS \of F Y');
			//Hello! Today is Sunday the 18th of October 2020			
		?> <br>
		<?php	
			$yearsSince = date("Y", mktime(0,0,0,date("m")-9, date("d")-25, date("Y")-1066));
			echo "The Battle of Stamford Bridge took place " . floor($yearsSince) . " years ago";
			//The Battle of Stamford Bridge took place 954 years ago
		?>
	</body>
</html>