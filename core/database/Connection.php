<?php
$dns = 'mysql:host=localhost; dbname=mydairy';
$user = 'root';
$password = null;

try {
  $pdo = new PDO($dns,$user,$password);
  
} catch (PDOException $e) {
echo "Connsectio Error " . $e->getMessage()  ;
}
 ?>
