

<!DOCTYPE html>
<html>
<head>
<style>
 label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Register</title>
</head>
<body>

 <FONT size=5><b> Fill your Profile </b></FONT>
<br /> <br />
 
<form method="post" action="save_data.php">
 <p><label>Username</label><br />

<input type='text' name='user'></p>

<p><label>Password</label>
<input type="text" name="password"> 
Retype-Password     
<input type="text" name="r_password"> </p>
<label>First Name</label> <br />

<?php
if (isset($_GET['name'])){
	$name=$_GET['name'];
echo"<input type='text' name='first_name' value=".$name.">";} 
else {
echo "<input type='text' name='first_name' placeholder=ใส่ชื่อจริงมาเลยจ้า />";}
?>
<br />
<p><label>Last Name</label><br />
<?php
if (isset($_GET['lastname'])){
	$lastname=$_GET['lastname'];
echo"<input type='text' name='last_name' value=".$lastname.">";} 
else {
echo "<input type='text' name='last_name' placeholder=ใส่ชื่อจริงมาเลยจ้า />";}
?></p>

<p><label>Sex </label><br />
<?php
if (isset($_GET['gender'])){
	$g = $_GET['gender'];
	if ($g==1){
		echo "<select type='int' name= 'sex' {width: 700px;}>
			<option value =1> Female </option>
			<option value =0> Male </option>
			</select></p>}";}
			}
else {
	echo "<select type='int' name= 'sex' {width: 700px;}>
		<option value =0> Male </option>
		<option value =1> Female </option>
		</select></p>";
		}

 ?>
<p><label>Major</label> <br />
<input type="text" name="major"> 

<input type="submit" value="Add data"> </p>
</form>
 
 
 
</body></html>