<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    $data = array($name, $email, $age);
    $csv_file = 'data.csv'; // Name of the CSV file
    
    // Append data to the CSV file
    $file = fopen($csv_file, 'a');
    fputcsv($file, $data);
    fclose($file);
    
    echo 'Form submitted successfully!';
}
?>
