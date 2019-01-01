<h1>Blog</h1>
<?php
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


<p><a href="view_invulnerable.php">View and add posts</a></p>


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

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






}


?>