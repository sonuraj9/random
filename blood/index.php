<?php
// include db connect class
    require_once __DIR__ . '\\db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
	
	 $result = mysql_query("SELECT * FROM user_data ;")or die(mysql_error());
	 
	 if($row = mysql_fetch_assoc($result)) {
	 
	 echo $row['name'];
	 }
?>