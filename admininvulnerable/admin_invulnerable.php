<form action="" method="post">
<p><label>Username</label><input type="text" name="username" value=""  /></p>
<p><label>Password</label><input type="password" name="password" value=""  /></p>
<p><label></label><input type="submit" name="submit" value="Login"  /></p>
</form>
<?php

if(isset($_POST['submit'])){

    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    
$servername = "localhost";
$db_username = "root";
$db_password = "usbw";
$dbname = "admintable";
	// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

$result=mysqli_query($conn,"SELECT password FROM users where username='$username' and password='$password'");
$row = mysqli_fetch_row($result);
$mat=$row[0];
    
	$hash = crypt('$mat');
	echo $hash;
	echo "<br>";
	$hash2 = crypt($password, $hash);
	echo $hash2;
	
	
	
    
    if($result)
	{
	
	

	
    if($username=='admin' && (crypt($password, $hash) == $hash2)){ 
		
        //logged in return to index page
        header('Location: adminindex_invulnerable.php');
        exit;
    }
	
}
	}

?>