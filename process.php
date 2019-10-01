<?php 
$msg = "";
$css_class = "";

//Connecting to the Database
$conn = mysqli_connect("localhost","root","","image_upload");

if (isset($_POST['save-user'])) {
        // echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

        $bio = $_POST['bio'];
        $profileImageName = time(). '_' . $_FILES['profileImage']['name'];

        $target = 'images/' .$profileImageName;

        if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){ 
            $sql = "INSERT INTO users (profile_image, bio) VALUES ('$profileImageName', '$bio')";
            if (mysqli_query($conn, $sql)) {
                $msg = "Image uploaded Successfully";
                $css_class = "alert-success";
            }else {
                    $msg = "Database Error: failed to save user to database";
                    $css_class = "alert-danger";
            }
            
        }else {
            $msg = "Image upload failed";
            $css_class = "alert-danger";
        }

        }
?>