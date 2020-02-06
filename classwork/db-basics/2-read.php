<html>
<head>
<title>MySQL Basics - Read</title>
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

/* 
	Reading from a DB: SELECT
	=====
	* means to retrieve all the fields; can use "field1, field2,etc") instead
*/
// DOCUMENTATION: https://www.w3schools.com/php/func_mysqli_query.asp
// DOCUMENTATION: https://www.php.net/manual/en/mysqli.query.php
$result = mysqli_query($con, "SELECT * FROM basics") or die(mysqli_error($con));
/*
	or die()
	=====
	DOCUMENTATION: https://www.w3schools.com/php/func_misc_die.asp
	DOCUMENTATION: https://www.php.net/manual/en/function.die.php
*/

/*
	Fetching each row from the results of our mysqli_query
*/
// DOCUMENTATION: https://www.w3schools.com/php/func_mysqli_fetch_array.asp
// DOCUMENTATION: https://www.php.net/manual/en/mysqli-result.fetch-array.php
while($row = mysqli_fetch_array($result)){
		echo "<hr>";
		echo $row['bid']. "<br>";
		echo $row['name']. "<br>";
		echo $row['address']. "<br>";
		echo $row['occupation']. "<br>";
}

?>
</body>
</html>