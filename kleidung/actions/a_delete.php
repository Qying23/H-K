<?php

	require_once 'db_connect.php';


	if($_POST) {

	    $kId = $_POST['kId'];

	    $sql = "DELETE FROM kleidung WHERE kId = {$kId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>Successfully deleted!!</p>";
	        echo "<a href='../../admin.php'><button type='button'>Back</button></a>";
	    } else {
	        echo "Error updating record : " . $connect->error;
	    }

	    $connect->close();
	}

?>

