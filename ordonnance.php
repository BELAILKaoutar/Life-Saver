

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordonnance</title>
    <link rel="stylesheet" type="text/css" href="patient/patient.css">
</head>
<style>
    .items{
      position: relative;
      right: 40px;
      top: 80px;
    }
    .patient{
        position: relative;
        top: 180px;
    }
    .medicament{
        position: relative;
      right: 40px;
      top: 80px;       
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
                <a href="page1.php">
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

 
require_once("ord.php");
$ordonnances = ordonnance::listeOrdonnances(); 
?>
  <div class="container">
        <table>
        <a href="addOrd.php" class="Btn_add"><img src="plus.png">Ajouter Ordonnance</a>

          <tr id="items" id="id01">
            <th>Patient</th>
            <th>Médicaments</th>
            <th>Génerer Ordonnance</th>
          </tr>
          <?php
                $i=1;
                    foreach($ordonnances as $i=>$ordonnance) {                                     
                  ?>
                <tr>
                    <td><?=$ordonnance->patient_id?></td>
                    <td><?=$ordonnance->id_med?></td>

                    <td><a  href="GenerateOrdonnance.php?id=<?=$ordonnance->id?>"><ion-icon name="id-card-outline">Génerer Ordonnance</ion-icon> </a></td>
      
                <?php


               
             }
         ?>
        </table>
        

</div>



</div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>

 