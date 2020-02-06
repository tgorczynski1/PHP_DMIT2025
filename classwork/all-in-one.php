<?php
$fullname = trim($_POST['fullname']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if (isset($_POST['submit'])){
	$bool_val_ok = true;

	$val_msg = "";

	if(strlen($fullname) <5 ){
		$val_msg .= "Please fill in a proper name. <br/>";
		$bool_val_ok = false;
	}
	if(strpos($fullname, ' ') == false){
		$val_msg .= "please fill in a proper first and last name. </br> ";
		$bool_val_ok = false;
	}
	$email_validate =

	function validate_email($email){
		$email = trim($sender_email); //removes whitespace

		if(!empty($email)) {
		// Returns true if the email varaible is not an empty variable (has a value)

			// Validate email address syntax
			if(preg_match('/^[a-z0-9\_\.]+@[a-z0-9\-]+\.[a-z]+\.?[a-z]{1,4}$/i', $email, $match)) {
			// Returns true if a valid email addres syntax

				// Returns the matched email address format string
				return strtolower($match[0]);
				foreach($_POST as $key => $value){
					foreach($bad_strings as $value2){
						if*strpos($value, $value2 !== false	){
							$bool_val_ok = false;
							$val_msg = "this is incorrect, try again";
						}
					}
				}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form validation 2 | All-in-one</title>
	<!-- These must be in place to use Bootstrap ! -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.formstyle { /* optional: in case you don't like the really wide form */
			max-width:450px;
		}
		.btm-mar {
			margin-bottom: 1rem;
		}
	</style>
</head>
<body>
	<div class="container">

		<h1>Form validation 2 | All-in-one</h1>

		<form name="form-validation" class="formstyle" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<div class="form-group">
				<label for="fullname">Full name:</label>
				<input type="text" class="form-control" name="fullname" placeholder="Full name...">
			</div>

			<div class="form-group">
				<label for="email_address">Email address:</label>
				<!-- <input type="email" class="form-control" name="email_address" placeholder="Email address..."> -->
				<input type="text" class="form-control" name="email_address" placeholder="Email address...">
			</div>

			<div class="form-group">
				<label for="phone">Phone: </label>
				<small class="text-muted"><em>xxx-xxx-xxxx</em></small>
				<!-- <input type="tel" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone number..."> -->
				<input type="text" class="form-control" name="phone" placeholder="Phone number...">
			</div>

			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" name="message"></textarea>
			</div>

			<input type="submit" name="submit" class="btn btn-primary" value="Validate my form">

		</form>

	</div><!-- / .container -->

</body>
</html>