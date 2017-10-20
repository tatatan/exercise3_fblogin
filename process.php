<?php

include 'connect.php';
session_start();
if(isset($_POST['user'])){
$user = $_POST['user'];
$pw = $_POST['password'];
}

if(isset($_GET['id'])){
    $fbid;
    $fbid = $_GET['id'];
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $gender = $_GET['gender'];
    $g=0;
    if ($gender=='female') {$g=1;}
    if (isset($_GET['lastname'])){$lastname=$_GET['lastname'];}
    else { $lastname="tatasusungae";}
    $_SESSION['fbid']=$fbid;
    
    $query = sprintf("SELECT fbid,username FROM members WHERE fbid='$fbid' AND fbid!=0 LIMIT 1;");
    
    $result = $connect->query($query);
    $row = $result -> fetch_assoc();
    
    if (mysqli_num_rows($result)!=1){
        $_SESSION['fbid']=$fbid;
        /*$a = explode("%20",$name);
        $first_name = $a[0];
        $last_name = $a[1];*/
       echo "<script>
            alert('You have to registered first');
        window.location.href = 'regis.php?fbid=$fbid&name=$name&lastname=$lastname&gender=$g';</script>";
    }
    else{
    if ($row['username']=='') {echo "Sorry error happen";}
    else{$_SESSION['username']= $row['username'];
    header('Location: ../exercise3_fblogin/secret.php');}}

}
else{

    if (($user!='')and($pw!='')){

        $query = sprintf("SELECT id, username, firstname, lastname 
        FROM members WHERE username='$user' 
        AND password='$pw' ;");
        $result = $connect->query($query);
        $row=$result->fetch_assoc();

       if (mysqli_num_rows($result) !=1){
        echo "Wrong username or password";
        echo "<a href='loginwithfb.php' >Go back</a>";}
    
       else{
       $row = $result->fetch_assoc();
       $_SESSION['id']= $row["id"];
       $_SESSION['username']=$user;
      
       //save the id,username for use later 
      header('Location: ../exercise3_fblogin/secret.php');
    }}
    else
    {
        echo "login failed";
        echo "login or password is not completed";
        echo "<a href='loginwithfb.php' >Go back</a>";
    } }
?>

