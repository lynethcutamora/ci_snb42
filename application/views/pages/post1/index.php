    
    <?php 
    	session_start();
    	if(!isset($_SESSION['Start&Boost'])){
    		header("location:../index.php");
    	}else{
    		$_SESSION['pages']='post1';
    include("content.php");}?>