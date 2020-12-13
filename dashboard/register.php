
<?php

session_start();


?>
<html>
  <head>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
     
        <meta name="viewport" content="width=device-width, initial-scale=1" />
  
<style>
    body{
        background-image: url(hf.jpg);
        height: 100vh;
      
        background-size: cover;
    }
    #block {
        background-color: #b3b2b1;
        width: 40%;
        height: 50%;
        margin: auto;
        margin-top: 15%;
        transform: scale(1.1);
      box-shadow: 0 0 30px #white;
    }
    body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  /* box-sizing: border-box; */
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: rgb(208, 208, 250);

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: white;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


a {
  color: white;
}



     
         </style>
</head>
<body>
<div id="block">
<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>
</div>



<!-- <?php
// // Variable to check
// $email = "john.doe@example.com";

// // Remove all illegal characters from email
// $email = filter_var($email, FILTER_SANITIZE_EMAIL);
// // Validate email
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   echo("$email is a valid email address");
// } else {
//   echo("$email is not a valid email address");
// }
?> -->


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $repeatpass = ($_POST["psw-repeat"]);
    $password =($_POST["psw"]);
    $email =($_POST["email"]);

    if($password == $repeatpass)
    {
            $_SESSION['users'][]= [
                'username' => $email,
                'password' => $password,
                'role' => 'user'
            ];

            header('Location: home.php'); 
    } else{
        echo "sorry";
    }
}


 

// $filters = array (
//   "$email" => array ("filter"=>FILTER_VALIDATE_EMAIL,
//                              "flags"=>FILTER_FLAG_EMAIL_UNICODE,
                            
//                             ),
//   "$password"   => array ( "filter"=> FILTER_VALIDATE_REGEXP,
//                               "options"=>array(
//                               "min_range"=>6,
//                               "max_range"=>15)
//                             ),
 
//   );
// print_r(filter_input_array(INPUT_POST, $filters));

// if(filter_var($password, FILTER_VALIDATE_EMAIL)== true){
//     echo" valid email";
//  }
//  else{
//      echo" not valid";
//  }
 
// if(filter_var($password, FILTER_VALIDATE_REGEXP)== true){
//     echo" valid password";
//  }
//  else{
//      echo" not valid password  must between 6-15";
//  }

// if(filter_var($password, FILTER_VALIDATE_REGEXP)== $repeatpass){
//    echo" it match password";
// }
// else{
//     echo" not match password";
// }


?>
 </body>
</html>
