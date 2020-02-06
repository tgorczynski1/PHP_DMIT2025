<?php
	// Establish my variables that will be uses later on in my application below
	$fullname;
	$email;
	$phone;
	$msg;
	$alert_msgs;

	// Checking our $_POST variable
	 //echo "<pre>";
	 //var_dump($_POST);
	 //echo "</pre>";

	// Capturing my post variable and setting the necessary 
	// trim(): Removes empty space before or after string
	$fullname = trim($_POST['fullname']);
	$email = trim($_POST['email_address']);
	$phone = trim($_POST['phone']);
	$msg = trim($_POST['message']);

	// Check for empty fields
	if ($fullname == "") {
		$alert_msgs .= "<li>Please fill in a full name.</li>";
	}
	// We could repeat this with all fields

	/*** PHONE VALIDATION ***/
	// For a phone number, we could check if it's numeric characters, bit that doesn't account for spaces, dashes, dots etc.
	// One solution would be to get rid of any extraneous characters, and simply use a straight number.
	
	$phone = str_replace(" ", "", $phone); // get rid of spaces
	$phone = str_replace("-", "", $phone); // get rid of -
	$phone = str_replace(".", "", $phone); // get rid of .

	// is_numeric(): checks if the parameter passed into it is a numerical value
	// https://www.w3schools.com/php/func_var_is_numeric.asp
	if (!is_numeric($phone)) {
		$alert_msgs .= "<li>That phone number is not a number.</li>";
	}

	// strlen(): checks the length (number of characters) of a string
	// https://www.w3schools.com/php/func_string_strlen.asp
	if (strlen($phone) != 10) {
		$alert_msgs .= "<li>Please enter a proper 10 digit phone number.</li>";
	}

	// here's an advanced method for phone number validation
	// Note: YOU MUST EITHER REMOVE THE PREVIOUS PHONE VALIDATION, COMMENT IT OUT, OR MOVE THIS BEFORE IT
	// DOCUMENTATION FOR preg_match => https://www.php.net/manual/en/function.preg-match.php
	// LIVE TESTER FOR REGEX => https://www.phpliveregex.com/
	// if(!preg_match('/^[0-9\-\(\)\/\+\s]*$/', $phone) && !preg_match('/^[0-9\-\(\)\/\+\s]*$/', $phone)) {
	// 	$alert_msgs .= "<li>Please fill in a valid phone number formatted like 987-654-3219</li>";
	// }
	
	/*** EMAIL VALIDATION ***/
	// $email_validate = validate_email($email); // calls the function below to validate the email addy

	// Checks if the $email_validate returns a value of false
	if(!$email_validate) {
		$alert_msgs .= "<li>Please fill in a valid email address.</li>";
	}

	function validate_email($sender_email) {
	// This is a function; it receives info and returns a value.

		$email = trim($sender_email); //removes whitespace

		if(!empty($email)) {
		// Returns true if the email varaible is not an empty variable (has a value)

			// Validate email address syntax
			if(preg_match('/^[a-z0-9\_\.]+@[a-z0-9\-]+\.[a-z]+\.?[a-z]{1,4}$/i', $email, $match)) {
			// Returns true if a valid email addres syntax

				// Returns the matched email address format string
				return strtolower($match[0]);

			}
		}

		return false; // NOT valid!
	}

	/*** MESSAGE VALIDATION ***/
	// Must have something (min)
	// Can't go too long (max)
	// Can't contain <html> tags

	
	// strip_tags(): removes HTML tags
	// DOCUMENTATION: 
	// https://www.w3schools.com/php/func_string_strip_tags.asp
	// https://www.php.net/manual/en/function.strip-tags.php
	$message = strip_tags($message);

	// ON YOUR OWN, CREATE RULES FOR THE MESSAGE USING TECHNIQUES SHOWN ABOVE FOR MIN/MAX (strlen)
if (strlen($message) < 10 || strlen($message) > 20 ) {
		$alert_msgs .= "<li>Please enter a message between 10 and 20.</li>";
	}
	/*** FORMATTING ALERT MESSAGES ***/
	if (!empty($alert_msgs)) {
		$alert_msgs = "<div class=\"alert alert-danger\"><ul>$alert_msgs</ul></div>";
	} else {
		$alert_msgs = "<div class=\"alert alert-success\">";
		$alert_msgs .= "<h3>SUCCESS!</h3>";
		$alert_msgs .= "<p>If we can read this, then the form has validated successfully, and we can do whatever we want to with the data.</p>";
		$alert_msgs .= "</div>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form validation 1 | Next page example</title>
	<!-- These must be in place to use Bootstrap ! -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
	.formstyle{ /* optional: in case you don't like the really wide form */
		max-width:450px;
	}
	.btm-mar {
		margin-bottom: 1rem;
	}
	</style>
</head>
<body>
	<div class="container">

		<h1>
			<div>Form validation 1 | Next page example</div>
			<small class="text-muted"><em>Response page</em></small>
		</h1>

		<?php echo $alert_msgs; ?>

	</div><!-- / .container -->

</body>
</html>