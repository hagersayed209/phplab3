<?php
session_start();


if(isset($_SESSION["username"])&&$_SESSION["password"]==12345){
    echo "welcome    ".$_SESSION["username"]."<br>";


echo ' your first name : '.$_POST["FirstName"].'<br>';
echo ' your last name : '.$_POST["LastName"].'<br>';
echo 'your address : '.$_POST["address"].'<br>';
echo ' your city : '.$_POST["city"].'<br>';
echo 'your gender : '.$_POST["gender"].'<br>';
echo ' your username : '.$_POST["username1"].'<br>';
echo ' your password : '.$_POST["password"].'<br>';
echo ' your department :'.$_POST["Department"].'<br>';

  $first=$_POST["FirstName"];

  if(empty($first)) {  
    echo "empty first name"."<br>"; 
} else {  
    echo $first;  
}  
  if(filter_var($first, FILTER_SANITIZE_STRING)){
    echo $first."<br>";
  }
 else 
 echo" Only alphabets";

echo"<br>";
$Lastname= $_POST["LastName"];
if (empty($Lastname)) {  
    echo "empty Last name"."<br>"; 
} else {  
    echo $Lastname;  
}  
if (preg_match("%^[A-Za-z0-9-_]{3,10}$%", $_POST["LastName"])) {
    echo$_POST["LastName"];
} else {
    echo" Only alphabets";
}
$address=$_POST["address"];
if (empty($$address)) {  
    echo "empty Department"."<br>"; 
} else {  
    echo $address;  
}  

if(filter_var($address, FILTER_SANITIZE_STRING)){
  echo$address."<br>";
}
else {
echo" Only alphabets";
}

$username=$_POST["username1"];
  if (empty($username)) {  
    echo "empty username"."<br>"; 
} else {  
    echo $username;  
}  
  if(!preg_match ("/^[a-zA-z]*$/", $username)) {  
    echo "Only alphabets "."<br>"; 
} else {  
    echo $username;  
}  
echo"<br>";
$passwordd= $_POST["password"];
if(empty($password)) {  
    echo "empty password"."<br>"; 
} else {  
    echo $passwordd;  
}  
if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$passwordd)) {
    echo $passwordd;
} else {
    echo" Only alphabets";
}
$dname = $_POST["Department"];  
  if (empty($dname)) {  
      echo "empty Department"."<br>"; 
  } else {  
      echo $dname;  
  }  
  if(filter_var($dname, FILTER_SANITIZE_STRING)){
    echo$dname."<br>";
  }
  else {
  echo" Only alphabets";
  }



if(isset($_FILES["file"])){
    
    $name=$_FILES["file"]["name"];
    $size=$_FILES["file"]["size"];
    $tmpname=$_FILES["file"]["tmp_name"];
    $arrimg=explode(".",$name);
    $exten=end($arrimg);
    $allowedExten=["jpg","png","jpeg","gif"];
    if(in_array($exten,$allowedExten)){
        if($size<=3145728){
            move_uploaded_file($tmpname,"img/$name");
            echo" <imgc='img/$name' width='200px' height='200px'>"."<br>";
        }else{
            echo"your file size is more than 3 MB"."<br>";
        }
  
    }else{
        echo"Your file is not an image"."<br>";
    }
}
    ?>
    <form action="logout.php">
  
    
    <input type="submit"  value="logout" >
    </div>
    
    </form>
    
    <?php
    }
  
else{
    echo "wrong name or password";

    header(  "Refresh:2;URL=index.php");

}
?>