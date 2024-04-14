<?php 

 $dbc = mysqli_connect('localhost', 'root', '', 'to');

$todo_id = $_GET['tid'];

$sql = "DELETE FROM `todos` WHERE `todos`.`tid` =  $todo_id";
mysqli_query($dbc, $sql);

echo '<script>alert("Todo is Deleted.")</script>';
echo("<script>location.href = 'home.php';</script>");

?>
				   
