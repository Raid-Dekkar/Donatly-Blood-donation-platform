<?php
   session_start(); 
   include ("inc/db_connection.php");

   if (isset($_POST['user_name']) && isset($_POST['password'])) {
      $user_name = stripcslashes(strtolower($_POST["user_name"]));
      $password = stripcslashes($_POST["password"]);

      if (empty($user_name)) {
         header("Location: login.php?error=User Name is required");
         exit();
      }else if(empty($password)){
         header("Location: login.php?error=Password is required");
         exit();
      }
   
      else{
         // hashing the password
         $md5_pass = md5($password);

         //admin test
         $sql = "SELECT * FROM admins WHERE user_name_ad='$user_name' AND password_ad='$password' ";
         $result = mysqli_query($conn, $sql);
   
         if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
               if ($row['user_name_ad'] === $user_name && $row['password_ad'] === $password) {
                  $_SESSION['user_name_ad'] = $row['user_name_ad'];
                  $_SESSION['first_name_ad'] = $row['first_name_ad'];
                  $_SESSION['last_name_ad'] = $row['last_name_ad'];
                  $_SESSION['id_ad'] = $row['id_ad'];
                  $_SESSION['email_ad'] = $row['email_ad'];
                  $_SESSION['password_ad'] = $row['password_ad'];
                  $_SESSION['gender_ad'] = $row['gender_ad'];
                  $_SESSION['city_ad'] = $row['city_ad'];
                  $_SESSION['phone_number_ad'] = $row['phone_number_ad'];
                  $_SESSION['birth_date_ad'] = $row['birth_date_ad'];
                  $_SESSION['profile_pic_ad'] = $row['profile_pic_ad'];
                  header("Location: admin.php");
                  exit();
               }else{
                  header("Location: login.php?error=Incorect User name or password");
                  exit();
               }
         }else{
            // header("Location: login.php?error=Incorect User name or password");
            // exit();

            //user test
            $sql2 = "SELECT * FROM users WHERE user_name='$user_name' AND password='$password' ";
            $result2 = mysqli_query($conn, $sql2);
      
            if (mysqli_num_rows($result2) === 1) {
               $row = mysqli_fetch_assoc($result2);
                  if ($row['user_name'] === $user_name && $row['password'] === $password) {
                     $_SESSION['user_name'] = $row['user_name'];
                     $_SESSION['first_name'] = $row['first_name'];
                     $_SESSION['last_name'] = $row['last_name'];
                     $_SESSION['email'] = $row['email'];
                     $_SESSION['id'] = $row['id'];
                     header("Location: home.php");
                     exit();
                  }else{
                     header("Location: login.php?error=Incorect User name or password");
                     exit();
                  }
            }else{
               header("Location: login.php?error=Incorect User name or password");
               exit();
            }
         }

      }
   }else{
	   header("Location: login.php");
	   exit();
   }
?>