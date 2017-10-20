
<?php

session_start();
if (isset($_SESSION['username'])){
echo "<FONT size=3><b>Welcome  ".$_SESSION['username']."</font></b><br /><br />";
}


include_once('connect.php');
if (isset($_SESSION['username'])){
$query = sprintf("SELECT id, username, firstname, lastname,sex
        FROM members ");
        $result = $connect->query($query);

        while ($row = $result->fetch_assoc())
    { 
          $s = "female";
          $a = $row["sex"];
          if ($a==0) {$s = "male";} else{$s="female";}
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."\t $s  <br />";
    
            
    }

echo "<br /> <a href='loginwithfb.php?action=logout'>Logout</a>";
}

else{
    echo "<p>You are not logged in<?p>";
    echo "<form action='loginwithfb.php'><input type='submit' value='Log in' /></form>";
}
?>