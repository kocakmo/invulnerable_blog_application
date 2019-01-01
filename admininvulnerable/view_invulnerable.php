<h1>Blog</h1>

			
	<?php		
		

			
			
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

$result=mysqli_query($conn,"SELECT postid,postTitle,email,content FROM comments");

while($row = $result->fetch_assoc())
{
echo '<div>';
                echo '<h1> POST ID: '.$row['postid'].'</h1>';
                echo '<p>Posted by '.$row['email'].'</p>';
                echo '<p>'.substr($row['content'],0,150).'</p>';                
                echo '<p><a href="viewpost_invulnerable.php?id='.$row['postid'].'">Read More</a></p>';                
echo '</div>';
}
?>

<form action='' method='post'>

    <p><label>Title</label><br />
    <input type='text' name='postTitle' </p>

    <p><label>Description</label><br />
    <textarea name='postDesc' cols='60' rows='10'></textarea></p>

    <p><label>Content</label><br />
    <textarea name='postCont' cols='60' rows='10'></textarea></p>

    <p><input type='submit' name='submit' value='Submit'></p>

</form>

<?php
//if form has been submitted process it
if(isset($_POST['submit'])){

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "admintable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$title=mysql_real_escape_string($_POST['postTitle']);
$description=mysql_real_escape_string($_POST['postDesc']);
$content=mysql_real_escape_string($_POST['postCont']);
$sql = "INSERT INTO comments (postTitle, email, content)
VALUES ('$title', '$description', '$content')";
$sql=strip_tags($sql);
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






}


?>