<?php

     $username = 'root';
     $password = '';
     $server = 'localhost';
     $db_name = 'charity_web';

     $conn = mysqli_connect("$server","$username","$password","$db_name");

     if(!$conn){
          echo "error";
     }

?>
