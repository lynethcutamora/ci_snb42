<?php 
session_start();
include("../dbcon.php");
  if(isset($_POST['btnIdeator'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword']) )
    {   

    	if($_POST['password']==$_POST['repassword']){
	    	 $userId = uniqid('id');
	      	 $lname = $_POST['lname'];
	      	 $fname = $_POST['fname'];
	      	 $midinit = $_POST['midinit'];
	      	 $age = $_POST['age'];
	      	 $gender = $_POST['gender'];
	      	 $email = $_POST['email'];
	      	 $password = md5($_POST['password']);
	      	 $address = $_POST['address'];
	      	 $picid=uniqid('pi');
			 $result = mysql_query("SELECT * FROM user_md WHERE emailAdd='$email'");
		    	if(mysql_num_rows($result))
				{	
					$_SESSION['error']="Email address already registered!";
					header("location:../index.php");
				}
				else{
			      	 mysql_query("INSERT INTO user_md(userId,userType,dateRegistered,address,emailAdd,password,profilePicId)
			      	 VALUES('$userId','Ideator',NOW(),'$address','$email','$password','$picid')");
			      	 mysql_query("INSERT INTO user_dtl(userId,lName,fName,midInit,age,gender)
			      	 VALUES('$userId','$lname','$fname','$midinit','$age','$gender')");
			      	 mysql_query("INSERT INTO picture_dtl(userId,picturename,pictureId)
			      	 VALUES('$userId','1.png','$picid')");
			          $_SESSION['error'] ="Successfully Register";
			         header("location:../index.php");
	       		 }
	    }
	    else
	    {
	    	$_SESSION['error']="Password and Confirm Password didn't match";
	    	header("location:../index.php");
	    }
    }
   else if(isset($_POST['btnInvestor'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword']) )
    {     
    	if($_POST['password']==$_POST['repassword']){
	    	 $userId = uniqid('in');
	      	 $lname = $_POST['lname'];
	      	 $fname = $_POST['fname'];
	      	 $midinit = $_POST['midinit'];
	      	 $age = $_POST['age'];
	      	 $gender = $_POST['gender'];
	      	 $email = $_POST['email'];
	      	 $password = md5($_POST['password']);
	      	 $address = $_POST['address'];
	      	 $picid=uniqid('pi');
			 $result = mysql_query("SELECT * FROM user_md WHERE emailAdd='$email'");
		    	if(mysql_num_rows($result))
				{	
					$_SESSION['error']="Email address already registered!";
					header("location:../index.php");
				}else
				{
			      	 mysql_query("INSERT INTO user_md(userId,userType,dateRegistered,address,emailAdd,password)
			      	 VALUES('$userId','Investor',NOW(),'$address','$email','$password')");
			      	 mysql_query("INSERT INTO user_dtl(userId,lName,fName,midInit,age,gender,profilePic)
			      	 VALUES('$userId','$lname','$fname','$midinit','$age','$gender','1')");
			      	 mysql_query("INSERT INTO picture_dtl(userId,picturename,pictureId)
			      	 VALUES('$userId','1.png','$picid')");
			         $_SESSION['error'] ="Successfully Register";
			         header("location:../index.php");
	      	    }
	    }
	    else
	    {
	    	$_SESSION['error']="Password and Confirm Password didn't match";
	    	header("location:../index.php");
	    }
    } 
    else if(isset($_POST['btnCompany'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword']) )
    {     
    	if($_POST['password']==$_POST['repassword']){
	    	 $userId = uniqid('co');
	      	 $companyname = $_POST['companyname'];
	      	 $ownername = $_POST['ownname'];
	      	 $businesstype = $_POST['businesstype'];
	      	 $yearfounded = $_POST['yearfounded'];
	      	 $address = $_POST['address'];
	      	 $email = $_POST['email'];
	      	 $password = md5($_POST['password']);
	      	 $picid=uniqid('pi');
	    	 $result = mysql_query("SELECT * FROM user_md WHERE emailAdd='$email'");
		    	if(mysql_num_rows($result))
				{	
					$_SESSION['error']="Email address already registered!";
					header("location:../index.php");
				}else
				{
			      	 mysql_query("INSERT INTO user_md(userId,userType,dateRegistered,address,emailAdd,password)
			      	 VALUES('$userId','Company',NOW(),'$address','$email','$password')");
			      	 mysql_query("INSERT INTO company_dtl(userId,companyName,businessType,ownerName,yearFounded)
			      	 VALUES('$userId','$companyname','$businesstype','$ownername','$yearfounded')");
			      	 mysql_query("INSERT INTO picture_dtl(userId,picturename,pictureId)
			      	 VALUES('$userId','1.png','$picid')");
			         $_SESSION['error']="Successfully Register";

			         header("location:../index.php");


	    		}
	    }
	    else
	    {
	    	$_SESSION['error']="Password and Confirm Password didn't match";
	  		header("location:index.php");
	    }
    }



?>