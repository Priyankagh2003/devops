<?php
//When form submitted, check and create user session.
   $conn = require('db.php');

   if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['email'])) {
      $email_id=$_POST["email"];
      $password = $_POST["password"];
        // Check user is exist in the database
      $query = "SELECT * FROM `register` Exists email_id='$email_id'
                     AND password='$password'";
      $result = mysqli_query($conn, $query) or die(mysql_error());
      $rows = mysqli_num_rows($result);
        if($rows['password'] == $password){
                header("Location: /php%20try/User/userhome.php");
        }
        else{
            echo "Incorrect password";

            
        }
            // Redirect to user dashboard page
   
        // else {
        //     echo "<div class='form'>
        //           <h3>Incorrect Username/password.</h3><br/>
        //           <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
        //           </div>";
        // }
    } 
   }

?>

    // When form submitted, check and create user session.
    // if (isset($_POST['email_id'])) {
    //     $email = stripslashes($_REQUEST['email_id']);    // removes backslashes
    //     $email = mysqli_real_escape_string($con, $email);
    //     $password = stripslashes($_REQUEST['password']);
    //     $password = mysqli_real_escape_string($con, $password);
    //     // Check user is exist in the database
    //     $query    = "SELECT * FROM `register` WHERE email_id='$email'
    //                  AND password='" . md5($password) . "'";
    //     $result = mysqli_query($con, $query) or die(mysql_error());
    //     $rows = mysqli_num_rows($result);
    //     header("Location: /php%20try/User/userhome.php");
    //     // if($_SESSION['email_id'] = $email){
    //     //         header("Location: /php%20try/User/userhome.php");
    //     // }
    //         // Redirect to user dashboard page
   
    //     // else {
    <!-- //     //     echo "<div class='form'>
    //     //           <h3>Incorrect Username/password.</h3><br/>
    //     //           <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
    //     //           </div>"; -->
    //     // }
    // } 
?>

