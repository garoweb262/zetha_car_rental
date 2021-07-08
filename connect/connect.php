<?php
$dsn ='mysql:host=localhost;dbname=zetha';
$username ='root';
$password ='';

try{
$db =new PDO($dsn, $username, $password);
//echo 'connected succesfully';

}
catch(PDOException $e){
    $error_message = $e->getMessage();
    //echo'Database not connected: $erro_message';
}

?>