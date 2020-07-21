 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Insert</title>
 </head>
 <body>
     
<?php
$servername = "localhost";
$username = "jaxcode95";
$password = "jaxcode95";
$dbname = "jaxcode95";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$street= $_POST['street'];
$unit= $_POST['unit'];
$city= $_POST['city'];
$state= $_POST['state'];
$zip= $_POST['zip'];
$email= $_POST['email'];
$telephone = $_POST['telephone'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$ethnicity = $_POST['ethnicity'];
$race = $_POST['race'];
$maritalStatus = $_POST['maritalStatus'];
$numberOfChildren = $_POST['numberOfChildren'];


$sql = "INSERT INTO checkin (firstName, lastName, street, unit, city, state, zip, email, telephone, 
month, day, year, gender, ethnicity, race, maritalStatus, numberOfChildren)
VALUES ('{$firstName }', '{$lastName }','{$street }','{$unit}','{$city}','{$state }',
'{$zip}', '{$email}','{$telephone}','{$month}','{$day}','{$year}',
'{$gender}','{$ethnicity}','{$race}','{$maritalStatus}','{$numberOfChildren}')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>  
