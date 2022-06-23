<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Profile</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<?php include_once "./navbar.php"?>
<div class="container">
<div class="sidebar">
<?php include_once "./sidebar.php"?>
</div>

<div class="mainbar">
<fliedset>
<legend><h2>Profile</h></legend>

<div class="profile-wrapper">
<div class="col-1">
<table style="width:50%">
<tbody>
<tr>
<td>Name:</td>
<td>Arin</td>
</tr>
<tr>
<td colspan="2"><hr></td>
</tr>
<tr>
<td>Email: </td>
<td>arin@gmail.com</td>
</tr>
<tr>
<td>Gender:</td>
<td>Female</td>
</tr>
<tr>
<td>Date Of Birth:</td>
<td>22/12/1996</td>
</tr>
<tr>
<td colspan="2"><hr></td>
 </tr>
</tbody>
</table>
<a href="./editProfile.php">Edit Profile</a>
</div>
<div class="col-2">
<img height="200px" src="./images.jpg" alt="profile"> <br>
 <a href="./changeProfilePicture.php">Change</a>
</div>
</div>
</fieldset>
</div>
</div>

<?php  include_once "./footer.php" ?>
</body>

</html>


