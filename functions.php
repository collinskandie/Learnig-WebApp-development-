<!DOCTYPE html>
<html>
	<head>
		<title>Functions</title>
	</head>
	<body>
	<form name="form1" action="functions.php" method="_GET">
	 <input type="number" name="num" size="30"><br/>
	 <input type="Submit" name="button1" value="Submit">
	</form>			
	<?php
	if (isset($_GET['button1']))
	{
		$x=1; //this initializes the first day given the money.
		$y=1; //this initializes the amount given on the first day.
		$n=$_GET['num'];
		while ($x<=$n) 
		{
			$y=$y*2;
			$x++;
		}
		echo "value of $y";
	}		
		?>		
	</body>
</html>