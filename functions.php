<?php

// Developer : Frederick  Ennin
// Email : kpin463@gmail.comin
// started on Saturday11 June,2022
// github :https://github.com/dollarstir

function db()
{
    return  'starter.php';
}

function login($email, $password)
{
    include 'starter.php';

    // extract($_POST);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);
    $sel = mysqli_query($conn, "SELECT * FROM cmd WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM cmd WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'loginsuccess';
        } else {
            echo 'Login details not correct';
        }
    } else {
        echo 'loginfailed';
    }
}

function logout()
{
    session_start();
    // session_destroy();
    unset($_SESSION['id']);
    echo '<script>window.location="index.php"</script>';
}

function checker()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
        alert("You need to login");
        window.location="index.php"</script>';
    }
}

function users()
{
    include 'starter.php';
    // session_start();
    $id = $_SESSION['id'];
    
    $d = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}


function upusers()
{
    include 'starter.php';
    // session_start();
    // $id = $_SESSION['id'];
    $id = $_GET['id'];
    
    $d = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard, $tdate, $confirm, $pay)
{
    include 'starter.php';
    // $id = $_GET['id'];
    extract($_POST);
    $up = mysqli_query($conn, "UPDATE users SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref',  heard ='$heard', tdate='$tdate', confirm='$confirm', paystatus='$pay' WHERE id='$id'  ");
    if ($up) {
        echo 'Updated Successfully ';
    } else {
        echo 'Failed to update record . Try again';
    }
}

function confirmuser($id, $confirm)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $conf = mysqli_query($conn, "UPDATE users SET confirm ='$confirm' WHERE id='$id'  ");
    if ($conf) {
        echo 'Participation Confirmed ';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function show($cert)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confi = mysqli_query($conn, "UPDATE users SET cert ='$cert'");
    if ($confi) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function showquiz($quiz)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE users SET quiz ='$quiz'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function showdiscert($discert, $district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE users SET cert ='$discert' WHERE district='$district'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function settdate($tdate, $district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE users SET tdate ='$tdate' WHERE district='$district'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}




function showdisquiz($disquiz, $district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $confiu = mysqli_query($conn, "UPDATE users SET quiz ='$disquiz' WHERE district='$district'");
    if ($confiu) {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update record . Try again';
    }
}


function dispaidstatstotal($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c); 
    echo '<h4 class="mb-0 text-success">Gh¢ '.$count * 70 .'</h4>';
    
}

function dispaidstatspertotal($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM transactions");
    $count2 = mysqli_num_rows($c);
    $tot = $count2 * 70;

    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c) * 70;
    echo '<h4 class="mb-0 text-success">('.round(($count / $tot) * 100 , 2).'%)</h4>';

}

function dispaidstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function dispaidstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">('.round(($count / $count2) * 100 , 2).'%)</h4>';
    // echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function disunpaidstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">'.$val.'</h4>';
    
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}



function disunpaidstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND paystatus='paid'");
    $count = mysqli_num_rows($c);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">('.round(($val / $count2) * 100 , 2).'%)</h4>';
    // echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function disconfstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';

}



function disconfstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $ci = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($ci);
    echo '<h4 class="mb-0 text-success">('.round(($count / $count2) * 100 , 2).'%)</h4>';
}



function disunconfstats($district)
{
    include 'starter.php';
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $ci = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($ci);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">'.$val.'</h4>';
    
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function disunconfstatsper($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district'");
    $count2 = mysqli_num_rows($c);
    $ci = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND confirm='confirmed'");
    $count = mysqli_num_rows($ci);

    $val = $count2 - $count;
    echo '<h4 class="mb-0 text-success">('.round(($val / $count2) * 100 , 2).'%)</h4>';
    // echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function foodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND foodpref='Jollof with chicken'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function countdistrict($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users");
    $count2 = mysqli_num_rows($c);
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    echo '<h4 class="mb-0 text-success">('.round(($count / $count2) * 100 , 2).'%)</h4>';

    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function jpfoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND foodpref='Jollof with chicken' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}




function jcfoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND foodpref='Jollof with chicken' AND confirm='confirmed'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function gafoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND foodpref='Ga-kenkey with Sardine'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function pgafoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND foodpref='Ga-kenkey with Sardine' AND paystatus='paid'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function cgafoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];
    $c = mysqli_query($conn, "SELECT * FROM users WHERE district='$district' AND foodpref='Ga-kenkey with Sardine' AND confirm='confirmed'");
    $count = mysqli_num_rows($c);
    echo '<h4 class="mb-0 text-success">'.$count.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}


function sfoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    echo '<h4 class="card-title">Food Statistics for '.$district.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}

function ssfoodstats($district)
{
    include 'starter.php';
    // $id = $_GET['id'];

    echo '<h4 class="card-title">Statistics for '.$district.'</h4>';
    // if ($confiu) {
    //     echo 'Updated Successfully';
    // } else {
    //     echo 'Failed to update record . Try again';
    // }
}



function register($name, $email, $password)
{
    $password = md5($password);
    include 'starter.php';
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($sel) >= 1) {
        echo 'Sorry User account exist';
    } else {
        $dd = date('jS F, Y');
        $ins = mysqli_query($conn, "INSERT INTO users (name,email,password,dateadded) VALUES('$name','$email','$password','$dd')");

        if ($ins) {
            $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password='$password'");
            $row = mysqli_fetch_array($sel);
            session_start();
            $_SESSION['id'] = $row['id'];
            echo 'registered';
        } else {
            echo 'Registeration failed';
        }
    }
}

function payment($uid, $ref, $amount)
{
    include 'starter.php';
    $dateadded = date('jS F,Y');

    $ins = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$uid','$ref','$amount','$dateadded')");
    $up = mysqli_query($conn, "UPDATE users SET paystatus ='paid' WHERE id ='$uid'");

    if ($ins || $up) {
        // echo''
    }
}

function changepass($id, $password, $newpass)
{
    $password = md5($password);
    $newpass = md5($newpass);
    include 'starter.php';
    $check = mysqli_query($conn, "SELECT * FROM users WHERE password = '$password'");
    if (mysqli_num_rows($check) >= 1) {
        $up = mysqli_query($conn, "UPDATE users SET password = '$newpass' WHERE id ='$id'");
        if ($up) {
            echo 'changepasssuccess';
        } else {
            echo 'Failed to change password';
        }
    } else {
        echo 'Incorrect Password';
    }
}
function transactions()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $sel = mysqli_query($conn, "SELECT * FROM  transactions WHERE uid = '$id'");
    while ($row = mysqli_fetch_array($sel)) {
        echo '<tr>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Transaction Amount</small>
                <a href="student-invoice.php"
                   class="text-body small"><span class="js-lists-values-document">'.$row['amount'].'</span></a>
            </div>
        </td>
        
        <td class="text-center">
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Status</small>
                <i class="material-icons text-success md-18 mr-2">lens</i>
                <small class="text-uppercase js-lists-values-status">paid</small>
            </div>
        </td>
        <td class="text-right">
            <div class="d-flex align-items-center text-right">
                <small class="text-uppercase text-muted mr-2">Date</small>
                <small class="text-uppercase js-lists-values-date">'.$row['dateadded'].'</small>
            </div>
        </td>
    </tr>';
        // code...
    }
}

function registered()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC ');
    while ($row = mysqli_fetch_array($u)) {
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-name">'.$row['name'].'</span>

        </td>

        <td>'.$row['email'].'</td>
        <td>'.$row['contact'].'</td>
        <td><span class="js-lists-values-employee-title">'.$row['region'].'</span></td>
        <td><span class="js-lists-values-employee-district">'.$row['district'].'</span>
        <td>'.$row['tdate'].'</td>
        <td>'.$row['lincesed'].'</td>
        <td>'.$row['nameofschool'].'</td>
        <td><span class="js-lists-values-employee-paid">'.$row['paystatus'].'</span></td>  
        <td>'.$row['confirm'].'</td>

        <td>'.$row['foodpref'].'</td>
        <td>'.$row['heard'].'</td>

        <td>'.$row['dateadded'].'</td>
        <td><button class="btn btn-success payme" id="'.$row['id'].'"><i class="fa fa-money-bill"></i></button></td>      

        <td><a class="btn btn-primary" href="update_user.php?id='.$row['id'].'"><i class="fa fa-edit"></i></a></td>      
        <td><a class="btn btn-danger" href="delete_user.php?id='.$row['id'].'"><i class="fa fa-trash"></i></a></td>      




                                        
    </tr>';
    }
}

