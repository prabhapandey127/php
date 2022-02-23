<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
   $name=$_POST['name'];
   $email=$_POST['email'] ;
   echo 'welcome '.$name."<br>";
   echo 'your email is '.$email;
}
?>