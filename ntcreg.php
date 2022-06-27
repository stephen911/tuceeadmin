<?php
include 'functions.php';
include 'yolkpay.php';
$yolk =  new YolkPay();
checker();
$user = users();
//  var_dump($_SESSION['id']);

// if (isset($_POST['btnupdate'])) {
//     extract($_POST);
//     updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard);
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NTC CPD Training</title>

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
                                <li class="breadcrumb-item active">NTC CPD Training</li>
                            </ol>

                            <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">account_box</i>
                                        </div>
                                        <div class="media-body" style="min-width: 180px">
                                            <strong>Set Date</strong>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                            <a class="btn btn-success" href="dashboard.php">Go to Dashboard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <h1 class="h2">Set Certification Date</h1>
                            <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-schname">
                                                <div class="form-row">
                                                    <label id="label-schname" for="schname" class="col-md-3 col-form-label form-label">Date</label>
                                                    <div class="col-md-9">
                                                        <input id="schname" type="text" placeholder="Date" value="<?php echo ($user['nameofschool'] == '') ? '' : $user['nameofschool']; ?>" class="form-control" name="nameofschool">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="page-nav__content">
                                    <button type="submit" name="btnupdate" class="btn btn-success">Save</button>
                                </div>
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

                        
                    </div>
                </div>

            </div>

            <?php include 'sidebar.php'; ?>

            <!-- App Settings FAB -->


        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>


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

    <script src="assets/js/view.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>




    <script src="processor.js"></script>

</body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->

</html>