<?php
/*require_once "connect/connect.php";
include "retrieving_data.php";
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    
   
    $sql = "SELECT * FROM card WHERE id = :id";
    
    if($stmt = $pdo->prepare($sql)){

        $stmt->bindParam(":id", $param_id);
       
        $param_id = trim($_GET["id"]);
     
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
                
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                $name = $row["name"];
                $no = $row["no"];
                $card = $row["card"];
                $bnv = $row["bvn"];
            } else{
                
                header("location: index.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
	<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	 
	body:{bacgroundcolor="green"}
	body {
 	margin: 0px;
 	font-family: verdana, georgia, serif
 	font-size:  14px;
 }
 a{
 	float: right;
 	margin-right: 30px;
 	color: green;
 	font-size: 25px;
 }
 a:hover{
 	color: red;
 }
table {
 	width: 50%;
 	height: 100%;
 }

</style>

<body>
	
	<CENTER><head>User's Details</head></CENTER><br> 
	<center>
		<a href="retrieving_message.php">See Message</a>
	
<table border="">
<tr align="CENTER">
	<tr align="CENTER">
	<th>NAME</th>
	<td><b><?php echo $db["fullname"]; ?></b></td>
	</tr>
	<tr>
	<th>PHONE</th>
	<td><b><?php echo $db["phone"]; ?></b></td>
	</tr>
	<tr>
		<th>ADDEESS</th>
		<td><b><?php echo $db["address"]; ?></b></td>
	</tr>
	<tr>
		<th>EMAIL</th>
		<td><b><?php echo $db["email"]; ?></b></td>
	</tr>
      <tr>
		<th>CAR RENTED</th>
		<td><b><?php echo $db["car_rent"]; ?></b></td>
	</tr>
	<tr>
		<th>name on card</th>
		<td><b><?php echo $row["name"]; ?></b></td>
	</tr>
	<tr>
		<th>no on card</th>
		<td><b><?php echo $row["no"]; ?></b></td>
	</tr>
	<tr>
		<th>bvn no</th>
		<td><b><?php echo $row["bvn"]; ?></b></td>
	</tr>
	<tr>
		<th>cvv</th>
		<td><b><?php echo $row["cvv"]; ?></b></td>
	</tr>

		
</table>


</body></center>
</html>
