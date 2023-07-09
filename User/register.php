
<?php
   $conn = require('db.php');

if($_SERVER['REQUEST_METHOD']=='POST')
{
   $username = $_POST["Username"];
   $email_id=$_POST["email"];
   $password = $_POST["password"];
   $confirmpassword = $_POST["confirmpassword"];
   $sql =  "INSERT INTO `register` (`Username`, `email_id`, `password`, `Confirm password`) VALUES ('$username', '$email_id', '$password', '$confirmpassword'); ";
   $result = mysqli_query($conn,$sql);
   if($result){
      echo "The record has been inserted succesfully<br>";
   }
   else{
      echo "THe record was not inserted because of error".mysqli_error($conn);
   }

}
?>


