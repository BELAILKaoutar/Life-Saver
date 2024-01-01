
<?php

  include 'config.php';
  error_reporting(0);
  if (isset($_POST['submit'])) {
	$username = $_POST['username'];
    $cin = $_POST['cin'];
    $tél = $_POST['tél'];
    $sexe = $_POST['sexe'];
    $date_naissance = $_POST['date_naissance'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username,cin,tél,sexe,date_naissance, email, password)
					VALUES ('$username','$cin','$tél','$sexe','$date_naissance', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
        $cin = "";
        $tél = "";
        $sexe = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}  
if (preg_match('/@/', $email)) {
    echo "L'e-mail est valide: " . $email;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="inscription.css">
    <title></title>
</head>

<body>
<section>     
    <div class="container">
     <div class="contactInfo">
        <div>
                <h2>Contact Info</h2>
                <ul class="info">
                  <li>
                    <span><img src="location.png"></span>
                    <span>Maroc</span>                
                  </li> 
                  <li>
                    <span><img src="mail.png"></span>
                    <span>LifeSaver@gmail.com</span>                
                  </li>  
                  <li>
                    <span><img src="call.png"></span>
                    <span>06.07.70.58.54</span>                
                  </li>                  
                </ul>              
            </div>
             <ul class="sci">
                <li><a href="#"><img  src="1.png"></a></li>
                <li><a href="#"><img  src="2.png"></a></li>
                <li><a href="#"><img  src="3.png"></a></li>
                <li><a href="#"><img  src="4.png"></a></li>
                <li><a href="#"><img  src="5.png"></a></li>
             </ul> 
           </div>
             <div class="contactForm">
             <h2>Sign Up</h2>
            <h4>Enter your personal details to use all of site features.</h4>
            <div class="formBox">
            <div class="inputBox w50">
            <form method="post">
              <label >Username</label>
              <!--<input type="text" id="name" name="name" required>-->
              <input type="text" name="username"  placeholder="Username"  value="<?php echo $username; ?>" required >
            </div>  
            <div class="inputBox w50">
            <label > CIN</label>
            <input type="text" name="cin"  placeholder="cin"  value="<?php echo $cin; ?>" required >

            </div>
            <div class="inputBox w50">
            <label >Tél</label>
            <input type="text" name="tél"  placeholder="tél"  value="<?php echo $tél; ?>" required >
            </div>
            <div class="inputBox w50">
            <label >Sexe</label>
            <input list="sexe" name="sexe" required  value="<?php echo $sexe; ?>">
            <datalist id="sexe">
              <option value="Homme">
              <option value="Femme">
            </datalist>
            </div>
            <div class="inputBox w50">
            <label >date_naissance</label>
            <input type="text" name="date_naissance"  placeholder="date_naissance"  value="<?php echo $date_naissance; ?>" required >
            </div>
            <div class="inputBox w50">
            <label >Email</label>
            <input type="email" name="email"  placeholder="Email" value="<?php echo $email; ?>" required  >

            </div>
            <div class="inputBox w50">
            <label >Password</label>            
            <input type="password" name="password"  placeholder="Password" value="<?php echo $_POST['password']; ?>" required >
            </div>
            <div class="inputBox w50">
            <label >ConfirmPassword</label>
            <input type="password" name="cpassword" placeholder="ConfirmPassword" value="<?php echo $_POST['cpassword'] ;?>" required >            
            </div>
            <div class="inputBox w100">
            <button type="submit" name='submit'>Sign Up</button> 
            <button  type="submit" name='submit'><a href="index.php">log in</a></button>

                 
                </div>
        </form>
           </div>
        </div>
        </div>
    </section>

        <script src="script.js"></script>
</body>

</html>