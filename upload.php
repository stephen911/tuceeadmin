<?php
// include mysql database configuration file
include 'functions.php';
include 'starter.php';
 
if (isset($_POST['submit']))
{
 
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {
 
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                // Get row data
                $id = $getData[0];
                $name = $getData[1];
                $email = $getData[2];
                $points = $getData[3];
 
                // If user already exists in the database with the same email
                $query = "SELECT id FROM users WHERE id = '" . $getData[0] . "'";
 
                $check = mysqli_query($conn, $query);
 
                if ($check->num_rows > 0)
                {
                    mysqli_query($conn, "UPDATE users SET points='$points' WHERE id='$id'  ");
                    echo "pointsadded";
                }
                else
                {
                    //  mysqli_query($conn, "INSERT INTO users (name, email, phone, created_at, updated_at, status) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', NOW(), NOW(), '" . $status . "')");
                    echo "pointsfailed";
                }
            }
 
            // Close opened CSV file
            fclose($csvFile);
 
            header("Location: users.php");
         
    }
    else
    {
        echo "Please select valid file";
    }
}

?>