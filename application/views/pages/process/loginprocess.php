<?php 
	session_start();
	include("../dbcon.php");
	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$result = mysql_query("SELECT * FROM User_MD WHERE emailAdd='$email' AND password='$password'");
		if(mysql_num_rows($result))
		{	while ($row=mysql_fetch_array($result)) {
				$userId = $row['userId']; 
			}
			$_SESSION['Start&Boost'] = $userId;
			header("location:../index.php");
		}
	else{	
			$_SESSION['error']="Incorrect Username and Password";
			header("location:../index.php");
		}
	
		
	}else{
			header("location:../index.php");
	}

?>