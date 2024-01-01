<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medecins</title>
    <link rel="stylesheet" type="text/css" href="medecin.css">
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
            <li class="list ">
                <b></b>
                <b></b>
                <a href="patient.php" >
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="nav-item">Patients</span>
                </a>
            </li>
            <li class="list active">
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php 
require_once("med.php");
$liste=MedecinDAO::listeMedecins();
?>
   <div class="container">
        <!--<a href="adds.php" class="Btn_add"><img src="plus.png">Add</a>-->
<?php
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
$filteredList = array_filter($liste, function($medecin) use ($searchQuery) {
    return stripos($medecin->name, $searchQuery) !== false;
});
?>

<table>
    <a href="addMed.php" class="Btn_add"><img src="plus.png">Add</a>
    <tr id="items" id="id01">
        <th>CIN</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Specialite</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <!-- Search bar form -->
    <form action="" method="GET">
        <input type="text" name="search" value="<?= $searchQuery ?>" placeholder="Search by name">
        <button type="submit">Search</button>
    </form>

    <?php foreach ($filteredList as $medecin) { ?>
        <tr>
            <td><?= $medecin->CIN ?></td>
            <td><?= $medecin->name ?></td>
            <td><?= $medecin->address ?></td>
            <td><?= $medecin->phone ?></td>
            <td><?= $medecin->specialite ?></td>
            <td><?= $medecin->email ?></td>
            <td><a href="update.php?medecin_id=<?= $medecin->medecin_id ?>"><img src="pen.png"></a></td>
            <td><a onclick="return confirm('Etes vous sur!!?')"  href="deleteMed.php?medecin_id=<?= $medecin->medecin_id ?>"><img src="trash.png"></a> </td>
        </tr>
    <?php } ?>
</table>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
      </div>
 