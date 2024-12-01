<?php 
  session_start();
  include("inc/db_connection.php");
  include("admin-post.php");

  if (isset($_SESSION['id_ad']) && isset($_SESSION['user_name_ad'])) {


?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Dashboard</title>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/home.css">
      <link rel="stylesheet" href="css/framework.css">
      <link rel="stylesheet" href="css/admin.css">
      <link rel="stylesheet" href="css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0"><?php echo "{$_SESSION["user_name_ad"]}";?></h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="admin.php">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="donors.php">
            <i class="fa-solid fa-hand-holding-heart"></i>
              <span>Donors</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="recievers.php">
            <i class="fa-solid fa-syringe"></i>
              <span>Recievers</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.php">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Settings</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="profile.php">
              <i class="fa-regular fa-user fa-fw"></i>
              <span>Profile</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="logout.php">
              <i class="fa-solid fa-right-from-bracket fa-fw"></i>
              <span>Logout</span>
            </a>
          </li>
          
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="icons d-flex align-center">
            <div class="profile-dropdown">
                <div class="menu-container">
                  <div class="profile-pic">
                     <img src="imgs/profile-pic.png" />
                  </div>
                </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Dashboard</h1>
        <div class="wrapper d-grid gap-20">
          <!-- End Quick Draft Widget -->
          <!-- Start Ticket Widget -->
          <div class="tickets p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Blood Statistics</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Everything About Blood Statistics</p>
            <div class="d-flex txt-c gap-20 f-wrap">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5"><?php echo "{$res}";?></span>
                Users
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5"><?php echo "{$res2_1}";?></span>
                Pending donors
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-hand-holding-heart fa-2x mb-10 c-green"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5"><?php echo "{$res3}";?></span>
                Donors
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-syringe fa-2x mb-10 c-red"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5"><?php echo "{$res4}";?></span>
                Recievers
              </div>
            </div>
          </div>
          <!-- End Ticket Widget -->
          <!-- Start Reminders Widget -->
          <div class="reminders p-20 bg-white rad-10 p-relative">
            <h2 class="mt-0 mb-25">Reminders</h2>
            <ul class="m-0">
              <li class="d-flex align-center mt-15">
                <span class="key bg-blue mr-15 d-block rad-half"></span>
                <div class="pl-15 blue">
                  <p class="fs-14 fw-bold mt-0 mb-5">Check My Tasks List</p>
                  <span class="fs-13 c-grey">08/05/2023 - 8:00am</span>
                </div>
              </li>
              <li class="d-flex align-center mt-15">
                <span class="key bg-green mr-15 d-block rad-half"></span>
                <div class="pl-15 green">
                  <p class="fs-14 fw-bold mt-0 mb-5">Check Donors Requests</p>
                  <span class="fs-13 c-grey">08/05/2023 - 10:00am</span>
                </div>
              </li>
              <li class="d-flex align-center mt-15">
                <span class="key bg-orange mr-15 d-block rad-half"></span>
                <div class="pl-15 orange">
                  <p class="fs-14 fw-bold mt-0 mb-5">Call All My Donors</p>
                  <span class="fs-13 c-grey">08/05/2023 - 13:00pm</span>
                </div>
              </li>
              <li class="d-flex align-center mt-15">
                <span class="key bg-red mr-15 d-block rad-half"></span>
                <div class="pl-15 red">
                  <p class="fs-14 fw-bold mt-0 mb-5">Finish The Recievers List</p>
                  <span class="fs-13 c-grey">08/05/2023 - 15:00pm</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Reminders Widget -->
        <!-- Start Requests Table -->
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Donation Requests <span class="requests-number" style="color: #13d7a1;">(<?php echo "{$res2}" ?>)</span> </h2>

          <?php if (isset($_GET['pending'])) { ?>
     		   <p class="pending-o"><?php echo $_GET['pending']; ?></p>
     	   <?php } ?>
          <?php if (isset($_GET['approved'])) { ?>
     		   <p class="approved-o"><?php echo $_GET['approved']; ?></p>
     	   <?php } ?>
         <?php if (isset($_GET['declined'])) { ?>
     		   <p class="declined-o"><?php echo $_GET['declined']; ?></p>
     	   <?php } ?>

          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Full Name</td>
                  <td>Age</td>
                  <td>Blood Type</td>
                  <td>Recent Transfer</td>
                  <td>Diseases</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>

                  <?php
                    //placing infos of pot donors into the table.
                    while($rows = mysqli_fetch_assoc($result2)) {
                      $req_id = $rows['id'];
                      while($rows2 = mysqli_fetch_assoc($result5)) {
                        // $_SESSION["temp_id"] = $rows2["id"];
                        $req_fname = $rows2["first_name"];
                        $req_lname = $rows2["last_name"];
                        // $_SESSION["id_array"] = array();
                        // array_push($id_array, $rows2["id"]);
                  ?>
                      <tr>
                        <!-- <td>Name here</td> -->
                        <td><?php echo  $rows2["first_name"] . " ";?><?php echo  $rows2["last_name"];?></td>
                        <?php
                          break;
                          }
                        ?>
                        <td><?php echo  calc_age($rows["birth_date_d"]);?></td>
                        <td><?php echo  $rows["blood_type_d"];?></td>
                        <td><?php echo  $rows["recent_donation"];?></td>
                        <td><?php echo  $rows["diseases"];?></td>
                        <td>
                          <form class="status-confirmation" action="admin.php?" method="POST">
                            <div class="status-inputs">
                              <label class="status pending">
                                <!-- <?php //if($rows["status"] == "Pending") { ?>
                                  <input type="radio" name="status" value="pending" checked >
                                <?php //} else { ?>
                                  <input type="radio" name="status" value="pending">
                                <?php //} ?> -->
                                <input type="radio" name="status" value="pending" <?php if($rows["status"] == "Pending" ){?> checked <?php } ?> >
                                <span class="name pending">Pending</span>
                              </label>
                              <label class="status approved">
                              <input type="radio" name="status" value="approved" <?php if($rows["status"] == "Approved" ){?> checked <?php } ?>>
                                <span class="name approved">Approved</span>
                              </label>
                              <label class="status declined">
                                <input type="radio" name="status" value="declined" <?php if($rows["status"] == "Declined" ){?> checked <?php } ?>> 
                                <span class="name declined">Declined</span>
                              </label>
                            </div>
                            <input name="req_id" type="hidden" value=" <?php echo "$req_id"; ?> ">
                            <input name="req_fname" type="hidden" value=" <?php echo "$req_fname"; ?> ">
                            <input name="req_lname" type="hidden" value=" <?php echo "$req_lname"; ?> ">
                            <input <?php //echo header("Location: admin.php?req-id=$req_id") ?> class="conf-stat-btn" type="submit" name="conf_stat_btn" value="confirm" style="cursor:pointer;display:block;border:none;font-size: 17px;font-weight: bold;margin: 5px auto 0px;background-color: #b2f4f7;border-radius: 10px;padding: 8px 15px;">
                          </form>

                        </td>
                      </tr>
                  <?php
                     
                    }
                  ?>
                    
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Requests Table -->
      </div>
    </div>
   
      <script >
                                       
         function menuToggle() {
            document.querySelector(".profile-pic").classList.toggle("active");
            document.querySelector(".menu").classList.toggle("active");
         }
         const toggleMenu = document.querySelector(".menu");                             

         
         document.querySelector(".wrapper").onclick = closeLink;
         document.querySelector(".projects").onclick = closeLink;
         // document.querySelector(".role").onclick = closeLink;
         function closeLink(){
            toggleMenu.classList.remove("active")
         }
         const deleteButton = document.getElementById('delete-button');

         deleteButton.addEventListener('click', function() {
         const confirmation = confirm('Do you want to delete your account?');

         if (confirmation) {
            const xhr = new XMLHttpRequest();

            xhr.open('GET', 'Delete.php', true);

            xhr.onload = function() {
               if (this.status === 200) {
               // Redirect the user to the login page
               window.location.href = '../index.html';
               }
            };

            xhr.send();
         }
         });

      </script>
   </body>
</html>


<?php 
   }else{
     header("Location: login.php");
     exit();
   }
?>