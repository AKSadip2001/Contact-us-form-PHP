<?php
$uName = $_POST['userName'];
$password = $_POST['password'];

$link = mysqli_connect("localhost", "root", "", "contactus");

if($link === false){
    die("Error: ".mysqli_connect_error());
}

$sql = "SELECT * FROM credential";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["userId"]===$uName && $row["password"]===$password){
            echo "<script> alert('Login successful!') </script>";
            header('location:userDashboard.php');
        }else{
            echo "<script> alert('Login failed...') </script>";
            header('location:login.php');
        }
    }

} else {
    echo "0 results";
}

mysqli_close($link);

?>