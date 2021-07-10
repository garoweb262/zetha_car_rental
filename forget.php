<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forget Password</title>
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
    	.card{
    		top: 50%;
    		width: 300px;
    		height: 350px;
    		box-shadow: 3px 4px 5px 4px #ee9827;
    	}
    	.card-header{
    		color: #ac1d1d;
    		text-align: center;
    	}
    	.card-body{
    		color: #ac1d1d;
    		text-align: center; 
    	}
    	.btn{
    		color: #fff;
    		background-color:#ac1d1d;
    		width: 100%;
    		border-radius: 20px;
    	}
    	.btn:hover{
    		background-color:#ee9827; 

    	}
    	.btn-link{
    		color:#ac1d1d; 
    	}
    	.btn-link:hover{
    		color:#ee9827; 
    	}
        
    </style>
</head>
<body>
    <div class="container">
     <div class="row">
     	<div class="col-md-4"></div>
     	<div class="col-md-4">
     		<div class="card">
     			<div class="card-header">
     			 <h2>Reset Password</h2>
     			 </div>
        <div class="card-body">
        <form action="password.php" method="post"> 
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control">
               
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn" value="Submit">
                <a class="btn-link ml-2" href="login.php">Cancel</a>
            </div>
        </form>
        </div>
     		</div>
     	</div>
     	<div class="col-md-4"></div>
     </div>
    </div>    
</body>
</html>