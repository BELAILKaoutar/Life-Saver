<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="GenerateOrdonnance.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script1.js"></script>
</head>

<body>

<button type="button" id="download" class="btn btn-primary" onclick="downloadPDF()">Download PDF</button>

<div id="cadre">
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header" id="pdfContent">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <!-- ... (unchanged code) ... -->
        </header>
        <div class="container-wrapper">
            <div class="container" id="pdfTable">
                <h3>Dr.Belail kaoutar</h3>
                <h3>Médecin Générale</h3>
                <h3>Tél:0522 000 000</h3>
                <h3>Kaoutarbelail12@gmail.com</h3>
            </div>
            <img src="med.jpg" alt="" class="logo">
            <div class="container1">
                <h3>Life Saver</h3>
                <h3>Marrakech</h3>
                <h3>Tél:0522 000 000</h3>
                <h3>LifeSaver@gmail.com</h3>
            </div>      

        </div>
        <div class="titre">
            <h3> Ordonnance Médicale </h3>
        </div>

        <div class="infos ">
            <h4 class="info-item">Fait à : Marrakech Le <?php echo date("d/m/Y") . "<br>"; ?></h4>
            <h4 class="info-item">Nom & Prénom:
                <?php
                include("config.php");
                $id = isset($_GET['id']) ? $_GET['id'] : null;

                if ($id) {
                    $sql = "SELECT patient.name AS patient_name
                            FROM ordonnance
                            JOIN patient ON ordonnance.patient_id = patient.patient_id
                            WHERE ordonnance.id = '$id'";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $patientName = $row['patient_name'];
                        echo $patientName;
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                } else {
                    echo "Invalid ordonnance ID";
                }

                mysqli_close($conn);
                ?>
            </h4>
        </div>
        <div class="background">
            <div class="background-overlay">  </div>
            <div class="content">
            </div>
            <tr style="font-family: 'Freestyle Script', sans-serif; font-size:25px ">
                <img src="med.jpg" alt="" class="background-overlay">
                Les médicaments:
                <br>
                <?php
                include("config.php");
                $id = isset($_GET['id']) ? $_GET['id'] : null;

                if ($id) {
                    $sql = "SELECT id_med
                            FROM ordonnance
                            WHERE id = '$id'";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $idMeds = explode(',', $row['id_med']);

                        foreach ($idMeds as $idMed) {
                            $sqlMed = "SELECT nom
                                        FROM medicament
                                        WHERE id_med = '$idMed'";
                            $resultMed = mysqli_query($conn, $sqlMed);

                            if ($resultMed) {
                                $rowMed = mysqli_fetch_assoc($resultMed);
                                $medicationName = $rowMed['nom'];
                                echo " $medicationName <br> ";
                            } else {
                                echo "Error fetching medication name: " . mysqli_error($conn);
                            }
                        }
                    } else {
                        echo "Error fetching id_med: " . mysqli_error($conn);
                    }
                } else {
                    echo "Invalid ordonnance ID";
                }
                mysqli_close($conn);
                ?>
                <br>
            </tr>
            <div class="signature">
                <img src="Signature.png" alt="" class="signature-image">
            </div>
        </div>
        <div class="adresse">
            <h3>Adresse:Lot Koutoubia, Villa N° 38 et 39 Quartier Amerchich - 40080 Marrakech-Tél:0522 000 000-0522 000 000-LifeSaver@gmail.com</h3>
        </div>

    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
        <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </main>
</div>

<style>
    #view-source {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
    }

    #cadre {
        border: 2px solid #ccc;
        padding: 10px;
        margin: 10px;
        position: relative;
        max-width: 800px;
        margin: auto;
    }

    .background {
        position: relative;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .background-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.1;
        overflow: hidden;
    }

    .content {
        max-height: 500px; /* Adjust the max height as needed */
        overflow: hidden;
    }

    .signature {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 10px;
        margin-top: 400px;
        padding-left: 200px;
    }

    .signature-image {
        max-width: 150px;
    }

    #download {
        position: relative;
        color: #acc6aa;
    }
    .bold-hr{
    height: 3px;
    font-weight: bold;
    color: #19A7CE;
  }
</style>

<script>
    function downloadPDF() {
        var element = document.getElementById('cadre');
        html2pdf(element);
    }
</script>

</body>

</html>
