<?php
$dsn ='mysql:host=localhost;dbname=zetha';
$username ='root';
$password ='';

try{
$pdo =new PDO($dsn, $username, $password);


}
catch(PDOException $e){
    $error_message = $e->getMessage();

}

?>