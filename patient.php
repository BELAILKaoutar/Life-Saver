<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
</head>
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
            <li class="list active">
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
            <li class="list">
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
  
</body>
</html>
<?php 
require_once("personne.php");
$liste=Personne::listePersonnes();
?>
     
<table class="table">
<div class="container">
   <?php
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
$filteredList = array_filter($liste, function($patient) use ($searchQuery) {
    return stripos($patient->name, $searchQuery) !== false;
});
?>   
        <a href="addPatient.php" class="Btn_add"><img src="plus.png" >Add</a>
          <tr id="items" id="id01">
            <th>CIN</th>
            <th>name</th>
            <th>DateEnter</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
    <!-- Search bar form -->
    <form action="" method="GET">
        <input type="text" name="search" value="<?= $searchQuery ?>" placeholder="Search by name">
        <button type="submit">Search</button>
    </form>
    <?php foreach ($filteredList as $personne) { ?>
   
                <tr>
                    <td><?=$personne->cin?></td>
                    <td><?=$personne->name?></td>
                    <td><?=$personne->Dateenter?></td>
                    <td><?=$personne->address?></td>
                    <td><?=$personne->email?></td>
                    <td><?=$personne->phone?></td>
                    <!--Nous allons mettre l'id de chaque employé dans ce lien-->
                    <td><a href="updatePatient.php?patient_id=<?=$personne->patient_id?>"><img src="pen.png"></a></td>
                    <td><a onclick="return confirm('Etes vous sur!!?')"  href="deletePatient.php?patient_id=<?=$personne->patient_id?>"><img src="trash.png"></a> </td>     
                </tr>
            <?php } ?>

 
        </table>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>

      </div>
 