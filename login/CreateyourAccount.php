<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Register Forms </title>
    <link rel="stylesheet" type="text/css" href="s.css">
</head>

<body>
<form method="POST" action=" ">
                    <h2 class="title">Registration Form</h2>
                    

                                    <label>Name</label>
                                    <input  type="text" name="name">

                                    <label >Username</label>
                                    <input type="text" name="username">

                     
 
                                    <label >Password</label>
                                    <input  type="password" name="password" placeholder="Password">


                        
                        <input  type="submit"  name="submit" value="Submit">



  
<?php

	function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

if(isset($_POST["submit"]))
{

$name=$_POST["name"];
$uname=$_POST["username"];
$pa=validate($_POST["password"]);
$con=mysqli_connect("localhost","root","","to");
$sql="INSERT INTO `users` (`uid`,`user_name`, `password`, `name`) VALUES (NULL,'$uname','$pa','$name')";
$result=mysqli_query($con,$sql);
header("Location: login.php");
}
?>



</body>

</html>
