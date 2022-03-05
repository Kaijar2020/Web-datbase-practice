<?php
session_start();
 include "../db/config.php";


$sql="SELECT *FROM contact";
$result=mysqli_query($coneection,$sql);
echo '<table border="2px" width="100%">

<tr> <th> Sl</th> <th> Name</th><th> Email</th><th>Phone</th><th>Message</th> <th colspan="2">Action</th></tr>

';
while($row=mysqli_fetch_array($result)){
$sl=$row['Sl'];
 $name=$row['Name'];
 $email=$row['Email'];
 $phone=$row['Phone'];
 $message=$row['Message'];
 echo '
 
   <tr> 
   <td>'.$sl.'</td>
   <td>'.$name.'</td>
   <td>'.$email.'</td>
   <td>'.$phone.'</td>
   <td>'.$message.'</td>

   </tr>';
}
echo'</table>';
?>

