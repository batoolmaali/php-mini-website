<!DOCTYPE html>
<?php
session_start();
// var_dump($_SESSION['users']);


?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        *{
            margin-top=0;
        }
      body {
        font-family: "Lato", sans-serif;
        background-image: url("tt.jpg");
      }

      .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
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
      .flex-container {
    display: flex;
    justify-content: space-between;
    background: black;
    align-items: center;
  
    
    
  }
  .logo {
    margin-left: 1em;
  }
  .logo a,
  .navigation a {
    color: black;
    text-decoration: none;
  }
  .navigation {
    display: flex;
    list-style: none;
  }
  .navigation a {
    padding: 15px;
  }
  table, th, td {
    
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 50px;
  height:450px ;
    width:1020px; 
}
.head{
    overflow: hidden;
    width:1100px; 
    background-color: rgb(216, 212, 212);
    margin-left: 300px;
    padding: 15px;
   
}
th, td{
    height:50px ;
    width:100px;
    text-align:center;
    
}
/* .breadcrumb{
    margin-top:0;
}
ul.breadcrumb {
        padding: 10px 16px;
        list-style: none;
        background-color: rgb(216, 212, 212);
        margin-left: 190px;
      }
      ul.breadcrumb li {
        display: inline;
        font-size: 18px;
      }

      ul.breadcrumb li a {
        color: black;
        text-decoration: none;
      }
      ul.breadcrumb li a:hover {
        color: #01447e;
      } */
      .add{
        margin-left: 50px;   
        margin-bottom:20px;  
        border: 1px solid #fff;
        text-align: center;
        height: 40px;  
        color: black;
        width: 150px;
        background-color:rgb(168, 159, 159);
     
      font-size:18px
    }
    button{
        margin-left: 50px;   
       margin-right:40px;
        border: 1px solid #fff;
        text-align: center;
        height: 40px;  
        color: black;
        width: 150px;
   
        background-color: rgb(168, 159, 159);
     
      font-size:18px
    }
    

    </style>
  </head>
  <body>

    <div class="sidenav">
    <a href="#" style=" background-color:black;">dashboard</a>
    <a href="#" style=" background-color:rgb(104, 56, 56);">admin</a>
      <a href="#">user</a>
      <a href="#">add</a>
      <a href="#">remove</a>
      <a href="#">role</a>
    </div>
    <!-- <ul class="breadcrumb" style="background: black;  height: 60px; "> -->
     
     
   
    <!-- </ul> -->
    <ul class="breadcrumb">
      <li><a href="#">Home /</a></li>
      <li><a href="#">user manager</a></li>
     
   
    </ul>
  </body>
    <div class="head">
        <button class="add">+ add data</button>
         <!-- if(isset($_SESSION['users'] )){}
          $users[]="hasan";-->
       
    <table >
  <tr>
  <th>id</th>
    <th>user</th>
    <th>password</th> 
    <th>role</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  <!--foreach($users as $user) -->
    <?php foreach($_SESSION['users'] as $key=>$val){ ?>
    <tr>
    <td><img src="p1.png" style="height:100px;"></td>
        <td><?php echo $val["username"]?></td>
        <td><?php echo $val["password"] ?></td>
         <td><?php echo $val["role"] ?></td>
         <td>
             <button id="ed"> EDIT</button>
        </td>

        <td> 
            <form method="post" acttion="">
                <input hidden name="uname" value=<?php echo $val['username']; ?> />    
                <button id="btn"> delete</button> 
            </form>
        </td>

    </tr>

        <?php } ?>
     <!-- end of foreach -->
</table>


    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['uname'];

        // echo $name;
        // var_dump($_SESSION['users']);

        $_SESSION['users'] = array_filter($_SESSION['users'], function($val) use ($name){
            return $val['username'] != $name;
        });
    
    }
    ?>
  </body>
</html>
