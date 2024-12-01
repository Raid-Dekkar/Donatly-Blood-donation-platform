<?php
    //session_start(); 
    include ("inc/db_connection.php");

    if (isset($_SESSION['id_ad']) && isset($_SESSION['user_name_ad'])) {
        //query that counts number of users.
        $sql = "SELECT id FROM users ";
        $result = mysqli_query($conn, $sql);
        $res = mysqli_num_rows($result);    //res is the number of counted columns.
        
        //query that counts number of pending donors.
        $sql2 = "SELECT * FROM donors ";
        $result2 = mysqli_query($conn, $sql2);
        $res2 = mysqli_num_rows($result2);    //res is the number of counted columns.
        // $rows = mysqli_fetch_assoc($result2);
        // $temp_id = $rows["id"];
        
        //query that retrieves pending donors.
        $sql2_1 = "SELECT status FROM donors WHERE status='Pending' ";
        $result2_1 = mysqli_query($conn, $sql2_1);
        $res2_1 = mysqli_num_rows($result2_1);

        //query that counts number of approved donors.
        $sql3 = "SELECT status FROM donors WHERE status='Approved' ";
        $result3 = mysqli_query($conn, $sql3);
        $res3 = mysqli_num_rows($result3);    //res is the number of counted columns.
        
        //query that counts number of recievers.
        $sql4 = "SELECT id FROM recievers ";
        $result4 = mysqli_query($conn, $sql4);
        $res4 = mysqli_num_rows($result4);    //res is the number of counted columns.

        //joining users and donors tables to get first and last and user names.
        $sql5 = "SELECT donors.id, users.first_name, users.last_name, users.user_name FROM donors, users WHERE donors.id=users.id ORDER BY donors.id";
        $result5 = mysqli_query($conn, $sql5);

        //age calculator function.
        function calc_age($dateOfBirth) {
            $today = date("Y-m-d");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
            return $diff->format('%y');
        }

        //status confirmation form.
        if(isset($_POST["conf_stat_btn"])) {
            if(isset($_POST["req_id"]) && isset($_POST["req_fname"]) && isset($_POST["req_lname"])) {
                $req_id = $_POST["req_id"];
                $req_fname = $_POST["req_fname"];
                $req_lname = $_POST["req_lname"];
            }
            if(isset($_POST["status"])) {
                $status = $_POST["status"];
                
                // $temp_id = $_SESSION["temp_id"];
                // $id_array = $_SESSION["id_array"];
                if($status == "pending") {
                    $sql6 = "UPDATE donors SET status='Pending' WHERE id=$req_id";
                    $result6 = mysqli_query($conn, $sql6);
                    // echo "pending <br>";
                    header("Location: admin.php?pending= {$req_fname} {$req_lname} is Pending");
                    exit();
                }
                else if($status == "approved") {
                    $sql6 = "UPDATE donors SET status='Approved' WHERE id=$req_id ";
                    $result6 = mysqli_query($conn, $sql6);
                    // echo "approved <br>";
                    header("Location: admin.php?approved={$req_fname} {$req_lname} is Approved");
                    exit();
                }
                else if($status == "declined") {
                    $sql6 = "UPDATE donors SET status='Declined' WHERE id=$req_id ";
                    $result6 = mysqli_query($conn, $sql6);
                    // echo "declined <br>";
                    header("Location: admin.php?declined={$req_fname} {$req_lname} is Declined");
                    exit();
                }
            }
            else {
                header("Location: admin.php?error=you must select a status first !");
                exit();
            }
        }
        // else {
        //     header("Location: admin.php?error=Unknown error has occurred !");
        //     exit();
        // }

        $sql7 = "SELECT id, status FROM donors ORDER BY id ";
        $result7 = mysqli_query($conn, $sql7);

        //query that selects approved donors.
        $sql8 = "SELECT * FROM donors WHERE status='Approved' ORDER BY id";
        $result8 = mysqli_query($conn, $sql8);
        
        //query that removes a donor.
        if(isset($_GET["rm-donor-id"])) {
            $id_to_remove_d = $_GET["rm-donor-id"];
            $sql9 = "DELETE FROM donors WHERE id=$id_to_remove_d ";
            $result9 = mysqli_query($conn, $sql9);
        }

        //query that remove a reciever.
        if(isset($_GET["rm-reciever-id"])) {
            $id_to_remove_r = $_GET["rm-reciever-id"];
            //query that remove a donor.
            $sql9 = "DELETE FROM recievers WHERE id=$id_to_remove_r ";
            $result9 = mysqli_query($conn, $sql9);
        }

        //joining users and recievers tables to get first and last and user names.
        $sql10 = "SELECT recievers.id, users.first_name, users.last_name, users.user_name FROM recievers, users WHERE recievers.id=users.id ORDER BY recievers.id";
        $result10 = mysqli_query($conn, $sql10);

        //query that selects recievers.
        $sql11 = "SELECT * FROM recievers ORDER BY id";
        $result11 = mysqli_query($conn, $sql11);

    }
    else{
        header("Location: admin.php");
        exit();
    }
?>

