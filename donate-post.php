<?php
   session_start(); 
   include ("inc/db_connection.php");
    //    include ("login-post.php");

    if(isset($_POST["reg_donor"])) {
        if (isset($_POST["phone_number_d"]) && isset($_POST['birth_date_d']) && isset($_POST['city_d']) && isset($_POST['gender_d']) && isset($_POST['blood_type_d']) && isset($_POST['recent_donation']) && isset($_POST['diseases'])) {
            $phone_number_d = filter_input(INPUT_POST, "phone_number_d", FILTER_VALIDATE_FLOAT); 
            $birth_date_d = date("Y-m-d", strtotime($_POST["birth_date_d"])); 
            $city_d = $_POST["city_d"]; 
            $gender_d = $_POST["gender_d"]; 
            $blood_type_d = $_POST["blood_type_d"];
            $recent_donation = stripslashes(strtolower($_POST["recent_donation"]));
            $diseases = stripslashes(strtolower($_POST["diseases"]));
            // $first_name = stripslashes(strtolower($_SESSION["first_name"]));
            // $last_name = stripslashes(strtolower($_SESSION["last_name"]));
            
            if(empty($phone_number_d)) {
                header("Location: home.php?donor-form-error=Phone number is required !");
                exit();
            }
            else{
    
                $id = $_SESSION["id"];
                $sql4 = "SELECT id FROM donors WHERE id='$id' ";
                $result4 = mysqli_query($conn, $sql4);
       
                if (mysqli_num_rows($result4) > 0) {
                    header("Location: home.php?donor-form-error=You have already registered as a donor");
                    // echo "You have already registered as a donor <br>";
                    exit();
                }
                // echo "hello raid -------- <br>";
                
                $sql5 = "INSERT INTO donors(id, phone_number_d, birth_date_d, city_d, gender_d, blood_type_d, recent_donation, diseases) VALUES('$id', '$phone_number_d', '$birth_date_d', '$city_d', '$gender_d', '$blood_type_d', '$recent_donation', '$diseases')";
                $result5 = mysqli_query($conn, $sql5);
                if ($result5) {
                    header("Location: home.php?donor-form-success=Your registration has been added successfully");
                    exit();
                }else {
                    header("Location: home.php?donor-form-error=unknown error occurred");
                    exit();
                }
                
            }
        }
        else{
            header("Location: home.php");
            exit();
        }
    }

?>