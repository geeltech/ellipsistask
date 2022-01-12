<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ellipsistask";

$conn = new mysqli($hostname, $username, $password, $database);

if (!$conn) {
die("Connection failed: ".mysql_error());
}
mysql_select_db($database,$conn);

if(isset($_REQUEST['submit'])!=''){

	if($_REQUEST['username']==''||$_REQUEST['email']==''||$_REQUEST['password']==''){
		
	echo "Please fill all fields!";
	}
	else{
	$sql = "INSERT INTO register (username, email, passcode)
VALUES ('".$_REQUEST["username"]."','".$_REQUEST["email"]."','".$_REQUEST["password"]."')";
	$res = mysql_query($sql);

	if($res){
		echo "Successfully registered!";
	}
	else{
		echo "Fail to registered!";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<br><br>
	<div class="container">
		<h2>Registration Form</h2><br>
		<div class="row">
			<div class="col-md-6">
				<form  action="register.php" method="post" enctype="multipart/form-data" >
					<div class="form-group">
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                    </div><br>
					<div class="form-group">
                        <input type="text" name="email" placeholder="E-mail" class="form-control" required>
                    </div><br>
					<div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div> <br>
                    <button type="submit" value="send" name="submit" class="btn btn-primary contactButton">Submit</button><br>
				    <br>
					<p><a href="login.php">I have an Account </a></p>
                <form>
			</div>
							
		</div>
	</div>
</section>
    
</body>
</html>