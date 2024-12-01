<?php
   session_start(); 
   include ("inc/db_connection.php");

    if(isset($_POST["reg_reciever"])) {
        if (isset($_POST["phone_number_r"]) && isset($_POST['birth_date_r']) && isset($_POST['city_r']) && isset($_POST['gender_r']) && isset($_POST['blood_type_r']) && isset($_POST['medical_condition'])) {
            $phone_number_r = filter_input(INPUT_POST, "phone_number_r", FILTER_VALIDATE_FLOAT); 
            $birth_date_r = date("Y-m-d", strtotime($_POST["birth_date_r"])); 
            $city_r = $_POST["city_r"]; 
            $gender_r = $_POST["gender_r"]; 
            $blood_type_r = $_POST["blood_type_r"];
            $medical_condition = stripslashes(strtolower($_POST["medical_condition"]));
            
            if(empty($phone_number_r)) {
                header("Location: home.php?reciever-form-error=Phone number is required !");
                exit();
            }
            else{
    
                $id = $_SESSION["id"];
                $sql4 = "SELECT id FROM recievers WHERE id='$id' ";
                $result4 = mysqli_query($conn, $sql4);
       
                if (mysqli_num_rows($result4) > 0) {
                    header("Location: home.php?reciever-form-error=You have already registered as a reciever");
                    exit();
                }
                
                $sql5 = "INSERT INTO recievers(id, phone_number_r, birth_date_r, city_r, gender_r, blood_type_r, medical_condition) VALUES('$id', '$phone_number_r', '$birth_date_r', '$city_r', '$gender_r', '$blood_type_r', '$medical_condition')";
                $result5 = mysqli_query($conn, $sql5);
                if ($result5) {
                    header("Location: home.php?reciever-form-success=Your registration has been added successfully");
                    exit();
                }else {
                    header("Location: home.php?reciever-form-error=unknown error occurred");
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