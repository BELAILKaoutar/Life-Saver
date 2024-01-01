  <!--  <php
include 'config.php';
$sql="SELECT patient_id,username,cin,tél,sexe,date_naissance,email FROM patient ";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_assoc($result)){
      //  echo "id:".$row["patient_id"]."-UserName:".$row["username"].."-UserName:".$row["username"]."<br>";

    }
}else{
    echo"0 result ";
}
>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List des patients</h2>
    <div class="container">
        <table>
          <tr id="items" id="id01">
            <th>Username</th>
            <th>CIN</th>
            <th>Tél</th>
            <th>Sexe</th>
            <th>date_naissance</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
          <?php 
             //inclure la page de connexion
             include"config.php"; 
             //requete pour   afficher la liste des employés
             $req=mysqli_query($conn,"SELECT * FROM patient");
             if(mysqli_num_rows($req)==0){
                //s'il n'existe pas d'employé dans la base de données,alors on affiche ce message:
                echo"there are no patients yet add!";
             }else{
              //si non, affichons la liste de tous les employés 
               while($row=mysqli_fetch_assoc($req)){
                ?>
                <tr>
                    <td><?=$row['username']?></td>
                    <td><?=$row['cin']?></td>
                    <td><?=$row['tél']?></td>
                    <td><?=$row['sexe']?></td>
                    <td><?=$row['date_naissance']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['password']?></td>
                    <!--Nous allons mettre l'id de chaque employé dans ce lien-->
                    <td><a href="update.php?patient_id=<?=$row['patient_id']?>">Update</a></td>
                    <td><a href=""></a></td>
      
                <?php


               }
             }
         ?>
        </table>
      </div>
</body>
</html>