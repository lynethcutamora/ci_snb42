<?php 
include 'dbcon.php';
if(isset($_SESSION['Start&Boost'])){
    $userId= $_SESSION['Start&Boost'];
    $query = "SELECT * FROM User_dtl WHERE userId='$userId'";
    $query = mysql_query($query);
    while($row = mysql_fetch_array($query))
     {
        $_SESSION['lname'] = $row['lName'];
        $_SESSION['fname'] = $row['fName'];
        $_SESSION['midInit'] = $row['midInit'];
        $pictureId = $row['profilePic'];
     }
    $query = "SELECT * FROM picture_dtl WHERE pictureId='$pictureId'";
    $query = mysql_query($query);
    while($row = mysql_fetch_array($query))
     {
       
        $_SESSION['profilePic'] = $row['picturename'];
     }

}
?>