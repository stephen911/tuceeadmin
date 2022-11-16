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
                // $id = $getData[0];
                $name = $getData[0];
                $email = $getData[1];
                $contact = $getData[2];
                $lincesed = $getData[3];
                $regnumber = $getData[4];
                $region = $getData[5];
                $district = $getData[6];
                $password = md5($contact);
                $dd = date('jS F, Y');
 
                // If user already exists in the database with the same email
                
                $query = "INSERT INTO users (name,email,contact,lincesed,regnumber,region,district,dateadded,password) VALUES('$name','$email','$contact','$lincesed','$regnumber','$region','$district', '$dd','$password')";

                
                // $query = mysqli_query($conn, "INSERT INTO users (name,email,password,dateadded) VALUES('$name','$email','$password','$dd')");
                // echo "pointsadded";

                // if ($ins){
                //     echo "pointsadded";
                // }else{
                //     echo "failed";
                // }
                $check = mysqli_query($conn, $query);
 
                if ($check)
                {
                    // $ins = mysqli_query($conn, "INSERT INTO users (name,email,password,dateadded) VALUES('$name','$email','$password','$dd')");
                    echo "pointsaddedneat";
                }
                else
                {
                    //  mysqli_query($conn, "INSERT INTO users (name, email, phone, created_at, updated_at, status) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', NOW(), NOW(), '" . $status . "')");
                    echo '<script>alert("Users added successfuly ");
                        window.location="dashboard.php";
                    </script>';
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