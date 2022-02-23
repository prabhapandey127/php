
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// echo "Post form submitted <br/>";
// echo $_REQUEST['fname'];
//     echo "<br>";
//    echo $_REQUEST['location'];
// }


if($_SERVER["REQUEST_METHOD"]== "GET" ){
    echo "Get form submiited <br>";
   echo $_REQUEST['fname'];
    echo "<br>";
   echo $_REQUEST['location'];
}
   
?>


<!DOCTYPE html>
<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Location: <input type="text" name="location">

  <input type="submit">
</form>


</body>
</html>