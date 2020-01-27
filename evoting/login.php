<?php
require_once('pdo.php');
require_once('style.css');

error_reporting(E_ALL ^ E_WARNING);
error_reporting(E_ALL ^ E_NOTICE);

if(isset($_POST['email']) && isset($_POST['password'])) {
    

    $sql2 = "SELECT name from signup where email=:email and password=:password";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(array(
        ':email' => $_POST['email'],':password' => $_POST['password']
    ));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);

}
if($row == false) {
    echo('<!DOCTYPE html><html><body><form method="post" class="flex"><h3>LOGIN FORM</h3><input type="hidden"');;
    echo('<p>Email:<br><input type="email" name="email"></p>');
    echo('<p>Password:<br><input type="password" name="password"></p>');
    echo('<input type="submit" value="Login" class="hover">');
    echo("\n</form></body><html>\n");
    echo "<p1 style='background-color:white'>not registered yet,Click on Register button below to register<p1><br><br>";
    echo('<a href="signup.php" class="hover" style="color:white;background-color:red
    ">Register</button>');
    }
else {
    echo('<!DOCTYPE html><html><body><form method="post" class="flex"><h3>LOGIN FORM</h3><input type="hidden"');;
    echo('<p>Email:<br><input type="email" name="email"></p>');
    echo('<p>Password:<br><input type="password" name="password"></p>');
    echo('<input type="submit" value="Login" class="hover">');
    echo("\n</form></body></html>\n");
    echo "<p2 style='font-size:30px;background-color:white'>You are a registered member,click on the 
    vote button below to continue to vote.<p2><br><br>";
    echo('<a href="voting.php" class="hover" style="color:white;background-color:green">Vote</button>');
    return;
}
?>