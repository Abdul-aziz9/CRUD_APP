<?php
 include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>C.R.U.D</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5" ><a href="user.php" class="text-light">Add User</a></button>
    
        <table class="table">
        <thead>
            <tr>
            <th scope="col">SN</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Password</th>
            <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>
            <?php

            ?>
            
            <!--<tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@vbnc</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> -->
        </tbody>
        </table>
    </div>
    
</body>
</html>