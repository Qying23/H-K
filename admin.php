<?php require_once 'Allerlei/actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <title>H&K</title>
	<link rel="stylesheet" type="text/css" href="crud.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

	<div class="container">
		<h2>Allerlei</h2>
	    <a href="Allerlei/create.php"><button type="button" class="btn btn-primary">Add Product in Allerlei</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Beschreibung</th>
	                <th>Foto</th>
	                <th>Alter Preis</th>
	                <th>Neuer Preis</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM allerei";
		            $result = $connect->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='Allerlei/update.php?id=".$row['aId']."'><button type='button' class='btn btn-info'>Edit</button></a>
		                            <a href='Allerlei/delete.php?id=".$row['aId']."'><button type='button' class='btn btn-danger'>Delete</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Deko</h2>
	    <a href="Deko/create.php"><button type="button" class="btn btn-primary">Add Product in Deko</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Beschreibung</th>
	                <th>Foto</th>
	                <th>Alter Preis</th>
	                <th>Neuer Preis</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM deko";
		            $result = $connect->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='Deko/update.php?id=".$row['dId']."'><button type='button' class='btn btn-info'>Edit</button></a>
		                            <a href='Deko/delete.php?id=".$row['dId']."'><button type='button' class='btn btn-danger'>Delete</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Dicount</h2>
	    <a href="diskont/create.php"><button type="button" class="btn btn-primary">Add Product in Discount</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Beschreibung</th>
	                <th>Foto</th>
	                <th>Alter Preis</th>
	                <th>Neuer Preis</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM diskont";
		            $result = $connect->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['disName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='diskont/update.php?id=".$row['disId']."'><button type='button' class='btn btn-info'>Edit</button></a>
		                            <a href='diskont/delete.php?id=".$row['disId']."'><button type='button' class='btn btn-danger'>Delete</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Haushalt</h2>
	    <a href="haushalt/create.php"><button type="button" class="btn btn-primary">Add Product in Haushalt</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Beschreibung</th>
	                <th>Foto</th>
	                <th>Alter Preis</th>
	                <th>Neuer Preis</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM haushalt";
		            $result = $connect->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='haushalt/update.php?id=".$row['hId']."'><button type='button' class='btn btn-info'>Edit</button></a>
		                            <a href='haushalt/delete.php?id=".$row['hId']."'><button type='button' class='btn btn-danger'>Delete</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Kleidung</h2>
	    <a href="kleidung/create.php"><button type="button" class="btn btn-primary">Add Product in Kleidung</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Beschreibung</th>
	                <th>Foto</th>
	                <th>Alter Preis</th>
	                <th>Neuer Preis</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM kleidung";
		            $result = $connect->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='kleidung/update.php?id=".$row['kId']."'><button type='button' class='btn btn-info'>Edit</button></a>
		                            <a href='kleidung/delete.php?id=".$row['kId']."'><button type='button' class='btn btn-danger'>Delete</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Spielzeug</h2>
	    <a href="spielzeug/create.php"><button type="button" class="btn btn-primary">Add Product in Spielzeug</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Beschreibung</th>
	                <th>Foto</th>
	                <th>Alter Preis</th>
	                <th>Neuer Preis</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM spielzeug";
		            $result = $connect->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='spielzeug/update.php?id=".$row['sId']."'><button type='button' class='btn btn-info'>Edit</button></a>
		                            <a href='spielzeug/delete.php?id=".$row['sId']."'><button type='button' class='btn btn-danger'>Delete</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	    <h2>Taschen & Schuhe</h2>
	    <a href="taschen/create.php"><button type="button" class="btn btn-primary">Add Product in Taschen</button></a>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Beschreibung</th>
	                <th>Foto</th>
	                <th>Alter Preis</th>
	                <th>Neuer Preis</th>
	            </tr>
	        </thead>
	        <tbody>
				<?php

		            $sql = "SELECT * FROM taschen";
		            $result = $connect->query($sql);

		            if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                    echo "<tr>
		                        <td>".$row['hName']."</td>
		                        <td class='beschreibung'>".$row['beschreibung']."</td>
		                        <td><img src='".$row['Foto']."'' alt=''></td>
		                        <td>".$row['alterPreis']."</td>
		                        <td>".$row['neuerPreis']."</td>
		                        <td>
		                            <a href='taschen/update.php?id=".$row['tId']."'><button type='button' class='btn btn-info'>Edit</button></a>
		                            <a href='taschen/delete.php?id=".$row['tId']."'><button type='button' class='btn btn-danger'>Delete</button></a>
		                        </td>
		                    </tr>";
		                }
		            } else {
		                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		            }
	            ?>
	        </tbody>
	    </table>
	</div>

</body>
</html>