<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $data = "Name: $name | Email: $email\n";
    $file = 'submissions.txt';

    // Open the file in append mode
    if ($handle = fopen($file, 'a')) {
        // Write the data to the file
        fwrite($handle, $data);
        fclose($handle);
        echo 'Data submitted successfully.';
    } else {
        echo 'Error storing data.';
    }
}
?>