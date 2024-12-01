<?php
    session_start();
    include("inc/db_connection.php");

    if (isset($_SESSION['id_ad']) && isset($_SESSION['user_name_ad'])) {
      $user_id_ad = $_SESSION['id_ad'];
      $user_name_ad = $_SESSION['user_name_ad'];

      // Retrieve user's updated information from the form
      $email_ad = $_POST['email_ad'];
      $password_ad = $_POST['password_ad'];

      // Update the user's information in the database
      $query = "UPDATE admins SET email_ad = '$email_ad', password_ad = '$password_ad' WHERE id_ad = '$user_id_ad' ";
      $result = mysqli_query($conn, $query);

      if ($result) {
        // Redirect the user back to the edit profile page with a success message
        // echo "Your profile has been updated successfully.";
        header("Location: settings.php?general-info-success=Your informations have been updated successfully");
        exit();
      } else {
        // Handle error if user's information could not be updated
        // echo "Error updating user's information in database.";
        header("Location: settings.php?general-info-error=Unknown error has occurred. Try again later");
        exit();
      }
    } else {
      // Handle error if user is not logged in
      echo "Error: User is not logged in.";
      exit();
    }
?>
