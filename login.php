<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <!-- Start Login -->
   <div class="logo">
      <a href="index.php"><img src="imgs/donately-logo.png" alt=""></a>
   </div>
   <div class="login">
      <div class="container">
         <form class="form" action="login-post.php" method="POST">
            <div class="header">Log In</div>

            <?php if (isset($_GET['error'])) { ?>
     		      <p class="error"><?php echo $_GET['error'];?></p>
     	      <?php } ?>

            <div class="inputs">
                <input name="user_name" placeholder="User name" class="input" type="text">
                <input name="password" placeholder="Password" class="input" type="password">
            <div class="checkbox-container">
                <label class="checkbox">
                <input type="checkbox" id="checkbox">
                </label>
                <label for="checkbox" class="checkbox-text">Remember me</label>
            </div>
            <button class="sub-btn">Submit</button>
            <a class="forget" href="#">Forget password ?</a>
            <p class="signup-link">Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
      </div>
   </div>
  <!-- End Login -->
</body>
</html>