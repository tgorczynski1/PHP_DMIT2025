<html>
<head>
<title>MySQL: Connect</title>
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

// If all goes well, nothing should appear on this screen

?>
</body>
</html>