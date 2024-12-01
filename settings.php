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
      <title>Settings</title>
      <link rel="stylesheet" href="css/all.min.css" />
      <link rel="stylesheet" href="css/framework.css" />
      <link rel="stylesheet" href="css/admin.css" />
      <link rel="stylesheet" href="css/home.css" />
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
      <style>
       

      </style>
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
              <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="settings.php">
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
          <h1 class="p-relative">Settings</h1>
          <div class="settings-page m-20 d-grid gap-20">
          <!-- Start update info admin -->
          <div class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">General Info</h2>
            <p class="mt-0 mb-20 c-grey fs-15">General Information About Your Account</p>

              <?php if (isset($_GET['general-info-error'])) { ?>
     		        <p class="error"><?php echo $_GET['general-info-error']; ?></p>
     	        <?php } ?>
              <?php if (isset($_GET['general-info-success'])) { ?>
     		        <p class="success"><?php echo $_GET['general-info-success']; ?></p>
     	        <?php } ?>

            <form action="general-info-ad.php" method="post" class="showInfo and update">
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
                  <label class="fs-14 c-grey d-block mb-5" for="email">Email</label>
                  <input
                  class="email b-none border-ccc p-10 rad-6 w-full mr-10"
                  id="email"
                  type="email"
                  name="email_ad"
                  value="<?php echo "{$_SESSION["email_ad"]}";?>"
                  />
                </div> 
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="email">Password</label>
                  <input
                  class="email b-none border-ccc p-10 rad-6 w-full mr-10"
                  id="password"
                  type="text"
                  name="password_ad"
                  value="<?php echo "{$_SESSION["password_ad"]}";?>"
                  />
                </div> 
                </br>
                <button class="c-blue" type="submit" style="cursor:pointer;display:block;border:none;font-size: 17px;font-weight: bold;margin: 0 auto;background-color: #e9e8e8;border-radius: 10px;padding: 8px 15px">Change</button>
            </form>
          </div>
          <!-- End update info admin -->
            <!-- Start add admin -->
          <div class="p-20 bg-white rad-10">
              <h2 class="mt-0 mb-10">Add Admin</h2>
              <p class="mt-0 mb-20 c-grey fs-15">You can fill informations to add new admins</p>

              <?php if (isset($_GET['add-error'])) { ?>
     		        <p class="error"><?php echo $_GET['add-error']; ?></p>
     	        <?php } ?>
              <?php if (isset($_GET['add-success'])) { ?>
     		        <p class="success"><?php echo $_GET['add-success']; ?></p>
     	        <?php } ?>

              <form action="add-admin.php" method="POST">
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-10" for="first">First Name</label>
                  <input
                  class="b-none border-ccc p-10 rad-6 d-block w-full"
                  name="first_name_ad" placeholder="First name" class="input" type="text" required/>
                </div>
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="last">Last Name</label >
                  <input
                  class="b-none border-ccc p-10 rad-6 d-block w-full"
                  id="last"
                  name="last_name_ad" placeholder="Last name" class="input" type="text" required/>
                </div>
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="last">User Name</label>
                  <input
                  class="b-none border-ccc p-10 rad-6 d-block w-full"
                  id="last"
                  name="user_name_ad" placeholder="User name" class="input" type="text" required/>
                </div>
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="email">Email</label>
                  <input
                  class="email b-none border-ccc p-10 rad-6 w-full mr-10"
                  id="email"
                  name="email_ad"
                  type="email"
                  placeholder="Email" required/>
                </div>
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="email">Password</label>
                  <input class="email b-none border-ccc p-10 rad-6 w-full mr-10" name="password_ad" placeholder="Password" class="input" type="password" required/>
                </div>
                <div class="mb-15">
                  <label class="fs-14 c-grey d-block mb-5" for="email">Confirm Password</label>
                  <input class="email b-none border-ccc p-10 rad-6 w-full mr-10" name="conf_pass_ad" placeholder="Confirm password" class="input" type="password" required/>
                </div>
                <button class="c-blue" type="submit" style="cursor:pointer;display:block;border:none;font-size: 17px;font-weight: bold;margin: 0 auto;background-color: #e9e8e8;border-radius: 10px;padding: 8px 15px">Add</button>
              </form>
            <!-- End add admin -->
          </div>
          <!-- end add admin -->
        </div>
      </div>
  </div>
  
<script >
                                  
function menuToggle() {
  document.querySelector(".profile-pic").classList.toggle("active");
  document.querySelector(".menu").classList.toggle("active");
  }
  const deleteButton = document.getElementById('delete-button');
  const toggleMenu = document.querySelector(".menu");                             

  
document.querySelector(".settings-page").onclick = closeLink;
// document.querySelector(".projects").onclick = closeLink;
// document.querySelector(".role").onclick = closeLink;
function closeLink(){
 toggleMenu.classList.remove("active")
}
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
  }
  else {
    // Handle error if user's information could not be retrieved
    echo "Error retrieving user's information from database.";
  }

?>