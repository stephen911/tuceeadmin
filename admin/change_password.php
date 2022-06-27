<?php
 include 'functions.php';
 include 'yolkpay.php';
 checker();
 $user = users();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Change Password</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


         <meta name="robots" content="noindex">

     <!-- Custom Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">


              <!-- sweetalert -->
              <link type="text/css"
              href="assets/css/sweetalert2.min.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

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
                    <form action="" class="changepass">
                        <div class="row m-0">
                            <div class="col-lg container-fluid page__container">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Password</li>
                                </ol>

                                <h4>Change Password</h4>

                                <!-- <div class="alert alert-light border-1 border-left-3 border-left-primary d-flex">
                                    <i class="material-icons text-success mr-3">check_circle</i>
                                    <div class="text-body">An email with password reset instructions has been sent to
                                        your
                                        email address, if it exists on our system.</div>
                                </div> -->

                                <div class="card">
                                    <div class="list-group list-group-fit">
                                    <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-oldpassword">
                                                <div class="form-row">
                                                    <label id="label-oldpassword" for="oldpassword"
                                                        class="col-sm-3 col-form-label form-label">Old
                                                        password:</label>
                                                    <div class="col-sm-9">
                                                        <div role="group"
                                                            class="input-group input-group-merge form-control-prepended">
                                                            <input id="oldpassword" type="password" required="required"
                                                                placeholder="Old password" aria-required="true"
                                                                class="form-control form-control-prepended" name="password">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <span class="far fa-key"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-password">
                                                <div class="form-row">
                                                    <label id="label-password" for="password"
                                                        class="col-sm-3 col-form-label form-label">New password:</label>
                                                    <div class="col-sm-9">
                                                        <div role="group"
                                                            class="input-group input-group-merge form-control-prepended">
                                                            <input id="password" type="password" required="required"
                                                                placeholder="New password" aria-required="true"
                                                                class="form-control form-control-prepended" name="newpass">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <span class="far fa-key"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-password2">
                                                <div class="form-row">
                                                    <label id="label-password2" for="password2"
                                                        class="col-sm-3 col-form-label form-label">Confirm
                                                        password:</label>
                                                    <div class="col-sm-9">
                                                        <div role="group"
                                                            class="input-group input-group-merge form-control-prepended">
                                                            <input id="password2" type="password" required="required"
                                                                placeholder="Confirm password" aria-required="true"
                                                                class="form-control form-control-prepended" name="repass">

                                                                <input id="" type="hidden" 
                                                                placeholder="Confirm password" aria-required="true"
                                                                class="form-control form-control-prepended" name="id" value="<?php echo $_SESSION['id']; ?>">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <span class="far fa-key"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="page-nav" class="col-lg-auto page-nav">
                                <div data-perfect-scrollbar>
                                    <div class="page-section pt-lg-32pt">
                                        <div class="page-nav__content">
                                            <button class="btn btn-success">Update Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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

        <script src="assets/js/view.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

      

        
    <script src="processor.js"></script>

</body>



</html>