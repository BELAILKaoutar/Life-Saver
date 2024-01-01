
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="patient.css">

</head>
<body>
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($cin) && isset($name) && isset($Dateenter) && isset($address) && isset($email) && isset($phone)){
                //connexion à la base de donnée
                include_once "config.php";
                //requête d'ajout
                $req = mysqli_query($conn , "INSERT INTO patient VALUES(NULL,'$cin', '$name','$ateenter','$address', '$email','$phone')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: patient.php");
                }else {//si non
                    $message = "Patient not added";
                }

           }else {
               //si non
               $message = "Please fill all the blanks!";
           }
       }
    
    ?>
    <div class="form">
        <a href="patient.php" class="back_btn"><img src="back.png">Back</a>
        <h2>Add A Patient:</h2>
        <p class="error_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="ajouterPatient.php"   method="POST">
           <label >CIN</label>
            <input type="text" id="cin" name="cin" ><br>
            <label >name</label>
            <input type="text" id="name" name="name" ><br>
            <label >Date Enter </label>
            <input type="date" id="Dateenter" name="Dateenter"><br>
            <label >Address</label>
            <input type="text" id="address" name="address"><br>
            <label > Email</label>
            <input type="email" id="email" name="email"><br>
            <label > Phone</label>
            <input type="phone" id="phone" name="phone"><br>
            <input type="submit" value="Add" name="button">
        </form>
    </div>
</body>
</html>