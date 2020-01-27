<h1>This are the results of all the votes casted</h1>
<h1>Presidential Vote</h1>
<?php

require_once('pdo.php');
require_once('style.css');
//count the total number of vote for Mr adams in the category of president
$sql2 = "SELECT count(*) as NUMBER FROM vote where president='Mr Adams'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
//print out the counted votes
echo "The total number of vote of Mr Adams is:";
$adam = $row2;
print_r($adam);
echo "<br>";
//count the total number of vote for Mr Fasanya in the category of president

$sql2 = "SELECT count(*) as NUMBER FROM vote where president='Mr Fasanya'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mr Fasanya is:";
 $fasanya = $row2;
 print_r($fasanya);
echo "<br>";
//count the total number of vote for Mr Otunba in the category of president

$sql2 = "SELECT count(*) as NUMBER FROM vote where president='Mr Otunba'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mr Otunba is:";
$otunba = $row2;
print_r($otunba);
echo "<br>";
//count the total number of vote for Mr Subby in the category of president

$sql2 = "SELECT count(*) as NUMBER FROM vote where president='Mr Subby'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mr Subby is:";
$subby = $row2;
print_r($otunba);
echo "<br>";
//check who the winner is
if($otunba > $subby && $otunba > $fasanya && $otunba > $adam) {
    echo "<br><p2>The winner is Mr Otunba.</p2>";
}
if($subby > $otunba && $subby > $fasanya && $subby > $adam) {
    echo "<br><p2>The winner is Mr Subby.</p2>";
}
if($fasanya > $subby && $fasanya > $otunba && $fasanya > $adam) {
    echo "<br><p2>The winner is Mr Fasanya.</p2>";
}
if($adam > $subby && $adam > $fasanya && $adam > $otunba) {
    echo "<br><p2>The winner is Mr Adams.</p2>";
}


?>  
<h1>Senatorial Vote</h1>
<?php
require_once('pdo.php');
$sql2 = "SELECT count(*) as NUMBER FROM vote where senator='Mrs Fred'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote of Mrs Fred is:";
$fred = $row2;
print_r($fred);
echo "<br>";

$sql2 = "SELECT count(*) as NUMBER FROM vote where senator='Mrs Laposh'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mrs Laposh is:";
$laposh = $row2;
print_r($laposh);
echo "<br>";

$sql2 = "SELECT count(*) as NUMBER FROM vote where senator='Mr Da-silver'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mr Da-Silver is:";
$silver = $row2;
print_r($silver);
echo "<br>";

$sql2 = "SELECT count(*) as NUMBER FROM vote where senator='Mr Alex'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mr Alex is:";
$alex = $row2;
print_r($alex);
echo "<br>";
if($alex > $silver && $alex > $laposh && $alex > $fred) {
    echo "<br><p2>The winner is Mr Alex.</p2>";
}
if($silver > $alex && $silver > $laposh && $silver > $fred) {
    echo "<br><p2>The winner is Mr Da-Silver.</p2>";
}
if($laposh > $silver && $laposh > $alex && $laposh > $fred) {
    echo "<br><p2>The winner is Mrs Laposh.</p2>";
}
if($fred > $silver && $fred > $laposh && $fred > $alex) {
    echo "<br><p2>The winner is Mr Fred.</p2>";
}

?>  
<h1>Governorship Vote</h1>
<?php
require_once('pdo.php');
$sql2 = "SELECT count(*) as NUMBER FROM vote where governor='Mr Precy'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote of Mr Precy is:";
$precy = $row2;
print_r($precy);
echo "<br>";

$sql2 = "SELECT count(*) as NUMBER FROM vote where governor='Mr Binfo'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mr Binfo is:";
$binfo = $row2;
print_r($binfo);
echo "<br>";

$sql2 = "SELECT count(*) as NUMBER FROM vote where governor='Mrs Toleen'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mrs Toleen is:";
$toleen = $row2;
print_r($toleen);
echo "<br>";

$sql2 = "SELECT count(*) as NUMBER FROM vote where governor='Mrs diola'";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();
$row2 = $stmt2->fetchAll(PDO::FETCH_COLUMN, 0);
// array_push($row2,$row2['president']);
echo "The total number of vote for Mrs diola is:";
$diola = $row2;
print_r($diola);
echo "<br>";
if($diola > $toleen && $diola > $binfo && $diola > $precy) {
    echo "<br><p2>The winner is Mrs Diola.</p2>";
}
if($toleen > $diola && $toleen > $binfo && $toleen > $precy) {
    echo "<br><p2>The winner is Mrs Toleen.</p2>";
}
if($binfo > $toleen && $binfo > $toleen && $binfo > $precy) {
    echo "<br><p2>The winner is Mr Binfo.</p2>";
}
if($precy > $toleen && $precy > $binfo && $precy > $diola) {
    echo "<br><p2>The winner is Mr precy.</p2>";
}

?>  