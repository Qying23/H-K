<?php

	require_once 'db_connect.php';


	if($_POST) {

	    $disId = $_POST['disId'];

	    $sql = "DELETE FROM diskont WHERE disId = {$disId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>Successfully deleted!!</p>";
	        echo "<a href='../../admin.php'><button type='button'>Back</button></a>";
	    } else {
	        echo "Error updating record : " . $connect->error;
	    }

	    $connect->close();
	}

?>

