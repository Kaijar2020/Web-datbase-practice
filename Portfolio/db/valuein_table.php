<?php 
 include "config.php";
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $message=$_POST['message'];

 if(isset($_POST['submit'])){
 $insert="INSERT INTO contact (Name, Email, Phone, Message) VALUES('$name','$email','$phone','$message')";
 
 $result=mysqli_query($coneection,$insert);
 if($result){
     echo "Your message has been delivered";
     echo "<br>";
     echo "Thank you for contacting me!.";
 }
}

 
 ?>