<?php include "process.php";?>

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
                    <form action="index.php" method="post" enctype="multipart/form-data">
                    <h3 class="text-center form-heading">Create Profile</h3>
                    
                    <?php if(!empty($msg)):?>
                        <div class="alert <?php echo $css_class?>">
                            <?php echo $msg;?>
                        </div>
                    <?php endif;?>
                        <div class="form-group">
                        <img src="images/img.png" alt="placeholder image" id="profileDisplay" onclick="triggerClick()">
                            <label for="profileImage" style="text-align:center; color:blue; margin:10px auto; margin-left:100px">Profile Image</label>
                            <input type="file" name="profileImage" id="profileImage" onchange="displayImage(this)" class="form-control" style="display:none">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea name="bio" id="bio" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name = "save-user" class="btn btn-primary btn-block">Save User</button>
                        </div>
                        <label class="text-center" style="color:rgb(60, 226, 110)"> <a href="profiles.php">View Profiles</a> </label>
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>