<?PHP
if(isset($_GET['user'])){
	$user = $_GET['user'];
	$query = "SELECT * FROM user_md WHERE user_emailAdd = '$user'";
}
else{
	$query = "SELECT * FROM user_md";
}
	include_once("connection.php");	
	
	$result = mysql_query($query) 
		or die('Error in query: $query' . mysql_error());

	$output = array();
	while($row = mysql_fetch_assoc($result)){
		$output[] = $row;
	}
	print (json_encode($output));
?>