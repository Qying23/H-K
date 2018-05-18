<?php
require_once 'actions/db_connect.php';


if($_GET['id']) {
    $hId = $_GET['id'];

    $sql = "SELECT * FROM haushalt WHERE hId = {$hId}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Product</title>

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
    <legend>Update Haushalt</legend>

    <form action="actions/a_update.php" method="post">
        <table class="table">
            <tr>
                <th>Name</th>
                <td><input type="text" name="hName" placeholder="Name" value="<?php echo $data['hName'] ?>" /></td>
            </tr>     
            <tr>
                <th>Beschreibung</th>
                <td><input type="text" name="beschreibung" placeholder="beschreibung" value="<?php echo $data['beschreibung'] ?>" /></td>
            </tr>
            <tr>
                <th>Foto</th>
                <td><input type="text" name="Foto" placeholder="Foto" value="<?php echo $data['Foto'] ?>" /></td>
            </tr>
            <tr>
                <th>Alter Preis</th>
                <td><input type="text" name="alterPreis" placeholder="alterPreis" value="<?php echo $data['alterPreis'] ?>" /></td>
            </tr>
            <tr>
                <th>Neuer Preis</th>
                <td><input type="text" name="neuerPreis" placeholder="neuer Preis" value="<?php echo $data['neuerPreis'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="hId" value="<?php echo $data['hId']?>" />
                <td><button type="submit" class="btn">Save Changes</button></td>
                <td><a href="../admin.php"><button type="button" class="btn">Back</button></a></td>
            </tr>
        </table>
    </form>
</fieldset>

</body>
</html>

<?php
}
?>