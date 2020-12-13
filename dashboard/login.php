
<?php



session_start();

?>
<html>
  <head>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
     
        <meta name="viewport" content="width=device-width, initial-scale=1" />
  
<style>
     form {
        border: 3px solid #f1f1f1;
        width:500px;
         height: 594px;
        
        
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
        background-color: rgb(95, 95, 190);;
        color: white;
        padding: 14px 20px;
        margin-top:20px ;
        border: 1px solid rgb(95, 95, 190); ;
        margin-bottom:20px;
        cursor: pointer;
        width: 80%;
        margin-left:50px ;
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


      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }
     
    </style>
</head>
<body>

    <div class="container" style=" display: flex;">
  <div style="width:500; height:600px; margin-left:15%;">
    <img src="win.png" alt="..." style="width:500px; height: 600px; ">

    
    </div>

 

<form  method="post">

  <div class="container">
      <h2 style="text-align: center;margin-bottom:70px ;"> login to continue</h2>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required />

    <label for="psw"><b>Password</b></label>
    <input
      type="password"
      placeholder="Enter Password"
      name="psw"
      required
    />

    <button type="submit">Login</button>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember" /> Remember
      me
    </label>

 
</form>

 <?php

// );
// $_SESSION ["multi"] =$multi ;

// admin
//  $_SESSION ["admin"] =$admin ;
// $admin =array("osama", "hassan", "sayed");

// $name = ($_POST["uname"]);
// if(in_array($name,$admin )){
//     header('Location: dashboard.php');   
// }
// else{
//        echo "sorry this username is not exist in the page..";
//         }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = ($_POST["uname"]);
//     $password =($_POST["psw"]);
//     $role = ($_POST["role"]);

//      foreach($multi as $key => $val)
//     if($name == $val[0] && $password == $val[1] && $role == $val[2] ){
//       echo "ok";
//       header('Location: home.php');
  
//     }
//     else{

//    echo "sorry this username is not exist in the page..Please create an account";
//     }
//    }

//admin
// $users = [
//   [
//     'username' => "batool",
//     "password" =>"123", 
//     "role" => "admin"
//   ],
//   [
//     'username' => "ahmad",
//      "password" =>"123",
//       "role" => "admin"
//   ],
//   [
//     'username' => "mohd",
//     "password" =>"123",
//     "role" => "user"
//   ]
// ];

// $_SESSION = $users;

// $users = $_SESSION['users'];


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $password = $_POST["psw"];
    // $role = ($_POST["role"]);
    $name = $_POST["uname"];

    foreach($users as $key => $val){
        if($name == $val["username"] && $password == $val["password"] ){
            if( $val["role"] == "admin"){
                header('Location: dashboard.php');
            } else {
                header('Location: home.php'); 
            }
        } 
    }
    echo "<br> <p>There's a problem signing in. </p>";
  }



 

//  $filters = array (
//     "$name" => array ("filter"=>FILTER_CALLBACK,
//                                "flags"=>FILTER_FORCE_ARRAY,
//                                "options"=>"ucwords"
//                               ),
//     "$password"   => array ( "filter"=>FILTER_VALIDATE_INT,
//                                 "options"=>array("min_range"=>6,"max_range"=>15)
//                               ),
 
//     );
// //   print_r(filter_input_array(INPUT_POST, $filters));

//     if(isset($_post["submit"])){
//         $name=($_post["uname"]  &&  $password=($_post["psw"]  &&  $role=($_post["admin"] )){
//             header('Location: dashboard.php');       
            
//         }
//     }elseif{
//         $name=($_post["uname"]  &&  $password=($_post["psw"]  &&  $role=($_post["user"] )){
//             header('Location: home.php');   
//     } else{
//         echo "There's a problem signing in." 
//     }






  ?>

</div>
</div>

<!-- </div> cont --> 
</body>