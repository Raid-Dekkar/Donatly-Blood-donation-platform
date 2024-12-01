<?php
    session_start();
    include("inc/db_connection.php");

    if (isset($_SESSION['id_ad']) && isset($_SESSION['user_name_ad'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/framework.css" />
  <link rel="stylesheet" href="css/admin.css" />
  <link rel="stylesheet" href="css/home.css" />
  <!-- <link rel="stylesheet" href="css/master2.css"> -->
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
          <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="admin.php">
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
          <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="profile.php">
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
                  <img src="imgs/<?= $_SESSION["profile_pic_ad"] ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- End Head -->
        <h1 class="p-relative">Profile</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
              <img class="rad-half mb-10" src="imgs/<?= $_SESSION["profile_pic_ad"] ?>" alt="" />
              <h3 class="m-0"><?php echo "{$_SESSION["first_name_ad"]}";?> <?php echo "{$_SESSION["last_name_ad"]}";?></h3>
            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
                <div class="box p-20 d-flex align-center">
                  <h4 class="c-grey fs-15 m-0 w-full"><i style="margin-right:5px;color:aquamarine;border:1px solid #666;border-radius:50%; " class="fa-solid fa-circle"></i>General Information</h4>
                  <div class="fs-14">
                    <span class="c-grey">Full Name:</span>
                    <span><?php echo "{$_SESSION["first_name_ad"]}";?> <?php echo "{$_SESSION["last_name_ad"]}";?></span>
                  </div>
                  <div class="fs-14">
                    <span class="c-grey">Gender:</span>
                    <span><?php echo "{$_SESSION["gender_ad"]}";?></span>
                  </div>
                  <div class="fs-14">
                    <span class="c-grey">City:</span>
                    <span><?php echo "{$_SESSION["city_ad"]}";?></span>
                  </div>
                </div>
                <!-- End Information Row -->
                <!-- Start Information Row -->
                <div class="box p-20 d-flex align-center">
                  <h4 class="c-grey w-full fs-15 m-0"><i style="margin-right:5px;color:aquamarine;border:1px solid #666;border-radius:50%; " class="fa-solid fa-circle"></i>Personal Information</h4>
                  <div class="fs-14">
                    <span class="c-grey">Email:</span>
                    <span><?php echo "{$_SESSION["email_ad"]}";?></span>
                  </div>
                  <div class="fs-14">
                    <span class="c-grey">Phone:</span>
                    <span><?php echo "{$_SESSION["phone_number_ad"]}";?></span>
                  </div>
                  <div class="fs-14">
                    <span class="c-grey">Date Of Birth:</span>
                    <span><?php echo "{$_SESSION["birth_date_ad"]}";?></span>
                  </div>
                </div>
              <!-- End Information Row -->
            </div>
          </div>
          <!-- End Overview -->
          <div style="margin-top: 30px;" class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Update Profile</h2>
            <p class="mt-0 mb-20 c-grey fs-15">You can update the informations about you</p>

              <?php if (isset($_GET['update-profile-error'])) { ?>
     		        <p class="error"><?php echo $_GET['update-profile-error']; ?></p>
     	        <?php } ?>
              <?php if (isset($_GET['update-profile-success'])) { ?>
     		        <p class="success"><?php echo $_GET['update-profile-success']; ?></p>
     	        <?php } ?>
              <?php if (isset($_GET['upload-pic-error'])) { ?>
     		        <p class="error"><?php echo $_GET['upload-pic-error']; ?></p>
     	        <?php } ?>
              <?php if (isset($_GET['upload-pic-success'])) { ?>
     		        <p class="success"><?php echo $_GET['upload-pic-success']; ?></p>
     	        <?php } ?>

            <form action="update-profile-ad.php" method="post" class="showInfo and update">
              <div class="mb-15">
               <label class="fs-14 c-grey d-block mb-10" for="first">User Name</label>
               <input
                disabled
                class="b-none border-ccc p-10 rad-6 d-block w-full"
                type="text"
                id="first"
                name="user_name_ad"
                value="<?php echo "{$_SESSION["user_name_ad"]}";?>"
               />
              </div>
              <div class="mb-15">
               <label class="fs-14 c-grey d-block mb-10" for="first">First Name</label>
               <input
                disabled
                class="b-none border-ccc p-10 rad-6 d-block w-full"
                type="text"
                id="first"
                name="first_name_ad"
                value="<?php echo "{$_SESSION["first_name_ad"]}";?>"
               />
              </div>
                <div class="mb-15">
                    <label class="fs-14 c-grey d-block mb-5" for="last">Last Name</label>
                    <input
                      disabled 
                      class="b-none border-ccc p-10 rad-6 d-block w-full"
                      id="last"
                      type="text"
                      name="last_name_ad"
                      value="<?php echo "{$_SESSION["last_name_ad"]}";?>"
                    />
                
                </div>
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="gender">Gender</label>
                  <input
                  disabled
                  class="gender b-none border-ccc p-10 rad-6 w-full mr-10"
                  id="gender"
                  type="text"
                  name="gender_ad"
                  placeholder="<?php echo "{$_SESSION["gender_ad"]}";?>"
                  />
                </div>  
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="city">City</label>
                  <input
                  class="city b-none border-ccc p-10 rad-6 w-full mr-10"
                  name="city_ad"
                  list="cities"
                  placeholder="<?php echo "{$_SESSION["city_ad"]}";?>"
                  />
                  <datalist id="cities">
                    <option value="قصر الأبطال"></option>
                    <option value="عين ولمان"></option>
                    <option value="سطيف"></option>
                    <option value="العلمة"></option>
                    <option value="عين أزال"></option>
                    <option value="مزلوق"></option>
                    <option value="أوريسيا"></option>
                    <option value="عين الكبيرة"></option>
                    <option value="بابور"></option>
                    <option value="بني ورثيلان"></option>
                    <option value="بوعنداس"></option>
                    <option value="بوقاعة"></option>
                    <option value="عين الروى"></option>
                    <option value="جميلة"></option>
                    <option value="قلال"></option>
                    <option value="ماوكلان"></option>
                    <option value="صالح باي"></option>
                    <option value="أولاد تبان"></option>
                    <option value="الرصفة"></option>
                  </datalist>
                </div> 
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="phone_number">Phone number</label>
                  <input
                  class="phone_number b-none border-ccc p-10 rad-6 w-full mr-10"
                  id="phone_number"
                  type="text"
                  name="phone_number_ad"
                  minlength="10" maxlength="10"
                  placeholder="<?php echo "{$_SESSION["phone_number_ad"]}";?>"
                  />
                </div> 
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="birth-date">Birth date</label>
                  <input
                  class="birth-date b-none border-ccc p-10 rad-6 w-full mr-10"
                  id="password"
                  type="date"
                  data-date-format="dd mm yyyy"
                  name="birth_date_ad"
                  placeholder="<?php echo "{$_SESSION["birth_date_ad"]}";?>"
                  />
                </div> 
                <div class="profile-pic">
                  <input type="file" name="profile_pic" accept="image/*">
                  <input type="submit" name="upload" value="Upload">
                </div>
                </br>
                <button class="c-blue" type="submit" style="cursor:pointer;display:block;border:none;font-size: 17px;font-weight: bold;margin: 0 auto;background-color: #e9e8e8;border-radius: 10px;padding: 8px 15px">Change</button>
            </form>
          </div>
        </div>
    </div>
  </div>
</body>
</html>

<?php
  }
  else {
    echo "Unknown Error has occured. <br>";
  }

?>