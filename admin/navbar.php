

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

<!-- Header -->

<div id="header"
     data-fixed
     class="mdk-header js-mdk-header mb-0">
    <div class="mdk-header__content">

        <!-- Navbar -->
        <nav id="default-navbar"
             class="navbar navbar-expand navbar-dark bg-primary m-0">
            <div class="container-fluid">
                <!-- Toggle sidebar -->
                <button class="navbar-toggler d-block"
                        data-toggle="sidebar"
                        type="button">
                    <span class="material-icons">menu</span>
                </button>

                <!-- Brand -->
                <a href="dashboard.php"
                   class="navbar-brand">
                    <img src="assets/images/logo/white.svg"
                         class="mr-2"
                         alt="TUCEE Online Registration" />
                    <span class="d-none d-xs-md-block">TUCEE Online Admin Portal</span>
                </a>

                <!-- Search -->
                <!-- <form class="search-form d-none d-md-flex">
                    <input type="text"
                           class="form-control"
                           placeholder="Search">
                    <button class="btn"
                            type="button"><i class="material-icons font-size-24pt">search</i></button>
                </form> -->
                <!-- // END Search -->

                <div class="flex"></div>

                <!-- Menu -->
                <!-- <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="student-forum.php">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="student-help-center.php">Get Help</a>
                    </li>
                </ul> -->

                <!-- Menu -->
                <ul class="nav navbar-nav flex-nowrap">

                    <!-- <li class="nav-item d-none d-md-flex">
                        <a href="student-cart.php"
                           class="nav-link">
                            <i class="material-icons">shopping_cart</i>
                        </a>
                    </li> -->

                    <!-- Notifications dropdown -->
            
                    <!-- // END Notifications dropdown -->
                    <!-- User dropdown -->
                    <li class="nav-item dropdown ml-1 ml-md-3">
                        <a class="nav-link dropdown-toggle"
                           data-toggle="dropdown"
                           href="#"
                           role="button"><img src="assets/images/people/50/tucee_avatar.png"
                                 alt="Avatar"
                                 class="rounded-circle"
                                 width="40"></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a class="dropdown-item"
                               href="student-account-edit.php">
                                <i class="material-icons">edit</i> Edit Account
                            </a>
                            <a class="dropdown-item"
                               href="student-profile.php">
                                <i class="material-icons">person</i> Public Profile
                            </a> -->
                            <a class="dropdown-item"
                               href="logout.php">
                                <i class="material-icons">lock</i> Logout
                            </a>
                        </div>
                    </li>
                    <!-- // END User dropdown -->

                </ul>
                <!-- // END Menu -->
            </div>
        </nav>
        <!-- // END Navbar -->

    </div>
</div>