<?php 

 $dbc = mysqli_connect('localhost', 'root', '', 'to');
$todo_id = '';
if(isset($_GET['tid']))
{
	$todo_id = $_GET['tid'];

//fetch data from table;

$sql = "select * from todos where `todos`.`tid` = $todo_id";
$result = mysqli_query($dbc, $sql);
$row = mysqli_fetch_array($result);
$todo = $row['todo'];
$date= $row['date'];
$time=$row['time'];

}
elseif (isset($_POST['submit']))
 {

	$todo = $_POST['todo'];
	$tid = $_POST['tid'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	
	$query = "update todos set todo = '$todo', date ='$date', time ='$time' where `todos`.`tid` = $tid";
	mysqli_query($dbc, $query);
     
	echo '<script>alert("Your Todo is Updated!!")</script>';
	echo("<script>location.href = 'home.php';</script>");

}


?>

<!DOCTYPE>
<html>
<head>
	<title>TODOS</title>
	<link rel="stylesheet" type="text/css" href="s.css">

<style>
		.card{

			margin:  20px;
		}

</style>
</head>
<body>

	

		
	
	<div class="card">
  		
	  		
	    		<form action="edit.php" method="post">
				<h3 >Edit Todo</h3>
					
				
		        		<input type="text" name="todo" value="<?=$todo?>">
						<input type="date" name="date" value="<?=$date ?>">
                        <input type='time' name='time' value="<?=$time ?>">
		        		<input type="hidden" name="tid" value="<?=$todo_id?>">						 
						<input type="submit" name="submit"  value="Save Changes">
		    		
				</form>
	  		
	</div>

    
</body>
</html>	
	
