<?php include ('mysql-connect.php');	?>
<html>
<head>
<title>MySQL: Create</title>
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
/*
	INSERT
	=====
	mysql_query("INSERT INTO table_name (field1,field2,field3) VALUES (value1, value2, value3)");
*/
mysqli_query($con, "INSERT INTO basics (name,address,occupation) VALUES ('Bam Bam Rubble', '123 Bedrock Ave', 'kid')") or die(mysqli_error($con));
/*
	or die()
	=====
	DOCUMENTATION: https://www.w3schools.com/php/func_misc_die.asp
	DOCUMENTATION: https://www.php.net/manual/en/function.die.php
*/
?>

</body>
</html>