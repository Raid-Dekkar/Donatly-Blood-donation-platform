<?php 
   session_start();

   if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
   <title>Home</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <!-- start header  -->
   <div class="header">
      <div class="container">
          <div class="logo">
              <a href="#"><img src="imgs/donately-logo.png" alt=""></a>
          </div>
          <div class="links-profile">
              <i class="fa-solid fa-xmark"></i>
              <div class="links ">
                  <ul class="link">
                      <li data-section=".header">Home</li>
                      <li data-section=".services">Service</li>
                      <li data-section=".about-us">About us</li>
                      <li data-section=".review">Reviews</li>
                      <li data-section=".staff">Staff</li>
                  </ul>
              </div>
              <div class="profile-dropdown">
               <div class="menu-container">
                  <div class="profile-pic" onclick="menuToggle();">
                     <img src="imgs/profile-pic.png" />
                  </div>
                  <div class="menu">
                     <h3><?php echo $_SESSION['user_name'];?></h3>
                     <ul>
                       <li>
                         <i class="fa-solid fa-circle-user"></i><a href="#">My profile</a>
                       </li>
                       <li>
                         <i class="fa-solid fa-pen-to-square"></i><a href="#">Edit profile</a>
                       </li>
                       <li>
                         <i class="fa-solid fa-envelope"></i><a href="#">Inbox</a>
                       </li>
                       <li>
                         <i class="fa-solid fa-gear"></i><a href="#">Setting</a>
                       </li>
                       <li>
                         <i class="fa-solid fa-circle-question"></i><a href="#">Help</a>
                       </li>
                       <li>
                         <i class="fa-solid fa-right-from-bracket"></i><a href="logout.php">Logout</a>
                       </li>
                     </ul>
                  </div>
               </div>
             </div>
          </div>
          
          <button class="toggle-menu">
              <span></span>
              <span></span>
              <span></span>
          </button>
      </div>
   </div>
   <!-- end header  -->
   <div class="welcome-phrase">
      <h1 class="welcome">
         Welcome, <?php echo "{$_SESSION['first_name']}";?>
      </h1>
     <!-- <a class="logout-button" href="logout.php">Logout</a> -->
   </div>
   <!-- Start Role -->
   <div class="role">
      <div class="container">
         <h2 class="question">I want to ...</h2>
         <div class="cards">
            <div class="donor-card">
               <div class="circle">
                  <img src="imgs/donation.png" alt="">
               </div>
               <div class="overlay"></div>
               <!-- <a href="#">Donate Blood</a> -->
               <button class="button donate"><a style="color: white" href="#donor-form"><span>Donate Blood</span></a></button>
            </div>
            <div class="reciever-card">
               <div class="circle">
                  <div class="circle">
                     <img src="imgs/infusion.png" alt="">
                  </div>
               </div>
               <div class="overlay"></div>
               <!-- <a href="#">Donate Blood</a> -->
               <button class="button recieve"><a style="color: white" href="#reciever-form"><span>Recieve Blood</span></a></button>
            </div>
         </div>
      </div>
   </div>
   <!-- End Role -->
   <!-- Start Donor Form -->
   <div class="form donor" id="donor-form">
      <div class="container">
         <h2 class="title donor">Donor Form</h2>
         <h4 class="instruction">Enter following informations to be registered as a donor</h4>
         
         <?php if (isset($_GET['donor-form-error'])) { ?>
     		   <p class="error"><?php echo $_GET['donor-form-error']; ?></p>
     	   <?php } ?>
         <?php if (isset($_GET['donor-form-success'])) { ?>
     		   <p class="success"><?php echo $_GET['donor-form-success']; ?></p>
     	   <?php } ?>
         
         <form action="donate-post.php" method="POST">
            <div class="nowrap first_name">
               <p>First Name</p>
               <input name="first_name" type="text" placeholder="<?php echo "{$_SESSION['first_name']}";?>" disabled>   
            </div>
            <div class="nowrap last_name">
               <p>Last Name</p>
               <input name="last_name" type="text" placeholder="<?php echo "{$_SESSION['last_name']}";?>" disabled>   
            </div>
            <div class="nowrap email">
               <p>Email</p>
               <input name="email" type="email" placeholder="<?php echo "{$_SESSION['email']}";?>" disabled>   
            </div>
            <div class="nowrap phone_number">
               <p>Phone Number</p>
               <input name="phone_number_d" type="text" placeholder="Phone Number" minlength="10" maxlength="10">   
            </div>
            <div class="nowrap birth_date">
               <p>Birth Date</p>
               <input required name="birth_date_d" data-date-format="dd mm yyyy" type="date" placeholder="Birth Date">   
            </div>
            <div class="nowrap city">
               <p>City</p>
               <input required name="city_d" list="cities" placeholder="Select City">
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
            <div class="nowrap gender">
               <p>Gender</p>
               <select required name="gender_d" id="gender">
                  <option disabled selected>Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
            </div>
            <div class="nowrap blood_type">
               <p>Blood Type</p>
               <select required title="" name="blood_type_d" id="blood_type">
               <option disabled selected>Blood Type</option>
                  <optgroup label="O">
                     <option value="O+">O+</option>
                     <option value="O-">O-</option>
                  </optgroup>
                  <optgroup label="A">
                     <option value="A+">A+</option>
                     <option value="A-">A-</option>
                  </optgroup>
                  <optgroup label="B">
                     <option value="B+">B+</option>
                     <option value="B-">B-</option>
                  </optgroup>
                  <optgroup label="AB">
                     <option value="AB+">AB+</option>
                     <option value="AB-">AB-</option>
                  </optgroup>
               </select>
            </div>
            <div class="line"></div>
            <div class="wrap recent_donation">
               <p>When was the last time you donated?</p>
               <textarea required name="recent_donation" id="recent_donation" placeholder="Write your answer here ..." cols="50" rows="3"></textarea>
            </div>
            <div class="wrap diseases">
               <p>Do you have any diseases?</p>
               <textarea required name="diseases" id="diseases" placeholder="Write your answer here ..." cols="50" rows="3"></textarea>  
            </div>
            <input name="reg_donor" class="reg_donor" type="submit" value="Register as Donor">
         </form>
      </div>
   </div>
   <!-- End Donor Form -->
   <!-- Start Reciever Form -->
   <div class="form reciever" id="reciever-form">
      <div class="container">
         <h2 class="title reciever">Reciever Form</h2>
         <h4 class="instruction">Enter following informations to be registered as a reciever</h4>
         
         <?php if (isset($_GET['reciever-form-error'])) { ?>
     		   <p class="error"><?php echo $_GET['reciever-form-error']; ?></p>
     	   <?php } ?>
         <?php if (isset($_GET['reciever-form-success'])) { ?>
     		   <p class="success"><?php echo $_GET['reciever-form-success']; ?></p>
     	   <?php } ?>
         
         <form action="recieve-post.php" method="POST">
            <div class="nowrap first_name">
               <p>First Name</p>
               <input name="first_name" type="text" placeholder="<?php echo "{$_SESSION['first_name']}";?>" disabled>   
            </div>
            <div class="nowrap last_name">
               <p>Last Name</p>
               <input name="last_name" type="text" placeholder="<?php echo "{$_SESSION['last_name']}";?>" disabled>   
            </div>
            <div class="nowrap email">
               <p>Email</p>
               <input name="email" type="email" placeholder="<?php echo "{$_SESSION['email']}";?>" disabled>   
            </div>
            <div class="nowrap phone_number">
               <p>Phone Number</p>
               <input required name="phone_number_r" type="text" placeholder="Phone Number" minlength="10" maxlength="10">   
            </div>
            <div class="nowrap birth_date">
               <p>Birth Date</p>
               <input required name="birth_date_r" data-date-format="dd mm yyyy" type="date" placeholder="Birth Date">   
            </div>
            <div class="nowrap city">
               <p>City</p>
               <input required name="city_r" list="cities" placeholder="Select City">
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
            <div class="nowrap gender">
               <p>Gender</p>
               <select required name="gender_r" id="gender">
                  <option disabled selected>Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
            </div>
            <div class="nowrap blood_type">
               <p>Blood Type</p>
               <select title="" required name="blood_type_r" id="blood_type">
               <option disabled selected>Blood Type</option>
                  <optgroup label="O">
                     <option value="O+">O+</option>
                     <option value="O-">O-</option>
                  </optgroup>
                  <optgroup label="A">
                     <option value="A+">A+</option>
                     <option value="A-">A-</option>
                  </optgroup>
                  <optgroup label="B">
                     <option value="B+">B+</option>
                     <option value="B-">B-</option>
                  </optgroup>
                  <optgroup label="AB">
                     <option value="AB+">AB+</option>
                     <option value="AB-">AB-</option>
                  </optgroup>
               </select>
            </div>
            <div class="line"></div>
            <div class="wrap medical_condition">
               <p>Describe your medical condition?</p>
               <textarea required name="medical_condition" id="medical_condition" placeholder="Write your answer here ..." cols="50" rows="3"></textarea>
            </div>
            <input name="reg_reciever" class="reg_reciever" type="submit" value="Register as reciever">
         </form>
      </div>
   </div>
   <!-- End Reciever Form -->
   <!-- Profile dropdown menu -->
   <script>
      function menuToggle() {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");
      }
    </script>
</body>
</html>

<?php 
   }else{
     header("Location: login.php");
     exit();
   }
?>