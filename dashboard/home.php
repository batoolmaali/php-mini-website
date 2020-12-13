<?php

session_start();


?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
    
.one {
        height: 100vh;
        background-image: url("winter.jpg");
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: whitesmoke;
      }
      .container{
  width: 809px;
  margin:0 auto;

  
}
button{
    background: #262626;
width: 120px;
border: 1px solid #fff;
text-align: center;
height: 40px;  
color: whitesmoke;
margin:20px 10px;  
}

button:hover{
  background:  rgba(175, 75, 95, 0.952);}
.login{
  
  margin:60px auto;  
  text-align:center;
}
.container ul{
  list-style-type: none;
 
 

}
li{
  cursor: pointer;
}
.container ul li{
background: #262626;
width: 150px;
border: 1px solid #fff;
text-align: center;
height: 50px;
float: left;
color: #fff;
position: relative;

line-height: 50px;
}
.container ul li:hover{
  background:  rgba(175, 75, 95, 0.952);}
a{
text-decoration:none;
color:white;
}


</style>
</head>
<body>
<div class="one">
<div class="container">
   <ul>
   <li>home</li>
   <li>about</li>
   <li>services
  <li>contact</li>
<li>portfolio</li>


   </ul>

</div>
      <header>
 
        <div class="login">
        <h1>change your life</h1>
        <h2>sign up today</h2>
        <button><a href="register.php">register</a></button>
        <button><a href="login.php">login</a></button>
       </div>
      </header>
    </div>
</body>


<?php
// $_SESSION['users'] = [];
if(!isset($_SESSION['users'])){
    $users = [
        [
          'username' => "batool",
          "password" =>"123", 
          "role" => "admin"
        ],
        [
          'username' => "ahmad",
           "password" =>"123",
            "role" => "admin"
        ],
        [
          'username' => "mohd",
          "password" =>"123",
          "role" => "user"
        ]
      ];
      
      $_SESSION['users'] = $users;
}

// $_SESSION["userid"]= rand();

// if(!isset($_SESSION["userid"])){
//   print_r('<a href="register.php">register</a>');
//   print_r('<a href="login.php">login</a>');

// }
// if(isset($_SESSION["userid"])){


//   print_r('<a href="logout.php">logout</a>');
?>

</html>