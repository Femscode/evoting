<?php
require_once('pdo.php');
require_once('style.css');
if(isset($_POST['president']) && isset($_POST['senator']) && isset($_POST['senator'])) {
    $sql = "INSERT INTO vote (president,senator,governor) values (:president,:senator,:governor)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':president' => $_POST['president'],':senator' => $_POST['senator'],':governor' => $_POST['governor']
    ));
echo "You have successfully vote";
header('Location:congrat.php');
}
if(empty($_POST['president']) || empty($_POST['governnor']) || empty($_POST['senator'])) {
    echo "Space should not be empty.";
}
else header('Location:congrat.php');


?>
<!DOCTYPE html><html><body>
<form method="post">
<p>President:<select name='president'>
<option></option>
<option value='Mr Adams'>Mr Adams</option>
<option value='Mr Fasanya'>Mr Fasanya</option>
<option value='Mr Otunba'>Mr Otunba</option>
<option value='Mr Subby'>Mr Subby</option></select><br></p>
<p>Senator:<select name='senator'>
<option></option>
<option value='Mrs Laposh'>Mrs Laposh</option>
<option value='Mrs Fred'>Mrs Fred</option>
<option value='Mr Da-Silver'>Mr Da-Silver</option>
<option value='Mr Alex'>Mr Alex</option></select><br></p>
<p>Governor:<select name='governor'>
<option></option>
<option value='mrs diola'>Mrs diola</option>
<option value='Mrs Toleen'>Mrs Toleen</option>
<option value='Mr Binfo'>Mr Binfo</option>
<option value='Mr Precy'>Mr Precy</option></select><br></p>

<p><input type='submit' class='hover' value='Vote'></p>

</form></body></html>
