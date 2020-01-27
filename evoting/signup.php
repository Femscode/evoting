<?php
//Cancel all forms of unneccessary errors
error_reporting(E_ALL ^ E_WARNING);
error_reporting(E_ALL ^ E_NOTICE);
require_once('pdo.php');
require_once('style.css'); 
//return when any of the field is empty
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])
|| empty($_POST['country']) || empty($_POST['state']) || empty($_POST['local']) || empty($_POST['confirm_password']) ) {
    echo "All Informations must be provided.";
    //return;
    // return(header('location:signup.php'));
}
//start a session 
    session_start();
    //check if all values are all set
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])
&& isset($_POST['country']) && isset($_POST['state']) && isset($_POST['local']) && isset($_POST['confirm_password']) ) {
    $sql2 = "SELECT name from signup where email = :email and email=:email";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(array(
        ':email'=> $_POST['email'],':password'=>$_POST['password']
    ));
    //check if passwords are not the same
    if($_POST['password'] !== $_POST['confirm_password']) {
        
        $_SESSION['message'] = "<p1 style='color:red ;font-size:25px'>Password doesn't match</p>";
        
        
    }
    
    //check if emails are not the same
    else if($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['message'] = "<p1 style='color:red ;font-size:25px'>Email already in existence,try loggin in</p>";

        // echo "<p1>Email is already in existence,try loggin in first.</p1>";
    }   
//insert into the table the informations of the users
 else {
        $sql = "INSERT INTO signup (name,email,password,country,state,local) values
        (:name,:email,:password,:country,:state,:local)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':name' => $_POST['name'],':email' => $_POST['email'],':password' => $_POST['password']
            ,':country' => $_POST['country'],':state' => $_POST['state'],':local' => $_POST['local']
        ));
        
        header('location:signup.php');
    }
    
    if(!$stmt) {
        echo "You are not signed up"; 
    }
    else {
        echo "You are good to go";
        header('location:login.php');
    }

}
?>
<!-- a form in which a user fill in the required informations required for signing in -->
<!DOCTYPE html>
<html>
<body>
    <meta name='viewsport' content='width=device-width,initial-scale=1'>

<form method="post" action="signup.php"> 
<p2>FILL THE FORM CORRECTLY</p2><br>
<p class='right'>Name<br><input type='text' name='name' placeholder="Your Fullname,surname first"></p>
<p class='left'>Nationality<br><input type='text' name='country' placeholder="Input the name of your country"></p>
<p class='right'>Email<br><input type='email' name='email' placeholder="Functioning email address"></p>

<p class='left'>State of Origin<br><input type='text' name='state' placeholder="Your State of Origin"></p>
<p class='right'>Password<br><input type='password' name='password' placeholder="Input a reliable password"></p>

<p class='left'>Local Government<br><input type='text' name='local' placeholder="Your local-government area"></p>

<p class='right'>Confirm Password<br><input type='password' name='confirm_password' placeholder="Confirm the
 password"></p>
 <p class='left'>Address<br><input type='text' name='address' placeholder="Your residential address"></p>
<?php
//produce the output of the incorrect password and the existence of an email
 if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
  ?><?php
$_SESSION['name'] = isset($_POST['name']) ? $_POST['name']:'';
$_SESSION['message'] = isset($_POST['message']) ? $_POST['message']:false;
?><p><input type='submit' value='Signup' class='hover'></p></form></body></html>
