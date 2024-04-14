<?php 


// Run the connection here

 $dbc = mysqli_connect('localhost', 'root', '', 'to');


$todo_id = $_GET['tid'];

$sql = "update todos set status=1 where tid = $todo_id";
mysqli_query($dbc, $sql);

echo '<script>alert("Your Todo is Completed.")</script>';
echo("<script>location.href = 'home.php';</script>");


?>
