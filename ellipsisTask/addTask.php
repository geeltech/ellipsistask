<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ellipsistask"

$conn = new mysqli($hostname, $username, $password,$database);

if (!$conn) {
die("Connection failed: ".mysql_error());
}
mysql_select_db($database,$conn);

if(isset($_REQUEST['submit'])!=''){

	if($_REQUEST['taskname']==''||$_REQUEST['description']==''||$_REQUEST['category']==''||$_REQUEST['status']){
		
	echo "Please fill all fields!";
	}
	else{
	$sql = "INSERT INTO task (taskname, description, category,status)
VALUES ('".$_REQUEST["taskname"]."','".$_REQUEST["description"]."','".$_REQUEST["category"]."','".$_REQUEST["status"]."')";
	$res = mysql_query($sql);

	if($res){
		echo "Task added successfully !";
	}
	else{
		echo "Task not added ";
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
		<h2>Creat A Task</h2><br>
		<div class="row">
			<div class="col-md-6">
				<form  action="index.php" method="post" enctype="multipart/form-data" >
					<div class="form-group">
                        <input type="text" name="taskname" placeholder="Task name" class="form-control" required>
                    </div><br>
					<div class="form-group">
                        <input type="text" name="description" placeholder="Description" class="form-control" required>
                    </div><br>
					<div class="form-group">
                        <input type="text" name="category" placeholder="Category" class="form-control" required>
                    </div> <br>
					<div class="form-group">
                        <input type="text" name="status" placeholder="Status" class="form-control" required>
                    </div> <br>
                    <a href="index.php" class="btn btn-md btn-dark">Cancel</a>
                    <button type="submit" value="send" name="submit" class="btn btn-primary contactButton">Add Task</button><br>
				    
                <form>
			</div>
							
		</div>
	</div>
</section>
    
</body>
</html>