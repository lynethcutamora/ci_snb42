   <?php 
        session_start();
        if(!isset($_SESSION['Start&Boost'])){
            header("location:../index.php");
        }else{
            $_SESSION['pages']='timeline';
    include("../dashboard/fixed.php");?>
    <?php include("content.php");?>
    <?php include("../dashboard/footer.php");?>
    <?php include("../dashboard/controlsidebar.php");?>
    <?php include("../dashboard/end.php");}?>