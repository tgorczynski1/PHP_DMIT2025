<html>
<head>
<title>MySQL: Update</title>
</head>

<body>
<?php
/*
	Connecting to your MySQL server.
	=====
	"localhost" refers to the same computer as this current script.
*/
// DOCUMENTATION: https://www.w3schools.com/php/func_mysqli_connect.asp
// DOCUMENTATION: https://www.php.net/manual/en/function.mysqli-connect.php
$con = mysqli_connect("localhost","username","password","db-name");

/*
	Check connection
*/
// DOCUMENTATION: https://www.w3schools.com/php/func_mysqli_connect_errno.asp
// DOCUMENTATION: https://www.php.net/manual/en/mysqli.connect-errno.php
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// DOCUMENTATION: https://www.w3schools.com/php/func_mysqli_query.asp
// DOCUMENTATION: https://www.php.net/manual/en/mysqli.query.php
mysqli_query($con, "UPDATE basics SET name = 'Pebble Flintstone', address = '456 Quarry Blvd',occupation = 'little girl' WHERE bid= '2'") or die(mysqli_error($con));

/*
	or die()
	=====
	DOCUMENTATION: https://www.w3schools.com/php/func_misc_die.asp
	DOCUMENTATION: https://www.php.net/manual/en/function.die.php
*/
?>
</body>
</html>