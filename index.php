<?php
// Connect to the database
$host = "partyplannerbis-server.mysql.database.azure.com";
$user = "wadhfhawnx";
$password = "1M8MVB37F518GQ13$";
$dbname = "partyplannerbis-database";
$ssl_ca = '/path/to/DigiCertGlobalRootCA.crt (1).pem';

$conn = mysqli_connect($host, $user, $password, $dbname, null, null, MYSQLI_CLIENT_SSL | MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$single_choice_1 = $_POST['single-choice-1'];
$dropdown = $_POST['dropdown'];
$single_choice_2 = $_POST['single-choice-2'];

// Create an INSERT query
$sql = "INSERT INTO partyplanner (firstname, attending, howMany, Drinks, lastname) VALUES ('$firstname', '$single_choice_1', '$dropdown', '$single_choice_2','$lastname')";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Partyplanner</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/eyeglasses-icon-22.jpg" />
  
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body id="body">

	<form action="" method="post" enctype="multipart/form-data">
		<label for="firstname">First name:!!!</label><br>
  		<input type="text" id="firstname" name="firstname"><br>
  		<label for="lastname">Last name:!</label><br>
  		<input type="text" id="lastname" name="lastname"><br><br>
		<br>
		<label for="single-choice-1">Will you be attending?!</label><br>
		<input type="radio" id="single-choice-1-option-1" name="single-choice-1" value="Yes" checked>
		<label for="single-choice-1-option-1">Yes</label><br>
		<input type="radio" id="single-choice-1-option-2" name="single-choice-1" value="No">
		<label for="single-choice-1-option-2">No</label><br>
		<br>
		<label for="dropdown">How many additional gueasts are you bringing?</label><br>
		<select id="dropdown" name="dropdown">
		  <option value="None, just me.">None, just me.</option>
		  <option value="+1">+1</option>
		  <option value="+2">+2</option>
		  <option value="+3 or more">+3 or more</option>
		</select>
		<br><br>
		<label for="single-choice-2">Drink Requests:</label><br>
		<input type="radio" id="single-choice-2-option-1" name="single-choice-2" value="Beer" checked>
		<label for="single-choice-2-option-1">Beer</label><br>
		<input type="radio" id="single-choice-2-option-2" name="single-choice-2" value="Cola">
		<label for="single-choice-2-option-2">Cola</label><br>
		<input type="radio" id="single-choice-2-option-3" name="single-choice-2" value="Water">
		<label for="single-choice-2-option-3">Water</label><br>
		<input type="radio" id="single-choice-2-option-4" name="single-choice-2" value="anta">
		<label for="single-choice-2-option-4">Fanta</label><br>
		<input type="radio" id="single-choice-2-option-5" name="single-choice-2" value="Wine">
		<label for="single-choice-2-option-5">Wine</label><br>
		<br>
		<input type="submit" value="Submit">
	  </form>



  </body>
</html>
