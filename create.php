<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
		$gender = $_POST['gender'];

		//write sql query

		$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `phonenumber`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$phonenumber','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<body>

<h2>Signup Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" minlength="6" name="password">
    <br>
    Phone Number:<br>
    <input type="text" name="phonenumber" placeholder="ex. 09632561259" maxlength="11" required pattern="[0-9]{11}">
    <br>
    Gender:<br>
    <input type="radio" name="gender" checked required="required" value="Male">Male
    <input type="radio" name="gender" checked required="required" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>