<?PHP
include_once("connection.php");	

	$query = "SELECT user_emailAdd FROM user_md";

	$result = mysql_query($query) 
		or die('Error in query: $query' . mysql_error());

	$output = array();
	while($row = mysql_fetch_assoc($result)){
		$output[] = $row;
	}
	print (json_encode($output));
?>