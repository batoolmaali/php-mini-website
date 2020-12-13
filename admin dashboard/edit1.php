<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

.inp {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
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
</style>

<?php
//    $admins = array();
    // $records=$connection->query("select admin_id, admin_name,admin_email,admin_password from admins");
    // while($row = $records->fetch_assoc()){
        // $admins[]=$row;
    // }
?>
<h1 style="text-align:center"> edit form</h1>
<form method="post" action="update.php">
<input class="inp" name="uname" value="<?php echo $_POST['uname'] ?>"  /> 
<input class="inp" name="email" value="<?php  echo $_POST['email'] ?>"  />
<input class="inp" name="psw" value="<?php echo $_POST['psw']  ?>"  />    
<input hidden name ="oldEmail" value ="<?php  echo $_POST['email'] ?>" />
<button id="btn"> edit</button> 
</form>



