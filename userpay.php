<?php

include 'starter.php';
echo 'payinit';
$id = $_GET['id'];
// $del = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");
// include 'starter.php';
$transid  = uniqid('MOMO');
$dateadded = date('jS F, Y');
$p = mysqli_query($conn,'UPDATE users SET paystatus = "paid" WHERE id ="'.$id.'"');
$q = mysqli_query($conn,"INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$id','$transid','70','$dateadded')");

if($p && $q){
    echo 'payinit';
}
else{
    echo 'Failed to add payment';
}

// if ($del) {
//     echo '<script>alert("User deleted successfuly ");
//         window.location="users.php";
//     </script>';
// } else {
//     echo '<script>alert("Failed to deleted  user ");
//     window.location="users.php";
// </script>';
//}
