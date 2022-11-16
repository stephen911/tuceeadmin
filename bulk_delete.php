<?php
// include mysql database configuration file
include 'functions.php';
include 'starter.php';

if (isset($_POST['submit'])) {

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
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {

        // Open uploaded CSV file with read-only mode
        $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

        // Skip the first line
        fgetcsv($csvFile);

        // Parse data from CSV file line by line
        // Parse data from CSV file line by line
        while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
            // Get row data
            
            $email = $getData[0];
            $date = $getData[14];
            // $contact = $getData[2];
            // $lincesed = $getData[3];
            // $regnumber = $getData[4];
            // $region = $getData[5];
            // $district = $getData[6];
            // $password = md5($contact);
            // $dd = date('jS F, Y');

            $query = "DELETE
                FROM users
                WHERE id = '" . $getData[0] ."'";
                

            // If user already exists in the database with the same email
            // $query = "DELETE FROM users WHERE email = '" . $getData[1] . "'";

            $check = mysqli_query($conn, $query);

            if ($check) {
                echo '<script>alert("Users deleted successfuly ");
                        window.location="dashboard.php";
                    </script>';
            } else {
                echo '<script>alert("Failed to deleted  user ");
                    window.location="dashboard.php";
                </script>';
            }
        }

        // Close opened CSV file
        fclose($csvFile);

        header("Location: users.php");
    } else {
        echo "Please select valid file";
    }
}
