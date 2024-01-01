
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="updateMed.php" method="POST">

<?php
    require_once("med.php");
    $medecin = Medecin::getMedecin($_GET['medecin_id']);
?>
         <h2>Update a Medecin : <?=$medecin->medecin_id?></h2>
              <input type="hidden" name="medecin_id" value="<?=$medecin->medecin_id?>">

             <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Cin</label>
               <input type="CIN" name="CIN"  value="<?=$medecin->CIN?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Name</label>
               <input type="text" name="name" value="<?=$medecin->name?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
               <input type="address" name="address" value="<?=$medecin->address?>"><br>
           </div>      
            <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
               <input type="phone" name="phone" value="<?=$medecin->phone?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText"class="col-sm-2 col-form-label">Specialite</label>
               <input type="text" name="specialite" value="<?=$medecin->specialite?>"><br>
           </div>
           <div class="row mb-3">
           <label for="inputText" class="col-sm-2 col-form-label">Email</label>
           <input type="email" name="email" value="<?=$medecin->email?>"><br>
            </div>  
           <div class="row mb-3">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">Update</button>
             </div>
           </div>
        </form>
    
</body>
</html>