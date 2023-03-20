<?php
$severname = 'mysql:host=localhost;dbname=product_db';
$username = 'carlos';
$password = 'P@ssw0ord';

try{
    $conn = new PDO($severname, $username, $password);
}catch(PDOException $e ){

}
?>