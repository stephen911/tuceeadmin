<?php include 'functions.php';
if (isset($_POST['btnlogin'])) {
    extract($_POST);
    login($email, $password);
}
?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

         <meta name="robots"
              content="noindex">

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

    <body class="login">
        

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">TUCEE Institute of counselling and Technology</h4>
                        <!-- <p class="card-subtitle">Access your account</p> -->
                    </div>
                   
</div>
                
                    
                
                    <div class="avatar avatar-lg">
                        <img src="assets/images/logo/tucee.png"
                             class="avatar-img rounded-circle"
                             alt="TUCEE Online Registration" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="#"
                       class="navbar-brand m-0">TUCEE Online Admin Portal</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Login</h4>
                        <p class="card-subtitle">Access your account</p>
                    </div>
                    <div class="card-body">

                        

                        <form action=""
                              novalidate
                              method="post" class="login">
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Email address</label>
                                <div class="input-group input-group-merge">
                                    <input id="email"
                                           type="email"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Email address" name="email">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Your password</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your password" name="password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit"
                                        class="btn btn-primary btn-block" name="btnlogin">Login</button>
                            </div>
                            <!-- <div class="text-center">
                                <a href="forgot-password.php"
                                   class="text-black-70"
                                   style="text-decoration: underline;">Forgot Password?</a>
                            </div> -->
                        </form>
                    </div>
                    <!-- <div class="card-footer text-center text-black-50">
                        Not registered yet? <a href="signup.php">Register</a>
                    </div> -->
                </div>
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


<script>
    var paymentForm = document.getElementById('paymentForm');

    paymentForm.addEventListener('submit', payWithPaystack, false);

    function payWithPaystack() {
        
        var handler = PaystackPop.setup({
        
            key: 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a', // Replace with your public key
        
            email: '<?php echo $email; ?>',
        
            amount: <?php echo $amount * 100; ?>, // the amount value is multiplied by 100 to convert to the lowest currency unit
        
            currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
        
            firstname: '<?php echo $fname; ?>',
        
            lastname: '<?php echo $lname; ?>',
        
            ref: '<?php echo $myref; ?>', // Replace with a reference you generated
            metadata: {
                custom_fields : 
                    [
                            {
                                display_name: 'Mobile Number',
                                variable_name: 'mobile_number',
                                value:"+233556676471"
                            }
                            
                    
                    ]
            },
        
            callback: function(response) {
        
            //this happens after the payment is completed successfully
        
            var reference = response.reference;
            var fname  = '<?php echo $fname; ?>';
            var lname = '<?php echo $lname; ?>';
            var email = '<?php echo $email; ?>';
            var amount = '<?php echo $amount; ?>';
        
            //   alert('Payment complete! Reference: ' + reference);
            // window.location='success.php?ref='+ reference + '&fname=' + fname + '&lname=' + lname + '&email=' + email + '&amount=' + amount ;
            
            // Make an AJAX call to your server with the reference to verify the transaction
            
                if(response.status == "success"){
                    var myrf = '<?php echo $myref; ?>';
                    var mimi = 'dollar';
                    var formdt = $('#paymentForm')[0]; // You need to use standard javascript object here
                    var formData = new FormData(formdt);
                
                    var opt = {
                        url : "dollar.php?action=paysuccess",
                        type: "post",
                        data:formData ,
                        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                        processData: false,
                        cache:false, // NEEDED, DON'T OMIT THIS

                        success: function(rep){
                        setTimeout(function () { 
                            swal({
                            title: "Success!",
                            text: "<small>You purchase is successfull  </small>",
                            type: "success",
                            html: true,
                            confirmButtonText: "OK"
                            },
                            function(isConfirm){
                            if (isConfirm) {
                                window.location = "profile.php";
                            }
                            }); }, 1000);
                        }
                        
                    }
                    $.ajax(opt);
                
                    

                        
                
                }            
            },
        
            onClose: function() {
        
            alert('Transaction was not completed, window closed.');
        
            },
        
        });
        
        handler.openIframe();
        
        }
</script>


<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="processor.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:20 GMT -->
</html>