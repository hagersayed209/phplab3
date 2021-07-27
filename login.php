<!DOCTYPE html>
<html>

<head>

</head>
<body>
<?php

session_start();
if(isset($_SESSION["username"] )&&$_SESSION["password"]==12345){

  echo "you login before";
}
else{?>

    <form action="index.php" method="post">
    
    
    <input type="text" name="usernamee">
    <br>
     <input type=password  name=password><br>
    <input type=submit value="login">
    </form>
    <?php   
}


?>
</body>
    </html>
   