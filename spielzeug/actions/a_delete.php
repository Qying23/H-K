<?php

	require_once 'db_connect.php';


	if($_POST) {

	    $sId = $_POST['sId'];

	    $sql = "DELETE FROM spielzeug WHERE sId = {$sId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>Successfully deleted!!</p>";
	        echo "<a href='../../admin.php'><button type='button'>Back</button></a>";
	    } else {
	        echo "Error updating record : " . $connect->error;
	    }

	    $connect->close();
	}

?>

