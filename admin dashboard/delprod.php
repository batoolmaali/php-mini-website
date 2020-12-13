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
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['uname'];
        $connection->query($sql ="delete from products where product_name = '$name'");
        header('Location: product-manage.php');
        // echo "asdasd";
        // var_dump($connection->query($sql ="delete from persons where person_name= '$name'"));  
    //   if( $connection->query($sql ="delete from persons where PERSON_NAME= $name")){
      
    }
?>