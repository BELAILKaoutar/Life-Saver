
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
           if(isset($nom) && isset($dosage) && isset($code)){
                //connexion à la base de donnée
                include_once "config.php";
                //requête d'ajout
                $req = mysqli_query($conn , "INSERT INTO medicament VALUES(NULL,'$nom', '$dosage','$code')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: medicament.php");
                }else {//si non
                    $message = "Medication not added";
                }

           }else {
               //si non
               $message = "Please fill all the blanks!";
           }
       }
    
    ?>
    <div class="form">
        <a href="Medication.php" class="back_btn"><img src="back.png">Back</a>
        <h2>Add A Medication:</h2>
        <p class="error_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="ajouterMedicament.php"   method="POST">
           <label >Nom</label>
            <input type="text" id="nom" name="nom" ><br>
            <label >Dosage</label>
            <input type="text" id="dosage" name="dosage" ><br>
            <label >Code</label>
            <input type="text" id="code" name="code" ><br>
            <input type="submit" value="Add" name="button">
        </form>
    </div>
</body>
</html>