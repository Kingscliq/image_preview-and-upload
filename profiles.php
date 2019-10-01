<?php include "process.php";

$sql ="SELECT * FROM users";

$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Image Preview and Upload</title>
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 form-div">
                    <table class="table table-bordered">
                    
                        <thead>
                            <th>Profile Image</th>
                            <th>Short Bio</th>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user):?>
                                <tr>
                                    <td>
                                        <img src="images/<?php echo $user['profile_image'];?>" width="80">
                                    </td>
                                    
                                    <td>
                                        <?php echo $user['bio'];?>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>