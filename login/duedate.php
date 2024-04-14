<?php 
session_start();

if (isset($_SESSION['uid']) && isset($_SESSION['user_name']))
 {
	
	$ui=$_SESSION['uid'];


  $dbc = mysqli_connect('localhost', 'root', '', 'to');


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	 <link rel="stylesheet" type="text/css" href="s.css">

</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
<form>
    		<h3 >TODAY's</h3>
                        <p>
        				<ol >
        				<?php 
        				//fetch data from table;
						$date=date('Y-m-d'); 
		   					$sql = "SELECT * from todos where `uid`='$ui' and `date`='$date' and `status`=0 ";
		   					$result = mysqli_query($dbc, $sql);

                             
                         while ($row=mysqli_fetch_array($result)) 
						 {

                         $todo = $row['todo'];
                         $todo_id = $row['tid'];
                         $status = $row['status'];
                         $date= $row['date'];
                         $time=$row['time'];
						 $current_time = time();

                          // Check if it's time for the reminder
                          if ($current_time >= $time) {
                             // Time to show the reminder
                                echo "<script>alert('Reminder: Time to complete the task - $todo');</script>";
                                }
                          ?>
                            
							<br>	
                  <li >
                             		
                      <?php
					   echo '<h4>" ';
					   echo $todo;
					   echo ' "</h4>';
					   echo " Complelete task before :- ";
					   echo $time;
					   ?>
					  <br>
                             		  
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
                  </ol>
</form>

 <form>
    				
					<h3 >UPCOMING's</h3>
					<p>
					<ol >
					<?php 
					//fetch data from table;
					$date=date('Y-m-d'); 
						   $sql = "SELECT * from todos where `uid`='$ui' and `date`>'$date' and `status`=0 ";
						   $result = mysqli_query($dbc, $sql);

						 
					 while ($row=mysqli_fetch_array($result)) {

					 $todo = $row['todo'];
					 $todo_id = $row['tid'];
					 $status = $row['status'];
					 $date= $row['date'];
					 $time=$row['time'];

					  ?>
						
						<br>	
			  <li >
								 
				  <?php
				   echo '<h4>" ';
				   echo $todo;
				   echo ' "</h4>';
				   echo " <br> ";
				   echo "Duedate :- Date:$date  Time:$time ";
				   ?>
				  <br>
								   
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
			  </ol>
</form>


<form>
    				
					<h3 >OVERDUE's</h3>
					<p>
					<ol >
					<?php 
					//fetch data from table;
					$date=date('Y-m-d'); 
						   $sql = "SELECT * from todos where `uid`='$ui' and `date`<'$date' and `status`=0  ";
						   $result = mysqli_query($dbc, $sql);

						 
					 while ($row=mysqli_fetch_array($result)) {

					 $todo = $row['todo'];
					 $todo_id = $row['tid'];
					 $status = $row['status'];
					 $date= $row['date'];

					  ?>
						
						<br>	
			  <li >
								 
				  <?php
				   echo '<h4>" ';
				   echo $todo;
				   echo ' "</h4>';
				   echo " <br> ";
				   echo " Date:-$date ";
				   ?>
				  <br>
								   
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
			  </ol>
</form>



<h1> <a href="home.php">Previous</a></h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>