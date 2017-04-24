<?php 
$dsn = 'mysql:host=sql1.njit.edu;dbname=mt67';
$username = 'mt67';
$password = 'SLvawfoo';
try{
  $db = new PDO($dsn,$username,$password);
}catch (PDOException $e){
$error_message = $e->getMessage();
echo $error_message;
exit();
}
?>

