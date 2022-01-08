
<html>
<head>

	<title>Forms</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<div>
<h2>Customer Information </h2>
<body>
<form action="mailto:nestormayagma@gmail.com" method:"post" enctype="text/plain">
<h3>Username:</h3>
<input type="Username"><br>
<h3>Password:</h3>
<input type="password"><br>
<h3>Gender</h3> 
<input type="radio" name="Gender" value="Male">Male<br>
<input type="radio" name="Gender" value="Female">Female<br>

<h3>Course:</h3>
<input type="checkbox" name="course">Computer Science<br>
<input type="checkbox" name="course">Information Technology<br>
<input type="checkbox" name="course">Information System<br>

<h3>Select City</h3>
<select>
	<option>Quezon City</option>
	<option>Metro Manila</option>
	<option>Mandaluyong City</option>
	<option>Caloocan</option>
</select><br><br>

<h3>Tell about yourself:</h3>
<textarea rows="20" cols="80">
</textarea><br><br>

<input type="submit" value="Submit">
<input type="reset" value="Reset"><br>
</div>
</form>
</body>
</html>