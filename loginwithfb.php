<HTML> 
<HEAD><TITLE> SOMETHING TO LOG IN EIEI </TITLE></HEAD>

<?php

if (isset($_GET['logout'])){
    session_unregister($username);
    unset($_SESSION['username']);
}
?>


<font size=3><b> LOG IN </b></font><br /><br />
<form method="post" action="process.php">
<label>username:</label>
<input type="text" name="user">
<br />
<p><label> Password : </label>
<input type="text" name="password"> </p>
<input type="submit" value="login">
</form>

<font size=3><b>  LOG IN with FB </b></font><br />     

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<form method="post" action="fblogin.php">
<input type="submit" value="fb login"></form>

<br /><br /> Not registered yet?<br />
<form method="post" action="regis.php">
<input type="submit" value="regis"></form>


 
 </HTML>
