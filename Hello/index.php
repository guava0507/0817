<?php
  session_start();
  if(isset($_POST["btnOK"]))
  {
      $_SESSION["who"] = $_POST["userNameTextBox"];
      header("Location:hello.php");
      exit();
  }
 // var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>          
<body>
    <form method= "post" action="">
        君の名わ:
        <input type="text" name= "userNameTextBox">
        <input type="submit" name= "btnOK" value="OK">

    </form>

</body>

</html>