<?php 
session_start();

if (isset($_SESSION['uid']) && isset($_SESSION['user_name']))
 {
	
	$ui=$_SESSION['uid'];
    

  $dbc = mysqli_connect('localhost', 'root', '', 'to');

  if(isset($_POST['submit']))
   {

  	$todo = $_POST['todo'];
	$date = $_POST['dueDate'];
	$time = $_POST['duetime'];
	
   //insert data
   $sql = "insert into todos (todo,uid,date,time) values ('$todo','$ui','$date','$time')";
   mysqli_query($dbc, $sql);
   $msg = "Today's todos created.";
   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	 <link rel="stylesheet" type="text/css" href="s.css">

</head>
<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1>Hello, <?php echo $_SESSION['name']; ?></h1>

        				<form action="home.php" method="post">
						<h3 >My Todo List</h3>
					   				
					   					<label>Today's Todo</label>
					   					<center>
					   						<input type="text" name="todo" >
									    </center>
											<label>Due Date</label>
										<center>
											<input type="date" name="dueDate" value="<?php echo date('Y-m-d'); ?>">
                                            
											<?php  $currentTime = new DateTime(date('H:i'));
                                            $timeInterval = new DateInterval('PT5H30M'); // 5 hours and 30 minutes
                                           $targetTime = $currentTime->add($timeInterval);   ?>

										   <input type='time' name='duetime' value="<?php echo $targetTime->format('H:i');?>">
										          
                                        </center>	

					   				
				   							<input  type="submit" name="submit" value="Done">
				   					
				   		 			<?php if (isset($_POST['submit'])) {?>
				     	
				   		
				   					

				   							<p><?=$msg;?></p>
				   			
				   					

				   					<?php } ?>

		   					</form>
      			
			
  				<form>
    				
        				<h3 >TODO's</h3>
        				<p >My Todo's</p>
                        <p>
        				<ol >
        				<?php 
        				//fetch data from table;
		   					$sql = "SELECT * from todos where `uid`='$ui' order by date,time";
		   					$result = mysqli_query($dbc, $sql);

                             
                         while ($row=mysqli_fetch_array($result)) {

                         $todo = $row['todo'];
                         $todo_id = $row['tid'];
                         $status = $row['status'];

                          ?>
                            
							<br>	
                  <li >
                             		
                      <?=$todo?>
                             		  
						<?php if ($status==0) { ?>
						&nbsp;
							  <a href="del.php?tid=<?=$todo_id?>">Delete
		                        <i  aria-hidden="true"></i>
		                      </a>
						      <a href="edit.php?tid=<?=$todo_id?>" >Edit
                                <i  aria-hidden="true"></i>
		                      </a> &nbsp; 
		                      <a href="comp.php?tid=<?=$todo_id?>" >Complete
		                         <i  aria-hidden="true"></i>
		                      </a>	<?php } else{ ?> &nbsp; 
		                       <a href="del.php?tid=<?=$todo_id?>">Delete
		                         <i  aria-hidden="true"></i>
		                       </a> &nbsp; 
		                       <a href="comp.php?tid=<?=$todo_id?>" >Completed
		                          <i  aria-hidden="true" ></i>
		                       </a> &nbsp;                             
		                <?php } ?>
		           </li><br>
									

                  <?php } ?>
                  </ol></p><pre>
				  <p> <a href="duedate.php">Due Date</a></p></pre>
      				</form>
	
	 
	<h1> <a href="logout.php">Logout</a></h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>