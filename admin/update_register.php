<?php
include 'connect/connect.php';
 
$fullname =  $address = $email = $phone = $gender = $zipcode = $town = $state ='';
    
    if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

 
        $sql = "UPDATE register_user SET fullname=:fullname, address=:address, gender=:gender, email=:email, phone=:phone, zipcode=:zipcode, town=:town, state=:state WHERE id=:id";
 
        if($stmt = $pdo->prepare($sql)){
            
            $stmt->bindParam(":fullname", $param_fullname);
            $stmt->bindParam(":address", $param_address);
            $stmt->bindParam(":email", $param_email);
            $stmt->bindParam(":phone", $param_phone);
            $stmt->bindParam(":gender", $param_gender);
            $stmt->bindParam(":zipcode", $param_zipcode);
            $stmt->bindParam(":town", $param_town);
            $stmt->bindParam(":state", $param_state);
            $stmt->bindParam(":id", $param_id);
            
            $param_fullname = $fullname;
            $param_address = $address;
            $param_email = $email;
            $param_phone = $phone;
            $param_gender = $gender;
            $param_zipcode = $zipcode;
            $param_state = $state;
            $param_town = $town;
            $param_id = $id;

            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: dashboard.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
   
    
    // Close connection
    unset($pdo);
 }        
?>


<!DOCTYPE html>
<html>
<head>
   <title>update information page </title>
</head>

<body>
<h2>Update Information Page...!</h2>
<p>A new page that allow users to update their personal details or informations!!</p>
<form action="" method="post">
<h3>make a changes of information</h3>
   <label for="name"> full name </label>
   <input type="text" name="fullname" maxlength="35" placeholder="e.g firstname surname" required />
<br>
<label for="phone"> phone no </label>
<input type="number" name="phone" maxlength="11" placeholder="+234*****"required />
<br>
<label for="email">email adr</label>
<input type="email" name="email" placeholder="example@gmail.com" required />
<br>
<label for="gender"> gender </label>
<input type = "radio" name = "gender" value ="female">Female
<input type = "radio" name ="gender" value="male ">Male
<br>
<label for=" address">address</label>
<input type="text" name="address" placeholder="e.g road/street/home no "requied>
<div>
<label for="zipcode">zipcode</label>
<input type="text" name="zipcode" placeholder="zip codes"requied>
<br>
<label for="zipcode">town</label>
<input type="text" name="town" placeholder="zip codes"requied>
<br>
<label for="state">state</label>
<input type="text" name="state" placeholder="city e.g kano" requied>
<div>
<center>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
     <input type="submit" class="btn btn-primary" value="Submit">
</center>
</form>
	
<h4>for more information visit us@ www.updateinfo.com/call us@ +2348065008454 </h4>


<style>
body{bg-color:black;}

input { padding:3% ; margin:3% ; font-style:italic; border-left:2px solid;border-right:2px solid; border-top:2px solid;border-bottom:2px solid}
 h2 { color:orange; text-align:center;border-bottom:1px solid black}
label { color:orange; font-style:italic;font-size:125%; background-color:green;}
p {font-style:italic;color:puple;text-align:center;}
form {border-top:2px solid black; border-right:2px solid black; border-left:2px solid black; border-bottom:2px solid black ;background-color:silver;}
button{color:white;background-color:green; border-top:2px solid orange;border-bottom:2px solid orange;border-right:2px solid orange;border-bottom:2px solid orange; border-left:2px solid orange; }
h3 { text-align:center; color:bright; border-top:2px solid;border-bottom:2px solid; border-right:2px solid; border-left:2px solid;margin:3px; margin-top:0;margin-left:0;margin-right:0;}
h2,p{background-color:silver;margin:0;}
h4{background-color:red;margin-bottom:0;border-top:2px solid}
</style>

</body>
</html>
