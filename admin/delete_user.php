<?php

include 'starter.php';
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");

if ($del) {
    echo '<script>alert("User deleted successfuly ");
        window.location="users.php";
    </script>';
} else {
    echo '<script>alert("Failed to deleted  user ");
    window.location="users.php";
</script>';
}
