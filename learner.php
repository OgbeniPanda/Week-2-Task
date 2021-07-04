<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$_SESSION["username"] = test_input($_POST["username"]);
$_SESSION["email"] = test_input($_POST["email"]);
$_SESSION["password"] = test_input($_POST["password"]);


$username = $email = $password ="";
$usernameErr = $emailErr = $passwordErr ="";

if ($_SERVER["REQUEST_METHOD"] == "post") {
 if(empty($_POST["username"])) {
     $usernameErr = "Username is required";
 } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $usernameErr = "Only letters and space allowed";
      }
 }

 if(empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
   $email = test_input($_POST["email"]);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
} 

if(empty($_POST["passsword"])) {
    $passwordErr = "Password is required";
} else {
   $password = test_input($_POST["password"]);
}

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>


    <h1>G74 Boys' Game Application</h1>
    <h4>Medical gamers on a mission</h4>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Your Username:</label><br>
    <input type="text" name="username" ><br><br>
    <span class="error">* <?php echo $usernameErr;?></span>
    <br><br>
    <label>Your Email Address:</label><br>
    <input type="email" name="email" ><br><br>
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>
    <input type="Submit" name="submit" value="Register">
    </form>

<?php 
echo $username;
echo "<br>";
echo $email;
echo "<br>";
?>

</body>
</html>


// Second page, like login page
"/*
<?php
    session_start();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <label>Your Email Address:</label><br>
        <input type="email" name="email" ><br><br>
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="Submit" name="submit" value="login">
        </form>

        <?php 
        $email = $password ="";
        $emailErr = $passwordErr ="";
        if ($_SERVER["REQUEST_METHOD"] == "post") {
            if(empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
               $email = $_SESSION["email"];
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
            } 
            
            if(empty($_POST["passsword"])) {
                $passwordErr = "Password is required";
            } else {
               $password = $_SESSION["password"];
            }
        }

       
        ?>
</body>
</html>
        // i believe or hope since i linked the session to the test_input in the first page the details would have been validated
        // boss, me sef don weak for my task... em tough 

*/"    