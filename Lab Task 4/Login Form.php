<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include_once "./navbar.php"?>
<fieldset class="form-wrapper">
<fieldset class="Login Form">
<legend><b>LOGIN</b></legend>
<form class="form" action="./dashboard form.php" method="post">
<table>
<tbody
<tr>
<td>Username:</td>
<td><input type="text"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text"></td>
</tr>
</tbody>
</table>

<hr>
<input type="checkbox" name="" id=""> Remember Me <br>
<input class="btn-margin" type="Submit" value="Submit"> <a href="./forgetPassword.php">Forgot Password?</a>
</form>
</fieldset>
<?php include_once "./footer.php"?>
</body>
</html>

