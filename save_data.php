
<?php include 'connect.php'; ?>
<?php
 session_start();
// create a variable
$user = $_POST['user'];
$pw = $_POST['password'];
$rpw = $_POST['r_password'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$sex=$_POST['sex'];
$major = $_POST['major'];
$query = "INSERT INTO members(username,password,firstname,lastname,sex)
		        VALUES ('$user','$pw','$first_name','$last_name','$sex')";
 
//Execute the query
 
if ($pw==$rpw){
 
	if (($user!='')and($pw!='')and($first_name!='')and($last_name!='')and($major!='')){			
		
		if ( isset($_SESSION['fbid']) ) { 
			$fbid = $_SESSION['fbid'];
			$query =  "INSERT INTO members(username,password,firstname,lastname,sex,fbid)
		        VALUES ('$user','$pw','$first_name','$last_name','$sex','$fbid')";
			}

		mysqli_query($connect,$query);
		if(mysqli_affected_rows($connect) > 0){
			echo "<p>Registeration Completed!</p>";
			 echo " <a href=loginwithfb.php>Go Back to Login</a>";
} 
		else {
			echo "Data NOT Added<br />";
			echo mysqli_error ($connect); echo "<br /> <a href=regis.php>Go Back to Register</a>";
}}
	else {
		echo "<p>the data is not completed:'( </p>";
      	echo "<a href=regis.php>Go back</a>";}
	  
 }
 else{
	 echo "password is not matched";
	 echo "<br /> <a href=regis.php>Go Back to Register</a>";
 }