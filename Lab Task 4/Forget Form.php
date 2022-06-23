<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forget Password</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<?php include_once "./navbar.php" ?>
<fieldset class="Forget Form">
<legend><b>Forget Password</b></legend>
<form class="form" action="./user/dashboard.php" method="post">
<table>
<tbody>
<tr>
<td>Enter Email:</td>
<td><input type="text"></td>
</tr>
</tbody>
</table>
<button class="btn-margin" type="submit ">Submit</button>
</form>
</fieldset>
<?php include_once "./footer.php"?>
</body>
</html>




