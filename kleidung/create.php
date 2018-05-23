<!DOCTYPE html>
<html>
<head>

    <title>H&K</title>

    <link rel="stylesheet" type="text/css" href="create.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        body{
  			background-color:#e1f4f5;
		}
		fieldset {
		    margin: auto;
		    margin-top: 100px;
		    width: 50%;
		}

		table tr th {
		    padding-top: 20px;
		}

		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		    border: 1px solid white;
		    text-align: left;
		    padding: 8px;
		    width: 20%;
		    background-color: white;
		    text-align: center;      
		  }
		  th{
		    color: grey;
		  }
		button{
		    font-size: 20px;
		    border-radius: 5px;
		    
		}
    </style>
</head>
<body>

	<fieldset>

	    <legend>加新产品</legend>

	    <form action="actions/a_create.php" method="post">
	        <table class="table">
	            <tr>
	                <th>名字</th>
	                <td><input type="text" name="hName" placeholder="名字" /></td>
	            </tr>     
	            <tr>
	                <th>描述产品</th>
	                <td><input type="text" name="beschreibung" placeholder="描述产品" /></td>
	            </tr>
	            <tr>
	                <th>照片</th>
	                <td><input type="text" name="Foto" placeholder=".jpg/.png" /></td>
	            </tr>
	            <tr>
	                <th>老价</th>
	                <td><input type="text" name="alterPreis" placeholder="老价" /></td>
	            </tr>
	            <tr>
	                <th>>新价</th>
	                <td><input type="text" name="neuerPreis" placeholder=">新价" /></td>
	            </tr>
	            <tr>
	                <td><button type="submit" class="btn">加入产品</button></td>
	                <td><a href="../admin.php"><button type="button" class="btn">回去</button></a></td>
	            </tr>
	        </table>
	    </form>

	</fieldset>

</body>
</html>