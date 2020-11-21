<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
}

.topnav {
overflow: hidden;
background-color: #333;
}

.topnav a {
float: left;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #333;
color: black;
}

.topnav a.active {
background-color: #333;
color: white;
}
</style>
</head>

<body>

<div class="topnav" style="display: inline-block;width: 100%;">
<a href="Logout.php" style="display: block;float: right"><i class="material-icons">settings_power</i>Logout</a>
<a href="contact.php" style="display: block;float: right"><i class="material-icons">supervisor_account</i>contact</a>
<a href="user.php" style="display: block;float: right"><i class="material-icons">account_box</i>UserS</a>
<a class="active" href="home.php" style="display: block;float: right"><i class="material-icons">account_balance</i>Home</a>
<a href="dash.php" style="display: block;float: right"><i class="material-icons">dashboard</i>Dashboard</a>
</div>
<form method="post">
<table align="center" border-collapse: collapse style="padding: 80px;">
  <tr>
    <td style="color:#ccc;">Movie Name</td>
    <td ><input type="text" name="id"></td>
  </tr>
  <tr>
    <td style="color:#ccc;">Movie Details</td>
    <td ><input type="text" name="id"></td>
  </tr>
  <tr>
    <td style="color:#ccc;">Status</td>
    <td>
      <select class="form-control" name="Status">
        <option value="">active</option>
        <option value="">inactive</option>
      </select>
    </td>    
  </tr>
<tr>
  <td colspan="2" align="right"><input type="submit" value="save" name="save" class="btn btn-success">
</td>
</tr>
</table>
</form>
</body>
</html>