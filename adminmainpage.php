<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

?>
<?php 
include_once('connection.php'); 
$sql = " select * from user";
	$query = mysqli_query($con,$sql);
?> 
<!DOCTYPE html>
<html>
<head>
<style>
body  {
  background-image: url("renovate.jpg");no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color: #cccccc;


}
</style>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="adminstyle.css">

	<?php  include 'links.php' ?> 
</head>

<body>
<table align="center" border="1px" style="width:600px; line-height:20px;"> 

	<tr> 
		<td colspan=5><h2><centre>APPOINTMENT OF USERS</centre></h2></td>
		 
		</tr> 
			  <th>   name</th> 
			  <th>mobile no </th> 
			  <th> address </th> 
			  <th> date </th>
              <th>email id</th> 
			  
		</tr> 
		
		<?php while($rows=$query->fetch_assoc())
		{ 
		?> 
		<tr> <td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['mobile_number']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		<td><?php echo $rows['date']; ?></td>
        <td><?php echo $rows['email_id']; ?></td> 
		</tr> 
	<?php 
        } 
          ?> 

	</table>
	<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>
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
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
	</style>
<div class="topnav">
  <a class="active" href="#home">USER APPOINTMENT</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="logout.php" class="btn btn-danger">  Logout</a>
</div>

<div style="padding-left:16px">
</div>

</body>
</html>

    



</body>
</html>



