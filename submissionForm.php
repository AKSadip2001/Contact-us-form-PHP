<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$link = mysqli_connect("localhost", "root", "", "contactus");

if($link === false){
	die("Error: ".mysqli_connect_error());
}

$sql = "INSERT INTO contact_info (name, email , phone, message) values ('$name','$email','$phone', '$msg')";


if(mysqli_query($link, $sql)){
	echo '<script>alert("Success!")</script>';
    header("Location:contactUsForm.php");
}
else{
	echo "Error: ".mysqli_error($link);
}

mysqli_close($link);
?>