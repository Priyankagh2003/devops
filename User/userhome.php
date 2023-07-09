<!-- INSERT INTO `register` (`Username`, `email_id`, `password`, `Confirm password`) VALUES ('Shreya746', 'shreya@gmail.com', 'Shreya123', 'Shreya123'); -->
<!-- INSERT INTO `login` (`email_id`, `password`) VALUES ('shreya@gmail.com', 'Shreya123'); -->
<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login_system/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="icon" href=""> -->

</head>

<body>
   <!-- header section starts  -->

   <header class="header">

      <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> CAREER MAKERS </a>

      <nav class="navbar">
         <div id="close-navbar" class="fas fa-times"></div>
         <a href="userhome.php">home</a>
         <a href="about.html">about</a>
         <a href="courses.html">courses</a>
         <a href="contact.html">contact</a>
         <a href="index.php">Books</a>
      </nav>

      <div class="icons">
         <div id="account-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

   </header>

   <!-- account form section starts  -->

   <div class="account-form">

      <div id="close-form" class="fas fa-times"></div>

        <div class="buttons">
         <span class="btn active login-btn"><a href="login_form.php">login</a></span>
         <span class="btn register-btn"><a href="register_form.php">register</a></span><br>
         <br>
         <span class="btn login-admin-btn"><a href="logout.php">logout</a></span>
      </div>
      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
            ;
         }
         ;
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form>

      <!-- <form name="myform" method="post" action="./userhome.php" class="login-form active" onsubmit="return validate()">
         <h3>login now</h3>
         <input type="email" name="email" placeholder="enter your email" class="box">
         <input type="password" name="password" placeholder="enter your password" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
            <a href="#">forgot password?</a>
         </div>
         <input type="submit" name = "register_btn" value="Login" class="btn">  -->
      <!-- <button type="submit" class="btn" id="login" name="register_btn">Login</button> -->

      <!-- </form>  -->

      <!-- <form name="myform" action="./login.php" id="login1" class="register-form" onsubmit="return validate()"
         method="post">
         <h3>register now</h3>
         <input type="text" name="Username" placeholder="enter your Username" class="box">
         <input type="email" name="email" placeholder="enter your email" class="box">
         <input type="password" name="password" placeholder="enter your password" class="box">
         <input type="password" name="confirmpassword" placeholder="confirm your password" class="box">
         <input type="submit" value="register now" class="btn"> -->
      <!-- <button type="submit" class="btn" id = "login" name="register_btn"><a href = "./User/userhome.html">Register</a></button> -->

      <!-- </form>  -->

      <!-- <form name="myform" class="login-admin-form" action="" onsubmit="return validate()">
         <h3>login now</h3>
         <input type="email" name="email_id" id="email_id" placeholder="enter your email" class="box">
         <input type="password" name="password" id="pwd" placeholder="enter your password" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
            <a href="#">forgot password?</a>
         </div>
         <button type="submit" class="btn" id="butn" name="register_btn"><a href="#" onclick='compare()'>Login as
               admin</a></button>
      </form> -->


      <!-- <script>
         function validate() {
            let x = document.getElementById('login1');
            let name = x.email.value;
            //  var name=document.forms["myform"]["email"].value;  
            var password = document.myform.password.value;

            if (name == null || name == "") {
               alert("Email id can't be blank");
               return false;
            } else if (password.length < 6) {
               alert("Password must be at least 6 characters long.");
               return false;
            }
         } 
      </script> -->


   </div> 

    <!-- <div class="form-container">

      <form action="" method="post">
      <h3>login now</h3>
     
      // if (isset($error)) {
      //    foreach ($error as $error) {
      //       echo '<span class="error-msg">' . $error . '</span>';
      //    }
      //    ;
      // }
      // ;
      ?> 
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form> 

   </div>  -->


    <!-- account form section ends -->

      <!-- header section ends -->

      <!-- home section starts  -->

      <section class="home">

         <div class="swiper home-slider">

            <div class="swiper-wrapper">

               <section class="swiper-slide slide" style="background: url(./images/home-slide-1.jpg) no-repeat;">
                  <div class="content">
                     <h3 style="color: black;">
                        <h1>welcome <span>
                              <?php echo $_SESSION['user_name'] ?>
                           </span></h1>the best guidance you will find find here!
                     </h3>
                     <p></p>
                     <a href="./courses.html" class="btn">get started</a>
                  </div>
               </section>

               <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
                  <div class="content">
                     <h3>the best guidance you will find find here!</h3>
                     <p></p>
                     <a href="./courses.html" class="btn">get started</a>
                  </div>
               </section>

               <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
                  <div class="content">
                     <h3>the best guidance you will find find here!</h3>
                     <p></p>
                     <a href="./courses.html" class="btn">get started</a>
                  </div>
               </section>

            </div>

            <div class="swiper-pagination"></div>

         </div>

      </section>

      <!-- home section ends -->

      <!-- subjects section starts  -->

      <section class="subjects">

         <h1 class="heading"> POPULAR CARRER PATHS</h1>

         <div class="box-container">

            <div class="box">
               <img src="images/subject-icon-1.png" alt="">
               <h3>graphic design</h3>

            </div>

            <div class="box">
               <img src="images/subject-icon-2.png" alt="">
               <h3>mathemetics</h3>

            </div>

            <div class="box">
               <img src="images/subject-icon-3.png" alt="">
               <h3>teaching</h3>

            </div>

            <div class="box">
               <img src="images/subject-icon-4.png" alt="">
               <h3>development</h3>

            </div>

            <div class="box">
               <img src="images/subject-icon-5.png" alt="">
               <h3>science</h3>

            </div>

            <div class="box">
               <img src="images/subject-icon-6.png" alt="">
               <h3>engineering</h3>

            </div>

         </div>

      </section>

      <!-- subjects section ends -->

      <!-- home courses slider section starts  -->

      <section class="home-courses">

         <h1 class="heading"> courses after 12th</h1>

         <div class="swiper home-courses-slider">

            <div class="swiper-wrapper">

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/course-1-1.png" alt="">
                     <h3>Engineering</h3>
                  </div>
                  <div class="content">
                     <h3>Engineering</h3>
                     <p>check out the top colleges </p>
                     <a href="engineering.html" class="btn">read more</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/course-1-2.png" alt="">
                     <h3>Medical</h3>
                  </div>
                  <div class="content">
                     <h3>Medical</h3>
                     <p>check out the top colleges</p>
                     <a href="medical.html" class="btn">read more</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/course-1-3.png" alt="">
                     <h3>Law</h3>
                  </div>
                  <div class="content">
                     <h3>Law</h3>
                     <p>check out the top colleges</p>
                     <a href="law.html" class="btn">read more</a>
                  </div>
               </div>

               <!-- <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-4.png" alt="">
                  <h3>web development</h3>
               </div>
               <div class="content">
                  <h3>web development</h3>
                  <p>check out the top colleges</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-5.png" alt="">
                  <h3>web development</h3>
               </div>
               <div class="content">
                  <h3>web development</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/course-1-6.png" alt="">
                  <h3>web development</h3>
               </div>
               <div class="content">
                  <h3>web development</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
                  <a href="#" class="btn">read more</a>
               </div> -->
               <!-- </div> -->

            </div>

         </div>

      </section>

      <!-- home courses slider section ends -->









      <!-- footer section starts  -->

      <section class="footer">

         <div class="box-container">

            <div class="box">
               <h3> <i class="fas fa-lightbulb"></i> career makers </h3>
               <p>build your future with us!!!</p>
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>

            <div class="box">
               <h3>quick links</h3>
               <a href="userhome.html" class="link">home</a>
               <a href="about.html" class="link">about</a>
               <a href="courses.html" class="link">courses</a>
               <a href="contact.html" class="link">contact</a>
            </div>

            <!-- <div class="box">
            <h3>useful links</h3>
            <a href="#" class="link">help center</a>
            <a href="#" class="link">ask questions</a>
            <a href="#" class="link">send feedback</a>
            <a href="#" class="link">private policy</a>
            <a href="#" class="link">terms of use</a>
         </div> -->

            <div class="box">
               <h3>newsletter</h3>
               <p>subscribe for latest upadates</p>
               <form action="">
                  <input type="email" name="" placeholder="enter your email" id="" class="email">
                  <input type="submit" value="subscribe" class="btn">
               </form>
            </div>

         </div>



      </section>

      <!-- footer section ends -->

      <!-- swiper js link  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- custom js file link  -->
      <script src="js/script.js"></script>
      <script src="login.js"></script>

</body>

</html>