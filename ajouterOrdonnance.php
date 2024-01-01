
<?php
include("config.php");

if (isset($_POST['submit'])) {
    $patient = $_POST['patient_id'];
    $medications = isset($_POST['medication']) ? $_POST['medication'] : [];

    // Validate input (ensure patient and medications are selected)
    if (empty($patient) || empty($medications)) {
        echo "Please select a patient and at least one medication.";
        exit;
    }

    // Sanitize input to prevent SQL injection
    $patient = mysqli_real_escape_string($conn, $patient);
    $medication_str = implode(',', array_map('intval', $medications));

    // Perform the insertion
    $sql = "INSERT INTO ordonnance  VALUES (NULL,'$patient', '$medication_str')";

    if (mysqli_query($conn, $sql)) {
        
        echo "Ordonnance added successfully!";
    } else {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
}

mysqli_close($conn);
header("Location: ordonnance.php");

?>
