<!DOCTYPE html>

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
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name    = $_POST['uname'];
    $password = $_POST['psw'];
    $hashedpass= sha1($password);
    echo ( $hashedpass);
    if(!empty($name) && !empty($password)){
      
        $result = $connection->query("select admin_name, admin_id from admins WHERE admin_name= '$name' AND admin_password = '$password'");

        // $result = $connection->query("select admin_name from admins"); if this is the query

        $row    = mysqli_fetch_assoc($result); //record #1
        // $row    = mysqli_fetch_assoc($result); record #2
        // $row    = mysqli_fetch_assoc($result); record #3

        // var_dump($row['admin_id']);
      
       
        if($row){
            $_SESSION['id'] = $row['admin_id'];

            // var_dump($_SESSION);
                header('Location: manage-admin.php');

        }else{
            $error = "User not Found";
        }
    }else{
        $error =  "username / password Required";
    }
}
 



// if ($_SERVER["REQUEST_METHOD"] == "POST"){
//     $name = $_POST["uname"];
//     $password = $_POST["psw"];
// // var_dump(   $sql = $connection->query("select admin_name from admins WHERE admin_name= '$name' AND admin_password = '$password'"));
//     $sql = $connection->query("select admin_name from admins WHERE admin_name= '$name' AND admin_password = '$password'");
// // var_dump(mysqli_fetch_array($sql));
//     if(mysqli_fetch_array($sql)) {
//             header('Location: manage-admin.php');

//     }else{
//             echo 'error'.'<br>'.$connection->error;
//     }
// }

?>

<html>
  <head>
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style>
      .sidenav {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #404040;
        overflow-x: hidden;
        padding-top: 20px;
      }

      .sidenav a {
        padding: 6px 6px 6px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
      }

      .sidenav a:hover {
        color: #f1f1f1;
      }

      .main {
        margin-left: 200px; /* Same as the width of the sidenav */
      }

      @media screen and (max-height: 450px) {
        .sidenav {
          padding-top: 15px;
        }
        .sidenav a {
          font-size: 18px;
        }
      }
      body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:  #404040;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-top:30px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: teal ;
 
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    </style>
  </head>
  <body>
  <nav class="navbar navbar" style="background-color: #404040">
          <a class="navbar-brand" href="#"> Bootstrap </a>
          <form >
           
          </form>
        </nav>
    <div class="sidenav">
      <a href="#" style="color: white; margin-top: 0; background-color: teal"
        ><i class="fa fa-hourglass-end" aria-hidden="true" style="margin-right:10px"></i></i> admin
      </a>
      <a href="#"><i class="fa fa-tachometer" aria-hidden="true" style="margin-right:10px"></i>dashbord</a>
      <a href="manage-admin.php"><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>manage admin</a>
      <a href="manage-category.php"><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>category</a>
      <a href="><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>product</a>
      <a href="manage_student.php"><i class="fa fa-table" aria-hidden="true" style="margin-right:10px"></i>manage_student</a>
      <a href="#"
        ><i class="fa fa-check-square-o" aria-hidden="true" style="margin-right:10px"></i>Contact</a
      >
      <a href="#"
        ><i class="fa fa-calendar-o" aria-hidden="true" style="margin-right:10px"></i> calender</a
      >
    </div>

    <div class="main">
      <h2></h2>
      <p></p>
    </div>
    <form action="" method="post" >
  <div class="imgcontainer">
   <h1>login form</h1>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
   
  </div>
</form>
<?php

 
// if ($_SERVER["REQUEST_METHOD"] == "POST"){
//     $name = $_POST["uname"];
//     $password = $_POST["psw"];

//     $sql = $connection->query("select admin_name from admins WHERE admin_name= '$name' AND admin_password = '$password'");

//     // var_dump(mysqli_fetch_array($sql));

//     if(mysqli_fetch_array($sql)) {
//             header('Location: manage-admin.php');
           
//     }else{
//             echo 'error'.'<br>'.$connection->error;
//     }
// }
    ?>
  </body>
</html>
