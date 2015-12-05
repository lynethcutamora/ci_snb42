    
    <?php 
    	session_start();
    	if(!isset($_SESSION['Start&Boost'])){
    		header("location:../index.php");
    	}else{
    		$_SESSION['pages']='newsfeedtoprated';
    include("../dashboard/fixed.php");?>
    <?php include("../newsfeedtoprated/topratedcontent.php");?>
    <?php include("../dashboard/footer.php");?>
    <?php include("../dashboard/controlsidebar.php");?>
    <?php include("../dashboard/end.php");}?>