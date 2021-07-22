
<!DOCTYPE html>
<html>
<head>
    <title>Contact messages</title>
     <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
         <h3>Contact Messages</h3>
         <?php
         try{
    $pdo = new PDO("mysql:host=localhost;dbname=zetha", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
        try{
    $sql = "SELECT * FROM contact";   
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>fullname</th>";
                echo "<th>phone</th>";
                echo "<th>email</th>";
                echo "<th>subject</th>";
                echo "<th>message</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
unset($pdo);
    ?>
          </div>  
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>
</body>
</html>