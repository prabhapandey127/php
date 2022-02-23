<?php

$name='';
$fname='';
$email='';

$nameErr='';
$fnameErr='';
$emailErr='';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    if(empty($name)){
        $nameErr = 'Name is required';
    }
    $fname = $_POST['fname'];
    if(empty($fname)){
        $fnameErr = "Father's name is required";
    }
    $email = $_POST['email'];
    if(empty($email)){
        $emailErr = 'Email is required';
    }
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
    if (!preg_match($regex,$email)) {
        $emailErr = 'Invalid email id';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <form action="./validation.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?=$name;?>">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br>
            <label for="fname"> Father's Name</label>
            <input type="text" name="fname" id="fname" value="<?=$fname; ?>">
            <span class="error">*<?= $fnameErr; ?></span>
            <br> 
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?=$email;?>">
            <span class="error">*<?php echo $emailErr; ?></span>
            <br>
            <input type="submit" value="submit">
            <br>
           
    </form>
     <h2>Input Value :-</h2>
    Name : - <b><?php echo $name; ?></b> <br>
    Father's Name : - <b><?php echo $fname; ?></b><br>
    Email : - <b><?php echo $email; ?></b>
</body>
</html>