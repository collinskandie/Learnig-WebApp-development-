<!DOCTYPE html>
<html>
	<head>
		<title>Checking ODD oe EVEN numbers</title>
	</head>
	<body>
	<form name="form1" action="first.php" method="_GET">
	 <input type="number" name="num" size="30"><br/>
	 <input type="Submit" name="button1" value="Submit">
	 </form>
	  <?php
	 if (isset($_GET['button1']))
	 {
	  $a=$_GET['num'];
	 if ($a % 2==0)
	 {
	 	echo "Given number $a is"."<br>"."<b>EVEN<b>";
	 }
	 else
	 {
	 	echo "Given number $a is"."<br>"."<b>ODD<b>";
	 }
	  echo "";
	 }
	 ?>
	 
	</body>
</html>