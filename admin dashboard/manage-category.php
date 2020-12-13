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

// var_dump($_SESSION);
if(! isset($_SESSION['id']))
{
  header('Location: admin-dash.php');
}




if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $name =($_POST["name"]);
    $desc =($_POST["desc"]);
    $file=$_FILES['file'];
  

    $filename=$_FILES['file']['name'];
    $filetmpname=$_FILES['file']['tmp_name'];
    $filesize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $filetype=$_FILES['file']['type'];
    

// var_dump($filetype );
  $fileExt=explode(".", $filename);

  $fileActualExt= strtolower(end($fileExt));

  $allowed = array('jpg','jpeg','png','pdf');
    
  
 

  if(in_array( $fileActualExt, $allowed )){
      if($fileError === 0){

            if( $filesize < 1000000){
    
              $fileNameNEW=uniqid('', true). "." .$fileActualExt;

              $fileDestination = 'images/'.$fileNameNEW;

              var_dump($fileDestination);

              move_uploaded_file( $filetmpname, $fileDestination);
            
          

              $connection->query($sql = "INSERT INTO category (cat_name, category_image) Values ('$name','$fileDestination')"); 
            } else {
              echo "your file is too big";
            }   

      }else{
         echo "there was an error uploading your file";
  }
  }else {
    echo "you cannot upload files";
}


        // $connection->query($sql = "INSERT INTO products (product_name,product_des, product_price,category_name, product_img) Values ('$name','$desc', '$price', '$cat','$path.$filename')"); 
            
            // header('Location: product-manage.php'); 
}




//     var_dump($_POST);
// //   var_dump( $connection->query($sql = "INSERT INTO category (product_name,product_desc) Values ('$name','$desc')"));
  
//   $connection->query($sql = "INSERT INTO category (product_name,product_desc) Values ('$name','$desc')");
            
//             header('Location: manage-category.php'); 
// }
// ?>
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
        body{
            /* background-color: lightgray; */
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
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </nav>
        <div class="sidenav">
          <a href="#" 
            ><i class="fa fa-hourglass-end" aria-hidden="true"></i></i> admin
          </a>
          <a href="admin-dash.php"><i class="fa fa-tachometer" aria-hidden="true" style="margin-right:10px"></i>dashbord</a>
          <a href="manage-admin.php"><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>manage admin</a>
          <a href="manage-category.php" style="color: white; margin-top: 0; background-color: teal; margin-right:10px" ><i class="fa fa-bar-chart" aria-hidden="true"></i>category</a>
          <a href="product-manage.php"><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i>product</a>
          <a href="#"><i class="fa fa-table" aria-hidden="true" style="margin-right:10px"></i>chart</a>
          <a href="#"
            ><i class="fa fa-check-square-o" aria-hidden="true" style="margin-right:10px"></i>Contact</a
          >
          <a href="#"
            ><i class="fa fa-calendar-o" aria-hidden="true" style="margin-right:10px">calender</i></a
          >
        </div>
        <form action="" method="post"  enctype="multipart/form-data"
        style="width: 800px;background-color: white;font-size:20px; margin-left: 500px; border: 1px solid grey; overflow: hidden; padding: 10px; margin-top: 5%;">
            <h3  style="text-align: center;background-color: #404040; color:white;   height:70px;line-height:70px">Add A New Category</h3>
            <label for="fname">category name:</label><br>
            <input type="text" id="fname" value="" name="name" style="width:100%"><br><br>

            <label for="fname">uplode product img:</label><br>
            <input type="file" value="choose file" name="file" style=" margin-top: 4%; background-color: teal;color:white"><br><br>
            <input type="submit" value="Submit" style=" margin-top: 4%; background-color: teal;color:white">
          </form> 
          
          <table class="table table-striped" style="width: 800px; margin-left: 500px; margin-top: 2%;font-size:18px">
            <thead style="background-color:#404040; color:white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">category name</th>
              
                <th scope="col">category image</th>
                <th scope="col">delete</th>
                <th scope="col">edit</th>
              </tr>
            </thead>
            <tbody>
            <tr>
        <?php $category = array();
    $records=$connection->query("select * from category");

    // var_dump( $records);
    while($row = $records->fetch_assoc()){
      $category[]=$row;
  }

  //  var_dump( $category);
  // ?>
  <?php foreach($category as $key=>$val){ ?>
 <tr>
 <td><?php echo $val['category_id']?></td>
      <td><?php echo $val['cat_name']?></td>
      <td><img width="100px" height="100px" src="<?php echo $val['category_image']?>" alt="image"></td>
     
      <td>
       <form method="post" acttion="">
              <input hidden name="uname" value=<?php echo $val['cat_name'] ?>/> 
              
              <button id="btn"> edie</button> 
          </form>
      </td>

      <td> 
          <form method="post" acttion="">
              <input hidden name="uname" value=<?php echo $val['cat_name'] ?> />    
              <button id="btn"> delete</button> 
          </form>
      </td>
  <?php } ?>
  </tr>

    </tbody>
  </table>
  
  
          
          </tbody>
        </table>
       
      </html>
  