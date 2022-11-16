<?php
include 'functions.php';
include 'starter.php';
include 'yolkpay.php';
$yolk = new YolkPay();
checker();
$user1 = adminusers();
$user = users();
//  var_dump($_SESSION['id']);

// if (isset($_POST['btnupdate'])) {
//     extract($_POST);
//     updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard);
// }

// // Yolk mailer
// $mail = new Mail();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Delete Users</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


    <meta name="robots" content="noindex">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">


    <!-- sweetalert -->
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/vendor/spinkit.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">



</head>


<body class=" layout-fluid">

    <div class="preloader">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>

        <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

        <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
    </div>

    <!-- Header Layout -->
    <?php include 'navbar.php'; ?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container p-0">
                    <div class="row m-0">
                        <div class="col-lg container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Delete Users </li>
                            </ol>






                            <h1 class="h2">Delete Users</h1>

                            <!-- activate district cert -->


                            <!-- <form action="" method="POST" class="settdate"> -->
                            <!-- <div class="card"> -->



                            <div class="container">
                                <form action="bulk_delete.php" method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" accept=".csv, .xlsx" class="custom-file-input" id="customFileInput" onchange="javascript:updateList()" value="Select File" aria-describedby="customFileInput" name="file" multiple>
                                            <label id="fileList" class="custom-file-label" >Select file</label>
                                        </div>
                                        <!-- <div id="fileList"></div> -->
                                        <div class="input-group-append">
                                            <input type="submit" name="submit" value="Delete" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- </div> -->


                            <!-- <div class="page-nav__content">
                                    <button type="submit" name="btnupdate" class="btn btn-success">upload Users</button>
                                </div> -->



                            <!-- </form> -->

                            <!-- <form action="" method="post">

                            <div class="page-nav__content"  style="display: inline;">
                                    <button type="submit" name="btnupdate" class="btn btn-success">Confirm Participation</button>
                                </div>
                            </form> -->

                            <!-- <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">credit_card</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <small>Please we humbly entreat you to make payment right away to book your seat. Please call +233 246 535 961 when you have successfully made payment. Thank you</small>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> -->


                            <div class="card">
                                <div class="list-group list-group-fit">
                                    <div class="col-sm-9">
                                        <div role="group" class="input-group input-group-merge form-control-prepended">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="page-nav" class="col-lg-auto page-nav">
                            <div data-perfect-scrollbar>
                                <div class="page-section pt-lg-32pt">
                                    <ul class="nav page-nav__menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active">Delete Users </a>
                                        </li>

                                        <!-- activate certification -->
                                        <!-- <li class="nav-item">
                                            <a href="certification.php" class="nav-link">Certification</a>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                                    <a href="student-account-edit-profile.html"
                                                       class="nav-link">Profile &amp; Privacy</a>
                                                </li> -->
                                    </ul>
                                    <!-- <div class="page-nav__content">
                                                <button class="btn btn-success">Submit</button>
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include 'sidebar.php'; ?>

            <!-- App Settings FAB -->


        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>
    <script>
        function setfilename(val) {
            var fileName = val.substr(val.lastIndexOf("\\") + 1, val.length);
            document.getElementById("customFileInput").value = fileName;
        }

    </script>

    <script>

updateList = function() {
  var input = document.getElementById('customFileInput');
  var output = document.getElementById('fileList');

  output.innerHTML = '<ul>';
  for (var i = 0; i < input.files.length; ++i) {
    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
  }
  output.innerHTML += '</ul>';
}
    </script>


    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>


    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/dom-factory.js"></script>
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/regions.js"></script>

    <!-- <script src="assets/js/view.js"></script> -->

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>




    <script src="processor.js"></script>

</body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->

</html>