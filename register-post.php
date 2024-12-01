<?php
   session_start(); 
   include ("inc/db_connection.php");

   if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['conf_pass'])) {
      $first_name = stripcslashes(strtolower($_POST["first_name"]));
      $last_name = stripcslashes(strtolower($_POST["last_name"]));
      $user_name = stripcslashes(strtolower($_POST["user_name"]));
      $email = stripcslashes(strtolower($_POST["email"]));
      $password = stripcslashes($_POST["password"]);
      $conf_pass = stripcslashes($_POST["conf_pass"]);

      $user_data = "user_name=".$user_name . "first_name=".$first_name;

      if (empty($first_name)) {
         header("Location: register.php?error=First Name is required&$user_data");
         exit();
      }else if (empty($last_name)) {
         header("Location: register.php?error=Last Name is required&$user_data");
         exit();
      }else if (empty($user_name)) {
         header("Location: register.php?error=User Name is required&$user_data");
         exit();
      }else if (empty($email)) {
         header("Location: register.php?error=Email is required&$user_data");
         exit();
      }else if(empty($password)){
         header("Location: register.php?error=Password is required&$user_data");
         exit();
      }
      else if(empty($conf_pass)){
         header("Location: register.php?error=Password Confirmation is required&$user_data");
         exit();
      }
      else if($password !== $conf_pass){
         header("Location: register.php?error=The confirmation password does not match&$user_data");
         exit();
      }
   
      else{
         // hashing the password
         $md5_pass = md5($password);
   
         $sql = "SELECT * FROM users WHERE user_name='$user_name' ";
         $result = mysqli_query($conn, $sql);
   
         if (mysqli_num_rows($result) > 0) {
            header("Location: register.php?error=The username is taken try another&$user_data");
            exit();

         }else {
              $sql2 = "INSERT INTO users(first_name, last_name, user_name, email, password, md5_pass) VALUES('$first_name', '$last_name', '$user_name', '$email', '$password', '$md5_pass')";
              $result2 = mysqli_query($conn, $sql2);
              if ($result2) {
                  header("Location: register.php?success=Your account has been created successfully");
                  exit();
              }else {
                  header("Location: register.php?error=unknown error occurred&$user_data");
                  exit();
              }
         }
      }
   }else{
	   header("Location: register.php");
	   exit();
   }
?>