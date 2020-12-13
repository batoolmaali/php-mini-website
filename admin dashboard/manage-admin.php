
<?php
session_start();

// var_dump($_SESSION);
if(! isset($_SESSION['id']))
{
  header('Location: admin-dash.php');
}
// if(isset($_POST['submit'])){
//     $email    = $_POST['email'];
//     $password = $_POST['password'];
//     if(!empty($email) && !empty($password)){
//         $query = "select * from admin where admin_email = '$email' AND
//                   admin_password = '$password'";
//         $result = mysqli_query($conn,$query);
//         $row    = mysqli_fetch_assoc($result);
//         if($row){
//             $_SESSION['id'] = $row['admin_id'];
//             header("location:manage_admin.php");
//         }else{
//             $error = "User not Found";
//         }
//     }else{
//         $error =  "username / password Required";
//     }
// }

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

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $password =($_POST["psw"]);
    $email =($_POST["email"]);
    $name =($_POST["uname"]);

//   var_dump( $connection->query($sql = "INSERT INTO admins (admin_name,admin_email, admin_password) Values ('$name','$email', '$password')"));
        $connection->query($sql = "INSERT INTO admins (admin_name,admin_email, admin_password) Values ('$name','$email', '$password')");
            
        header('Location: manage-admin.php'); 
}

    

?>
<!DOCTYPE html>
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
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      form {
        border: 3px solid #f1f1f1;
      }

      input[type="text"],
      input[type="password"] {
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
      }

      button:hover {
        opacity: 0.8;
      }

      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
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
      .a {
        padding: 6px 6px 6px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
      }
     a:hover {
        color: #f1f1f1;
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
    </style>
  </head>
  <body>
    <nav class="navbar navbar" style="background-color: #404040">
        <a class="navbar-brand" href="#"> Bootstrap </a>
       
        <a href="#"
          ><i class="fa fa-user-circle-o" aria-hidden="true" style="margin-right:10px"></i>logout</a
        >
        
      </nav>
      <div class="sidenav">
        <a href="#" style="color: white; margin-top: 0; "
          ><i class="fa fa-hourglass-end" aria-hidden="true" style="margin-right:10px"></i> admin
        </a>
        <a href="admin-dash.php"><i class="fa fa-tachometer" aria-hidden="true" style="margin-right:10px"></i>dashbord</a>
        <a href="manage-admin.php" style="color: white; margin-top: 0; background-color: teal">
        <i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>manage admin</a>
        <a href="manage-category.php"><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>category</a>
        <a href="product-manage.php"><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>product</a>
        <a href="#"><i class="fa fa-table" aria-hidden="true" style="margin-right:10px"></i>chart</a>
        <a href="#"
          ><i class="fa fa-check-square-o" aria-hidden="true" style="margin-right:10px"></i>Contact</a
        >
        <a href="#"
          ><i class="fa fa-calendar-o" aria-hidden="true" style="margin-right:10px"></i>calander</a
        >
        <a href="test/logout.php"
          ><i class="fa fa-user-circle-o" aria-hidden="true" style="margin-right:10px"></i>logout</a
        >
      </div>
    <h2>Login Form</h2>

    <form action="" method="post" style="width: 700px; margin-left: 500px;">
      <div class="container">
       
          <h2 style="text-align: center">create admin</h2>
       
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required />
        <label for="email"><b>email</b></label>
        <input type="text" placeholder="Enter Username" name="email" required />

        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          required
        />

        <button type="submit">create</button>
      </div>
    </form>
    <table class="table table-striped" style="width: 700px; margin-left: 500px; margin-top: 5%;">
        <tr  style="background-color:#404040; color:white">>
          <th scope="col">#</th>
          <th scope="col">admin fullname</th>
          <th scope="col">admin email</th>
          <th scope="col">edit</th>
          <th scope="col">delete</th>
        </tr>
        <tr>
        <?php 
        $admins = array();
    $records=$connection->query("select admin_id, admin_name,admin_email,admin_password from admins");

    // var_dump( $records);
  
    while($row = $records->fetch_assoc()){
        $admins[]=$row;
    }

    // var_dump( $persons);
    // ?>
    <?php foreach($admins as $key=>$val){ ?>
   <tr>
        <td><?php echo $val['admin_id']?></td>
        <td><?php echo$val['admin_name'] ?></td>
        <td><?php echo$val['admin_email'] ?></td>
         <td>
             
         <form method="post" action="edit1.php">
                <input hidden name="uname" value=<?php echo $val['admin_name'] ?>  /> 
                <input hidden name="email" value=<?php echo $val['admin_email'] ?>  />
                <input hidden name="psw" value=<?php echo $val['admin_password'] ?>  />  
                <button id="btn"> edit</button> 
            </form>
        </td>

        <td> 
            <form method="post" action="delete.php">
                <input hidden name="uname" value=<?php echo $val['admin_name'] ?> />    
                <button id="btn"> delete</button> 
            </form>
        </td>
    <?php } ?>
    </tr>
  
      </tbody>
    </table>
    
    

  </body>
</html>