function paidusers()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM users WHERE paystatus="paid" ORDER BY id DESC ');
    while ($row = mysqli_fetch_array($u)) {
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-name">'.$row['name'].'</span>

        </td>

        <td>'.$row['email'].'</td>
        <td>'.$row['contact'].'</td>
        <td><span class="js-lists-values-employee-title">'.$row['region'].'</span></td>
        <td><span class="js-lists-values-employee-district">'.$row['district'].'</span>
        <td>'.$row['tdate'].'</td>
        <td>'.$row['lincesed'].'</td>
        <td>'.$row['nameofschool'].'</td>
        <td><span class="js-lists-values-employee-paid">'.$row['paystatus'].'</span></td>  
        <td>'.$row['foodpref'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td><a class="btn btn-success" href="update_user.php?id='.$row['id'].'"><i class="fa fa-edit"></i></a></td>      
        <td><a class="btn btn-danger" href="delete_user.php?id='.$row['id'].'"><i class="fa fa-trash"></i></a></td>      



                                        
    </tr>';
    }
}

function trans()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM transactions ');
    // echo '<td>'.$u.'</td>'
    while ($row = mysqli_fetch_array($u)) {
        $uid = $row['uid'];
        $us = mysqli_query($conn, "SELECT * FROM users WHERE id = '$uid'");
        $rr = mysqli_fetch_array($us);
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-trans">'.$rr['name'].'</span>

        </td>

        
        <td>'.$rr['contact'].'</td>



        <td>'.$row['transid'].'</td>
        <td>'.$row['amount'].'</td>
        <td>'.$row['dateadded'].'</td>
        
    </tr>';
    }
}

function countusers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users');
    $count = mysqli_num_rows($c);
    echo $count;
}


function confirmedusers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users WHERE confirm="confirmed"');
    $count3 = mysqli_num_rows($c);
    echo $count3;
}

function unconfirmedusers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users WHERE confirm="confirmed"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);
    echo $count2 - $count;
}

function cpercentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users WHERE confirm="confirmed"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);
    // echo '('.(number_format((float)$count / $count2, '.', '')) * 100 .'%)';

    echo '('.round(($count / $count2) * 100 , 2).'%)';
}

function ucpercentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users WHERE confirm="confirmed"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);

    $unc = $count2 -$count;
    echo '('.round(($unc / $count2) * 100 , 2).'%)';
}

function countpaid()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    echo $count;
}

function countpaidstatus()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users WHERE paystatus="paid"');
    $count = mysqli_num_rows($c);
    echo $count;
}

function total()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    echo 'Gh¢ '.$count* 70;
}


function totalstatus()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users WHERE paystatus="paid"');
    $count = mysqli_num_rows($c);
    echo 'Gh¢ '.$count* 70;
}


function unpaid()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);
    echo $count2 - $count;
}

function unpaidpercentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);
    $unp = $count2 - $count;
    echo '('.round(($unp / $count2) * 100 , 2).'%)';
}


function percentage()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);
    echo '('.round(($count / $count2) * 100 , 2).'%)';
}

function percentagestatus()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users WHERE paystatus="paid"');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);
    echo '('.round(($count / $count2) * 100 , 2).'%)';
}

function pay($id){
    include 'starter.php';
    $transid  = uniqid('MOMO');
    $dateadded = date('jS F, Y');
    $p = mysqli_query($conn,'UPDATE users SET paystatus = "paid" WHERE id ="'.$id.'"');
    $q = mysqli_query($conn,"INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$id','$transid','70','$dateadded')");

    if($p && $q){
        echo 'payadded';
    }
    else{
        echo 'Failed to add payment';
    }
}