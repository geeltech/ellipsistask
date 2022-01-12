<?php
   include('inc/config.php');

   $dbname = 'ellipsistask';
   
   if (!mysql_connect('hostname', 'username', 'password')) {
       echo 'Could not connect to mysql';
       exit;
   }
   
   $sql = "SHOW TABLES FROM $dbname";
   $result = mysql_query($sql);
   
   if (!$result) {
       echo "DB Error, could not list tables\n";
       echo 'MySQL Error: ' . mysql_error();
       exit;
   }
   
   while ($row = mysql_fetch_row($result)) {
       echo "Table: {$row[0]}\n";
   }
   
   mysql_free_result($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasks</title>
    
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<br><br>
<div class="container">
<p><a href="addTask.php" class="btn btn-info">Add Task</a></p>
<br>
<p>

<h3>Welcome <?php echo $login_session; ?></h3> 
      <h4><a href = "login.php">Logout</a></h4>
</p>
    <table class="table table-bordered">
        <thead>
            <tr>                
                <th scope="col">No.</th>
                <th scope="col">TASK NAME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>

        <tbody>
        <php   foreach ($data as $item) ?>
            <tr>
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->status}}</td>
                <td>
                    <a href="/delete/{{$item->id}}">Delete </a>| 
                    <a href="/edit/{{$item->id}}">Edit</a>
                </td>
            </tr>
                
             ?>
            
        </tbody>
    </table>
</div>
</body>
</html>