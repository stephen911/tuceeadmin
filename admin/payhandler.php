<?php
 include 'functions.php';
 include 'yolkpay.php';
 $yolk =  new YolkPay();

 checker();
 $user = users();
//  var_dump($_SESSION['id']);

if (isset($_GET['ref'])) {
    extract($_GET);

    $uid = $_SESSION['id'];

    payment($uid, $ref, $amount);
    echo  '<script>window.location="payment.php"</script>';
}
?>