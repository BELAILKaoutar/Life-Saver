
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="page1.css">
</head>
<style>
    .items{
      position: relative;
      right: 40px;
      top: 80px;
    }
    .medicament{
        position: relative;
      right: 40px;
      top: 80px;       
    }
    .patient{
        position: relative;
        top: 80px;
     }
     .med{
        position: relative;
        top: 120px;
     }
     #submit{
        position: relative;
        top: 190px;
        color: #acc6aa;
     }
</style>
<body>
    <div class="navigation">
        <ul>
            <li><a href="#" class="logo">
                <img src="logoSanté.png">
              </a></li>
            <li class="list ">
                <b></b>
                <b></b>
                <a href="page1.php"   >
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li class="list ">
                <b></b>
                <b></b>
                <a href="patient.php" >
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="nav-item">Patients</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="medecin.php" >
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="nav-item">Medecins</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="Medication.php" >
                    <span class="icon"><ion-icon name="ban-outline"></ion-icon></span>
                    <span class="nav-item">Medicaments</span>
                </a>
            </li>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="ordonnance.php" >
                    <span class="icon"><ion-icon name="id-card-outline"></ion-icon></span>
                    <span class="nav-item">Ordonnances</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a  href="logout.php">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="nav-item">Sign Out</span>
                </a>
            </li>
             <div class="indicator"></div>
        </ul>
    </div>
<div class="main">
   <div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-circle-outline" class="close"></ion-icon>
    </div>

    <?php 
require_once("personne.php");
$patients = Personne::listePersonnes(); // Use a different variable name

require_once("medicament.php");
$medications = Medicament::listeMedicaments(); // Use a different variable name
 ?>

<div class="medicament">
<form action="ajouterOrdonnance.php" method="POST">
        <h3 class="patient">Choisir votre patient:</h3>
        <label class="patient">Patient:</label>
        <select class="patient" name="patient_id" id="patient_id">
            <option value="">Please choose your Patient</option>
            <?php foreach ($patients as $personne) { ?>
                <option name="patient" value="<?= $personne->patient_id ?>"><?php echo $personne->name; ?></option>
            <?php } ?>
        </select>
        <br>
        <table class="table">
        <h3 class="med">Choisir les médicaments:</h3>
            <thead class="med">
                <tr>
                    <th class="column" scope="col"></th>
                    <th  class="column" scope="col">Name</th>
                </tr>
            </thead>
            <tbody class="med">
                <?php
                foreach ($medications as $medication) {
                ?>
                    <tr>
                        <td>
                            <input  type="checkbox" name="medication[]" value="<?= $medication->id_med ?>">
                        </td>
                        <td class="name-cell"><?= $medication->nom ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
      <button id="submit" type="submit" value="Ajouter Ordonnance" name="submit"> Ajouter Ordonnance</button>
      
    </form>

     
</div>
    </div>  

</div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

 