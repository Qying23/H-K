<!DOCTYPE html>
<html>
<head>

    <title>PHP CRUD  |  Add Product</title>

    <link rel="stylesheet" type="text/css" href="crud.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>

	<fieldset>

	    <legend>Add Product</legend>

	    <form action="actions/a_create.php" method="post">
	        <table class="table">
	            <tr>
	                <th>Name</th>
	                <td><input type="text" name="hName" placeholder="Name" /></td>
	            </tr>     
	            <tr>
	                <th>Beschreibung</th>
	                <td><input type="text" name="beschreibung" placeholder="Beschreibung" /></td>
	            </tr>
	            <tr>
	                <th>Foto</th>
	                <td><input type="text" name="Foto" placeholder=".jpg/.png" /></td>
	            </tr>
	            <tr>
	                <th>Alter Preis</th>
	                <td><input type="text" name="alterPreis" placeholder="Alter Preis" /></td>
	            </tr>
	            <tr>
	                <th>Neuer Preis</th>
	                <td><input type="text" name="neuerPreis" placeholder="Neuer Preis" /></td>
	            </tr>
	            <tr>
	                <td><button type="submit" class="btn">Insert Product</button></td>
	                <td><a href="../admin.php"><button type="button" class="btn">Back</button></a></td>
	            </tr>
	        </table>
	    </form>

	</fieldset>

</body>
</html>