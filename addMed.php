
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
           if(isset($CIN) && isset($name)  && isset($address) && isset($phone) && isset($specialite) && isset($email)){
                //connexion à la base de donnée
                include_once "config.php";
                //requête d'ajout
                $req = mysqli_query($conn , "INSERT INTO medecin VALUES(NULL,'$CIN', '$name','$address','$phone','$specialite', '$email')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: medecin.php");
                }else {//si non
                    $message = "Medecin not added";
                }

           }else {
               //si non
               $message = "Please fill all the blanks!";
           }
       }
    
    ?>

    <div class="form">
        <a href="medecin.php" class="back_btn"><img src="back.png">Back</a>
        <h2>Add A Patient:</h2>
        <p class="error_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="ajouterMed.php"   method="POST">
            <label >CIN</label>
            <input type="CIN" id="CIN" name="CIN" ><br>
            <label >Name</label>
            <input type="text" id="name" name="name" ><br>
            <label >Address</label>
            <input type="text" id="address" name="address"><br>
            <label > Phone</label>
            <input type="phone" id="phone" name="phone"><br>
            <label >Specialite</label>
            <input type="specialite" id="specialite" name="specialite"><br> 
            <label > Email</label>
            <input type="email" id="email" name="email"><br>
            <input type="submit" value="Add" name="button">
        </form>
    </div>
</body>
</html>