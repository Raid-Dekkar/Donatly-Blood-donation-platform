<?php
    session_start();
    include("inc/db_connection.php");

    if (isset($_SESSION['id_ad']) && isset($_SESSION['user_name_ad'])) {
      $user_id_ad = $_SESSION['id_ad'];
      $user_name_ad = $_SESSION['user_name_ad'];

      // Retrieve user's updated information from the form
      $city_ad = $_POST["city_ad"];
      $phone_number_ad = $_POST["phone_number_ad"];
      $birth_date_ad = date("Y-m-d", strtotime($_POST["birth_date_ad"]));

      if(isset($_POST['upload'])) {
        $file_name = $_FILES['profile_pic']['name'];
        $file_tmp = $_FILES['profile_pic']['tmp_name'];
        $file_type = $_FILES['profile_pic']['type'];
        $file_size = $_FILES['profile_pic']['size'];
        // $separator = ".";
    
        // Check for valid file extension and size
        $extensions = array("jpeg", "jpg", "png");
        $max_size = 4097152; // 4 MB
        $file_ext = strtolower(end(explode('.', $file_name)));
    
        if(in_array($file_ext, $extensions) === false){
            // echo "Error: Invalid file extension. Allowed extensions are JPEG, JPG, and PNG.";
            header("Location: profile.php?upload-pic-error=Invalid file extension. Allowed extensions are JPEG, JPG, and PNG");
            exit();
        }
        else if($file_size > $max_size){
            // echo "Error: File size is too large. Maximum file size is 2 MB.";
            header("Location: profile.php?upload-pic-error=File size is too large. Maximum file size is 4 MB.");
            exit();
        }
        else {
            // Move the uploaded file to a designated directory
              $upload_dir = "imgs/";
              $new_filename = uniqid() . "." . $file_ext;
              $upload_path = $upload_dir . $new_filename;
              move_uploaded_file($file_tmp, $upload_path);

              $query2 = "UPDATE admins SET profile_pic_ad = '$new_filename' WHERE id_ad = '$user_id_ad' ";
              $result2 = mysqli_query($conn, $query2);
              if ($result2) { 
                header("Location: profile.php?upload-pic-success= Profile picture has been updated successfully.");
                exit();
              }
              else {
                header("Location: profile.php?upload-pic-error= Unknown error has occurred. Try again later");
                exit();
              }
    
            // Save the filename to the MySQL database along with other user profile information
            //   $username = $_SESSION['username']; // Assuming user is logged in
            //   $conn = mysqli_connect("localhost", "username", "password", "database_name");
            //   $sql = "UPDATE users SET profile_pic='$new_filename' WHERE username='$username'";
            //   mysqli_query($conn, $sql);
          }
      }

      // Update the user's information in the database
      $query = "UPDATE admins SET city_ad = '$city_ad', phone_number_ad = '$phone_number_ad', birth_date_ad = '$birth_date_ad' WHERE id_ad = '$user_id_ad' ";
      $result = mysqli_query($conn, $query);

      if ($result) {
        // Redirect the user back to the edit profile page with a success message
        // echo "Your profile has been updated successfully.";
        header("Location: profile.php?update-profile-success=Your informations have been updated successfully");
        exit();
      } else {
        // Handle error if user's information could not be updated
        // echo "Error updating user's information in database.";
        header("Location: profile.php?update-profile-error=Unknown error has occurred. Try again later");
        exit();
      }
    } else {
      // Handle error if user is not logged in
      echo "Error: User is not logged in.";
      exit();
    }
?>
