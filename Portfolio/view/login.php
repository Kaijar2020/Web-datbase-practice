<?php
 include "../db/config.php";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin login</title>
     <style>
         div{
             align-content: center;
             margin: 100px;
             margin-left: 500px;
             background-color: indigo;
             height: 150px;width: 300px;
         }
         div>form{
             padding: 20px;
             color: white;
             font-weight: bold;
         }
     </style>
 </head>
 <body >
       
    <div >
      <form action=" " method="POST">
           
           Username: <br>
           <input type="text" name="username" placeholder="username"><br>
          Password: <br>
           <input type="password" name="password" placeholder="password"><br>
                     <input type="submit" name="button" value="Log in">
       </form>
      </div>
     
 </body>
 </html>
 <?php
 $uname=$_POST['username'];
 $password=$_POST['password'];
 $sql="SELECT *FROM justify WHERE username='$uname'AND password='$password' ";
 $result=mysqli_query($coneection,$sql);
 $row=mysqli_num_rows($result);
 
 if($row==1){
    session_start();
    $_SESSION['username']='$uname';
    header("location:message.php? username='$uname'");
}
 
else{
    echo"Invalid username or Password";
}

 ?>