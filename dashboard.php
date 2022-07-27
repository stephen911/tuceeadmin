<?php
include 'functions.php';
checker();
$user1 = adminusers();
$user = users();
//  var_dump($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">




<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


    <meta name="robots" content="noindex">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap" rel="stylesheet">

    <script src="//code.jquery.com/jquery-3.5.1.js"></script>


    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="//cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script src="////cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>







    <!-- <link rel="icon" href="default/files/assets/images/favicon.ico" type="image/x-icon"> -->
    <!-- Google font-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet"> -->
    <!-- Required Fremwork -->
    <!-- <link rel="stylesheet" type="text/css" href="default/files/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
    <!-- themify-icons line icon -->
    <!-- <link rel="stylesheet" type="text/css" href="default/files/assets/icon/themify-icons/themify-icons.css"> -->
    <!-- ico font -->
    <!-- <link rel="stylesheet" type="text/css" href="default/files/assets/icon/icofont/css/icofont.css"> -->
    <!-- feather Awesome -->
    <!-- <link rel="stylesheet" type="text/css" href="default/files/assets/icon/feather/css/feather.css"> -->
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="default/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="default/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="default/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="default/files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">
    <!-- Style.css -->
    <!-- <link rel="stylesheet" type="text/css" href="default/files/assets/css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="default/files/assets/css/jquery.mCustomScrollbar.css"> -->


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "searching": true,
                "paging": true,
                "order": [
                    [0, "asc"]
                ],
                "ordering": true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],


                "columnDefa": [{
                    "targeta": [3], //column index/
                    "orderable": false
                }],
            });
        });
    </script>









    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/vendor/spinkit.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">


    <style>
        #example th,
        td {
            border: 1px solid grey;
            border-collapse: collapse;
        }
    </style>
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
    <?php include 'navbar.php';
    ?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <h1 class="h2">Dashboard</h1>

                    <div class="card border-left-3 border-left-primary card-2by1">
                        <div class="card-body">
                            <div class="media flex-wrap align-items-center">
                                <div class="media-left">
                                    <i class="material-icons text-muted-light">account_box</i>
                                </div>
                                <div class="media-body" style="min-width: 180px">
                                    Your are welcome Admin!
                                </div>
                                <!-- <div class="media-right mt-2 mt-xs-plus-0">
                                        <a class="btn btn-sm btn-danger"
                                                            href="ntcreg.php">Set Certficate Date</a>
                                        </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h4 class="card-title">Statistics</h4>
                                    <p class="card-subtitle">Your Statistics</p>
                                </div>
                                <!-- <div class="media-right">
                                    <a class="btn btn-sm btn-primary" href="#">Quiz results</a>
                                </div> -->
                            </div>
                        </div>

                        <ul class="list-group list-group-fit mb-0">



                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Total Users</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php countusers(); ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Enrolled Users</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php enrolledusers(); ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Attendance</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php attendedusers(); ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Paid Users</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php countpaidstatus();
                                                                        percentagestatus(); ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Unpaid Users</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php unpaid();
                                                                        unpaidpercentage(); ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Confirmed Users</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php confirmedusers();
                                                                        cpercentage(); ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Unconfirmed Users</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php unconfirmedusers();
                                                                        ucpercentage(); ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a class="text-body" href="#"><strong>Total Amount</strong></a><br>
                                        <!-- <div class="d-flex align-items-center">
                                            <small class="text-black-50 text-uppercase mr-2">Course</small>
                                            <a href="student-take-course.html">Angular in Steps</a>
                                        </div> -->
                                    </div>
                                    <div class="media-right text-center d-flex align-items-center">
                                        <!-- <span class="text-black-50 mr-3">Great</span> -->
                                        <h4 class="mb-0 text-success"><?php totalstatus(); ?></h4>
                                    </div>
                                </div>
                            </li>



                        </ul>
                    </div>

























                    <!-- <div class="col-lg-5">

                                    

                                    <div class="card card-2by1">
                                        <div class="card-header">
                                            <h4 class="card-title">Rewards</h4>
                                            <p class="card-subtitle">Your latest achievements</p>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
                                            <div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
                                            <div class="btn btn-success btn-circle"><i class="material-icons">bubble_chart</i></div>
                                            <div class="btn btn-warning btn-circle"><i class="material-icons">keyboard_voice</i></div>
                                            <div class="btn btn-info btn-circle"><i class="material-icons">event_available</i></div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h4 class="card-title">Forum Activity</h4>
                                                    <p class="card-subtitle">Latest forum topics &amp; replies</p>
                                                </div>
                                                <div class="media-right">
                                                    <a class="btn btn-sm btn-primary"
                                                       href="student-forum.html"> <i class="material-icons">keyboard_arrow_right</i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-fit">

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="default/assets/images/people/50/guy-1.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Luci Bryant</strong></a>
                                                            <small class="ml-auto text-muted">5 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">Am I learning the right way?</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="default/assets/images/people/50/guy-2.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Magnus Goldsmith</strong></a>
                                                            <small class="ml-auto text-muted">7 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="default/assets/images/people/50/woman-1.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Katelyn Rankin</strong></a>
                                                            <small class="ml-auto text-muted">12 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">I think this is the right way?</a>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div> -->
                    <!-- </div> -->


                </div>

            </div>


            <?php include 'sidebar.php'; ?>

            <!-- App Settings FAB -->


        </div>
    </div>


    <!-- <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script> -->

    <!-- jQuery -->
    <!-- <script src="default/assets/vendor/jquery.min.js"></script> -->

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

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

    <!-- Tables -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>






   
    <!-- <-- <i18next.min.js -->
    <!-- <script type="text/javascript" src="default/files/bower_components/i18next/i18next.min.js"></script> -->
    <!-- <script type="text/javascript" -->
    <!-- src="default/files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script> -->
    <!-- <script type="text/javascript" -->
    <!-- src="default/files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script> -->
    <!-- <script type="text/javascript" src="default/files/bower_components/jquery-i18next/jquery-i18next.min.js"></script> -->
    <!-- Custom js -->
    <!-- <script src="default/files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script> -->
    <!-- <script src="default/files/assets/js/pcoded.min.js"></script> -->
    <!-- <script src="default/files/assets/js/vartical-layout.min.js"></script> -->
    <!-- <script src="default/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <!-- <script type="text/javascript" src="default/files/assets/js/script.js"></script> -->















</body>



</html>