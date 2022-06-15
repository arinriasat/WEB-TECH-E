<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Profile Picture</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<?php  include_once "./navbar.php" ?>

<div class="container">
<div class="mainbar">
<fieldset>
<legend><h2>Profile Picture</h2></legend>

<div class="profile-wrapper">
<div class="col-1">
<img height="200px" src="./images.jpg" alt="profile"> <br> <br>
<input type="file"> <br>
<hr>
<button type="Submit">Submit</button>
</div>
</div>
</fieldset>
</div>
</div>

<?php  include_once "./footer.php" ?>
</body>
</html>             