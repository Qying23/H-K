<?php

	require_once 'db_connect.php';

	if($_POST) {

	    $name = $_POST['disName'];
	    $beschreibung = $_POST['beschreibung'];
	    $foto = $_POST['Foto'];
	    $alterPreis = $_POST['alterPreis'];
	    $neuerPreis = $_POST['neuerPreis'];

	 
	    $sql = "INSERT INTO diskont (disName, beschreibung, Foto, alterPreis, neuerPreis) VALUES ('$name', '$beschreibung', '$foto', '$alterPreis', '$neuerPreis')";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>New Record Successfully Created</p>";
	        echo "<a href='../../create.php'><button type='button'>Back</button></a>";
	        echo "<a href='../../admin.php'><button type='button'>Home</button></a>";
	    } else {
	        echo "Error " . $sql . ' ' . $connect->connect_error;
	    }
	    $connect->close();
	}
?>