<?php
   session_start(); 
   include("inc/db_connection.php");

   if (isset($_POST['first_name_ad']) && isset($_POST['last_name_ad']) && isset($_POST['user_name_ad']) && isset($_POST['email_ad']) && isset($_POST['password_ad']) && isset($_POST['conf_pass_ad'])) {
      $first_name_ad = stripcslashes(strtolower($_POST["first_name_ad"]));
      $last_name_ad = stripcslashes(strtolower($_POST["last_name_ad"]));
      $user_name_ad = stripcslashes(strtolower($_POST["user_name_ad"]));
      $email_ad = stripcslashes(strtolower($_POST["email_ad"]));
      $password_ad = stripcslashes($_POST["password_ad"]);
      $conf_pass_ad = stripcslashes($_POST["conf_pass_ad"]);

      if (empty($first_name_ad)) {
        echo "First Name is required";
        exit();
      }else if (empty($last_name_ad)) {
        echo "Last Name is required";
        exit();
      }else if (empty($user_name_ad)) {
        echo "User Name is required";
        exit();
      }else if (empty($email_ad)) {
        echo "Email is required";
        exit();
      }else if(empty($password_ad)){
        echo "Password is required";
        exit();
      }
      else if(empty($conf_pass_ad)){
        echo "Password Confirmation is required";
        exit();
      }
      else if($password_ad !== $conf_pass_ad){
        echo "The confirmation password does not match";
        exit();
      }
      else{
        // hashing the password
        $md5_pass_ad = md5($password_ad);

        
            $sql2 = "INSERT INTO admins(first_name_ad, last_name_ad, user_name_ad, email_ad, password_ad, md5_pass_ad) VALUES('$first_name_ad', '$last_name_ad', '$user_name_ad', '$email_ad',$password_ad, '$md5_pass_ad')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                // echo "Your account has been created successfully.";
                header("Location: settings.php?add-success=Admin has been added successfully");
                exit();
            }else {
                // echo "An unknown error occurred. Please try again later.";
                header("Location: settings.php?add-error=Unknown error has occurred. Try again later");
                exit();
            }
        }
    }
?>
