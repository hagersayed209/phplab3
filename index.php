<?php

if(isset($_POST["usernamee"]))
{        

    session_start();
     
$_SESSION["username"]=$_POST["usernamee"];
$_SESSION["password"]=$_POST["password"];
if($_SESSION["username"]=="hager"&&$_SESSION["password"]==12345)
{
echo "welcome ".$_SESSION["username"];

?>

 <form action="profile.php"  method="post" enctype="multipart/form-data">
<label for=nam>First Name</label>
<input type=text id=nam name="FirstName" >

<br><br>
<label for=last>Last Name</label>
<input type=text id=last name="LastName" >
<br><br>
<label for=address>Address</label>
<textarea id="address" name="address" rows="5" cols="50">
</textarea>
  <br><br>
  <label for=_city>city</label>
  <select name="city" id="_city" placeholder="select your city">
            <option value="cairo">Cairo</option>
            <option value="Qena">Qena</option>
            <option value="Alexandrial">Alexandria</option>
            <option value="Aswan">Aswan</option>
 
</select>
<br><br>
<label >Gender</label>
 <input type=radio name=gender value=male >male
   <input type=radio name=gender value=female>female
  <br><br>
  <label >Skills</label> <br>
  <input type=checkbox name="Skill" value=php><label>php</label>
  <br>
  <input type=checkbox name="Skill" value=j2se><label>j2se </label><br>
  <br>
 <input type=checkbox name="Skill" value=mysql><label>mysql </label>
 <br>
<input type=checkbox name="Skill" value=postgreeSQL><label>postgreeSQL </label>
 <br>
 <label for=username>username</label>
 <input type="text" name="username1"id="username">
     <br><br>
     <label for=password>password</label>
 <input type="password" name="password"id="password">
    <br><br>
    <label for=dept>Department</label>
 <input type=text name="Department"id="dept" placeholder="OpenSource">
  <br><br>
  
  <input type="file" name="file">
 
  <input type=reset value=rest>
             
 <input type=submit value=submit>
</form>
<?php
}
else{
 
  echo"username or password not corecct";
  header("Refresh:3; URL=login.php");
}
}
else{
 
  echo"username or password not corecct";
  header("Refresh:3; URL=login.php");
}
             


       
        