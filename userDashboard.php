<?php
$link = mysqli_connect("localhost", "root", "", "contactus");

if($link === false){
    die("Error: ".mysqli_connect_error());
}

$sql = "SELECT * FROM contact_info";

$result = $link->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="adminPanel.php">
        <div class="d-grid m-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" href="login.php">Log out</a>
        </div>
    </form>
    <div class="container d-flex flex-column align-items-center">
        <h1 class="m-5">Messages</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>

            <?php
                if ($result->num_rows > 0) {
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        
                        echo '<tbody>
                                <tr>
                                <th scope="row">'.$count.'</th>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td>'.$row['message'].'</td>
                                </tr>
                            </tbody>' ;
                            $count++;
                    }

                } else {
                    echo "0 results";
                }

                mysqli_close($link);
            ?>
        </table>
    </div>
    
</body>
</html>