
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="updateMedicament.php" method="POST">

<?php
    require_once("medicament.php");
    $medicament = Medicament::getMedicament($_GET['id_med']);
?>
         <h2>Update a Medication : <?=$medicament->id_med?></h2>
              <input type="hidden" name="id_med" value="<?=$medicament->id_med?>">

             <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
               <input type="text" name="nom"  value="<?=$medicament->nom?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Dosage</label>
               <input type="text" name="dosage" value="<?=$medicament->dosage?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Code</label>
               <input type="code" name="code" value="<?=$medicament->code?>"><br>
           </div>      
           <div class="row mb-3">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">Update</button>
             </div>
           </div>
        </form>
    
</body>
</html>