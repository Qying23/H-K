<?php

require_once 'db_connect.php';

	if($_POST) {
	    $name = $_POST['hName'];
	    $beschreibung = $_POST['beschreibung'];
	    $foto = $_POST['Foto'];
	    $alterPreis = $_POST['alterPreis'];
	    $neuerPreis = $_POST['neuerPreis'];

	    $hId = $_POST['hId'];

	    $sql = "UPDATE haushalt SET hName = '$name', beschreibung = '$beschreibung', Foto = '$foto', alterPreis = '$alterPreis', neuerPreis = '$neuerPreis' WHERE hId = {$hId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>Succcessfully Updated</p>";
	        echo "<a href='../update.php?id=".$hId."'><button type='button'>Back</button></a>";
	        echo "<a href='../../admin.php'><button type='button'>Home</button></a>";
	    } else {
	        echo "Erorr while updating record : ". $connect->error;
	    }

	    $connect->close();

	}

?>