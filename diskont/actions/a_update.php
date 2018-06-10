<?php

require_once 'db_connect.php';

	if($_POST) {
	    $name = $_POST['disName'];
	    $beschreibung = $_POST['beschreibung'];
	    $foto = $_POST['Foto'];
	    $alterPreis = $_POST['alterPreis'];
	    $neuerPreis = $_POST['neuerPreis'];

	    $disId = $_POST['disId'];

	    $sql = "UPDATE diskont SET disName = '$name', beschreibung = '$beschreibung', Foto = '$foto', alterPreis = '$alterPreis', neuerPreis = '$neuerPreis' WHERE disId = {$disId}";

	    if($connect->query($sql) === TRUE) {
	        echo "<p>成功更新</p>";
	        echo "<a href='../update.php?id=".$disId."'><button type='button'>回去</button></a>";
	       
	    } else {
	        echo "Erorr while updating record : ". $connect->error;
	    }

	    $connect->close();

	}

?>