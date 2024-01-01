
<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location:page1.php");

}
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: page1.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form   method="post">
                <h1>Sign In</h1>
                <span>or use your email password</span>
                <input type="email" name="email"  placeholder="Email" value="<?php echo $email; ?>" required  ><br>
                <input type="password" name="password"  placeholder="Password" value="<?php echo $_POST['password']; ?>" required ><br>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name='submit'>Sign In</button>
     </form>
</body>
</html>
           