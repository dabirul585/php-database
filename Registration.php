<?php  


$userName = $password = "";
$userNameErr = $passwordErr = "";
$email = $emailErr = "";
$phone = $phoneErr = "";
$presntAddress = $presentAddressErr = "";
$permanentAddress = $permanentAddressErr = "";
$isValid = true;
$successfulMessage = $errorMessage = "";

	if($_SERVER['REQUEST_METHOD'] === "POST")
	 {
		$userName = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone =_POST['phone'];
		$presentAddress = $_POST['presentAddress'];
		$permanenetAddress = $_['permanentAddress'];


		if(empty($userName))
		 {
		$userNameErr = "User can not be empty";
		$isValid = true;
		}

		if(empty($password)) 
		{
		$passwordErr = "Password can not be empty";
		$isValid = true;
		}
		if(empty($email))
		 {
		$emailErr = "Field can not be empty";
		$flag = true;
		}

		if(empty($phone))
		 {
		$phoneErr = "Field can not be empty";
		$flag = true;
		}

		if(empty($presentAddress)) 
		{
		$presentAddressErr = "Field can not be empty";
		$flag = true;
		}

		if(empty($permanentAddress)) 
		{
		$permanentAddressErr = "Field can not be empty";
		$flag = true;
		}

		if($isValid) 
       {
		$res = true;

		if($res) {
		$successfulMessage = "Sucessfully saved.";
		}
		else {
		$errorMessage = "Error while saving.";
		}
     }

}

function test_input($data) 
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
</head>
<body>
 
	<h1>Registration Page</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Registration Page</legend>

			<label for="username">User Name:</label>
			<input type="text" name="username" id="username">
			<span style= "color: red"><?php echo $userNameErr;?> 
		    </span>
			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="Password">
			<span style= "color: red"><?php echo $passwordErr;?> 
		    </span>
			<br><br>

			<label for="email">Email<span style="color: red";>*</span>:</label>
			<input type = "email"id ="email">
			<span style="color: red"><?php echo $emailErr; ?></span>
			<br><br>

			<label for="phone">Phone<span style="color: red";>*</span>:</label>
			<input type = "text"name="phone" id ="phone">
			<span style="color: red"><?php echo $phoneErr; ?></span>
			<br><br>

			<label for="PresentAddress">PresentAddress<span style="color: red";>*</span>:</label>
			<input type = "text" name="presentAddress" id ="presentAddress">
			<span style="color: red"><?php echo $presentAddressErr; ?></span>
			<br><br>

			<label for="PermanentAddress">PermanentAddress<span style="color: red";>*</span>:</label>
			<input type = "text"name="permanentAddress" id ="permanentAddress">
			<span style="color: red"><?php echo $permanentAddressErr; ?></span>
			<br><br>
			<br><br>
             

        <input type="submit" name="submit" value="Register">
        

		</fieldset>
	</form>

	<p style= "color: green"><?php echo $successfulMessage;?> </p>
	<p style= "color: red"><?php echo $errorMessage;?> </p>

	<br>
	<a href="login.php">Go to Login</a>

</body>
</html>