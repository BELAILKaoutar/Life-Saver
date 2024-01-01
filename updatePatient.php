
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
</head>
<body>
<form action="updatePat.php" method="POST">

<?php
    require_once("personne.php");
    $patient = Personne::getPatient($_GET['patient_id']);
?>
         <h2>Update a Patient : <?=$patient->patient_id?></h2>
              <input type="hidden" name="patient_id" value="<?=$patient->patient_id?>">

             <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Cin</label>
               <input type="cin" name="cin"  value="<?=$patient->cin?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Name</label>
               <input type="text" name="name" value="<?=$patient->name?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">DateEnter</label>
               <input type="Dateenter" name="Dateenter" value="<?=$patient->Dateenter?>"><br>
           </div>
           <div class="row mb-3">
           <label for="inputText" class="col-sm-2 col-form-label">Address</label>
           <input type="address" name="address" value="<?=$patient->address?>"><br>
            </div>     
           <div class="row mb-3">
           <label for="inputText" class="col-sm-2 col-form-label">Email</label>
           <input type="email" name="email" value="<?=$patient->email?>"><br>
            </div>     
            <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
               <input type="phone" name="phone" value="<?=$patient->phone?>"><br>
           </div>

           <div class="row mb-3">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">Update</button>
             </div>
           </div>
        </form>
    
</body>
</html>