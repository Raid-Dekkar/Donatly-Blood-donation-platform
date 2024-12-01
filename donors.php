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
      <title>Donors</title>
      <link rel="stylesheet" href="css/all.min.css" />
      <link rel="stylesheet" href="css/framework.css" />
      <link rel="stylesheet" href="css/admin.css" />
      <link rel="stylesheet" href="css/home.css" />
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>
<body>
  <div class="page d-flex">
        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="p-relative txt-c mt-0">
            <?php echo "{$_SESSION["user_name_ad"]}";?>
            </h3>
          <ul>
            <li>
              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="admin.php">
                <i class="fa-regular fa-chart-bar fa-fw"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="donors.php">
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
          </div>
          <!-- </div> -->
          <!-- End Head -->
          <h1 class="p-relative">Donors</h1>
          <div class="friends-page d-grid m-20 gap-20">
            <?php
              //placing infos of approved donors into the table.
              while($rows8 = mysqli_fetch_assoc($result8)) {
                $temp_id_d = $rows8["id"];
                while($rows2 = mysqli_fetch_assoc($result5)) {
            ?>
              <div class="friend bg-white rad-6 p-20 p-relative">
                <div class="contact">
                    <i class="fa-solid fa-phone"></i>
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <div class="txt-c">
                    <!-- <img class="rad-half mt-10 mb-10 w-100 h-100" src="imgs/team-03.png" alt="" /> -->
                    <?php if($rows8["gender_d"] == 'male'){ ?>
                       <img class="rad-half mt-10 mb-10 w-100 h-100" src="imgs/team-03.png" alt="" />
                    <?php } ?> 
                    <?php if($rows8["gender_d"] == 'female'){ ?>
                       <img class="rad-half mt-10 mb-10 w-100 h-100" src="imgs/team-05.png" alt="" /> 
                    <?php } ?>
                    <h4 class="m-0"><?php echo  $rows2["first_name"] . " ";?><?php echo  $rows2["last_name"];?></h4>
                    <p class="c-grey fs-13 mt-5 mb-0"><?php echo  $rows2["user_name"] ;?></p>
                </div>
                <?php
                  break;
                  }
                ?>
                <div class="icons fs-14 p-relative">
                    <div class="mb-10">
                        <i class="fa-solid fa-hashtag fa-fw"></i>
                        <span>Id: </span>
                        <span class="field"><?php echo  $rows8["id"];?></span>
                    </div>
                    <div class="mb-10">
                        <i class="fa-solid fa-phone fa-fw"></i>
                        <span>Phone number: </span>
                        <span class="field"><?php echo  $rows8["phone_number_d"];?></span>
                    </div>
                    <div class="mb-10">
                        <i class="fa-regular fa-calendar fa-fw"></i>
                        <span>Birth Date: </span>
                        <span class="field"><?php echo  $rows8["birth_date_d"];?></span>
                    </div>
                    <div class="mb-10">
                        <i class="fa-solid fa-building fa-fw"></i>
                        <span>City: </span>
                        <span class="field"><?php echo  $rows8["city_d"];?></span>
                    </div>
                    <div class="mb-10">
                        <i class="fa-solid fa-venus-mars fa-fw"></i>
                        <span>Gender: </span>
                        <span class="field"><?php echo  $rows8["gender_d"];?></span>
                    </div>
                    <div class="mb-10">
                        <i class="fa-solid fa-vial fa-fw"></i>
                        <span>Blood type:</span>
                        <span class="field"><?php echo  $rows8["blood_type_d"];?></span>
                    </div>
                </div>
                <div class="info between-flex fs-13">
                    <div>
                        <a class="bg-red c-white btn-shape" <?php echo "href='donors.php?rm-donor-id=$temp_id_d' " ?> style="border: none;cursor:pointer;font-size: 15px;font-weight: bold;padding: 4px 10px;">Remove</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
    </div>
</body>
</html>
<?php
  }
  else {
    // Handle error if user's information could not be retrieved
    echo "Error retrieving user's information from database.";
  }

?>