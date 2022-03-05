<?php 
 include "config.php";
 $contact_table="CREATE TABLE IF NOT EXISTS contact(
    Sl INT AUTO_INCREMENT ,
    
    Name VARCHAR(20) NOT NULL,
    Email VARCHAR(20) NOT NULL,
    PRIMARY KEY(Email),
    Phone INT(15) NOT NULL,
    Message VARCHAR(250) NOT NULL 
)";
$sql=mysqli_query($coneection,$contact_table);

?>