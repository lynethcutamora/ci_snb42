    
    <?php 
    	session_start();
    	if(!isset($_SESSION['Start&Boost'])){
    		header("location:../index.php");
    	}else{
    		$_SESSION['pages']='newsfeedonfire';
    include("../dashboard/fixed.php");?>
    <?php include("../newsfeedonfire/onfirecontent.php");?>
    <?php include("../dashboard/footer.php");?>
    <?php include("../dashboard/controlsidebar.php");?>
    <?php include("../dashboard/end.php");}?>