<form action="" method="post">
<p><label>Username</label><input type="text" name="username" value=""  /></p>
<p><label>Password</label><input type="password" name="password" value=""  /></p>
<p><label></label><input type="submit" name="submit" value="Login"  /></p>
</form>
<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$db_username = "root";
$db_password = "usbw";
$dbname = "admintable";
	// Create connection
$conn = mysqli_connect($servername, $db_username, $db_password,$dbname );
$username=mysql_real_escape_string($_POST["username"]);
$password=mysql_real_escape_string($_POST["password"]);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

$result=mysqli_query($conn,"SELECT * FROM users where username='".$username."' and password='".$password."'");
    $row = $result->fetch_assoc();


if($username=='admin' && $password==$row['password'])
{	
header('Location: adminindex_invulnerable.php');
}

else {
         echo '<p class="error">Wrong username or password</p>';
    }
	
}
?>
