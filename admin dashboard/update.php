<?php

        $servername= 'localhost';
        $username= 'root';
        $password= '';
        $dbname= 'batooladmin';

        $connection = new mysqli($servername,$username,$password,$dbname);


        if($connection->connect_error){
            echo 'error';
        }else{
            // echo 'connected successfully';
        }

        $email    = $_POST['email'];
        $password = $_POST['psw'];
        $name = $_POST['uname'];
        $oldEmail = $_POST['oldEmail'];

        $connection->query($sql ="update admins set 
        admin_name     = '$name',
        admin_email = '$email',
        admin_password = '$password'
       where admin_email ='$oldEmail' ");
     header('Location: manage-admin.php'); 
    
?>