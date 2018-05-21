<?php

require_once 'actions/db_connect.php';

if($_GET['id']) {
    $aId = $_GET['id'];

    $sql = "SELECT * FROM allerei WHERE aId = {$aId}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
    <link rel="stylesheet" type="text/css" href="crud.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<h3>Do you really want to delete this Product?</h3>

	<form action="actions/a_delete.php" method="post">
	    <input type="hidden" name="aId" value="<?php echo $data['aId'] ?>" />
	    <button type="submit" class="btn">Yes, delete it!</button>
	    <a href="../admin.php"><button type="button" class="btn">No, go back!</button></a>
	</form>

</body>
</html>

<?php
}
?>