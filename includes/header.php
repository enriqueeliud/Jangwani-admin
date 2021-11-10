<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Jangwani Clinic</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="assets/css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

       
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true): ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Administrator</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                </li>

                                <li <?php echo (CURRENT_PAGE == "therapists.php" || CURRENT_PAGE == "add_therapist.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Therapists<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="therapists.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                       
                                    
                                    <li>
                                       
                                    </ul>
                                </li>
                                <li <?php echo (CURRENT_PAGE == "patients.php" || CURRENT_PAGE == "add_patient.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Patients<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="patients.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                    <li>
                                        
                                    </li>
                                    </ul>
                                </li>

                                <li <?php echo (CURRENT_PAGE == "appointments.php" || CURRENT_PAGE == "add_appointment.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-handshake-o fa-fw"></i> Appointments<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="appointments.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                    <li>
                                        
                                    </li>
                                    </ul>
                                </li>

                                 <li <?php echo (CURRENT_PAGE == "rooms.php" || CURRENT_PAGE == "add_room.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-building fa-fw"></i> Rooms<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="rooms.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                    <li>
                                        
                                    </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php endif;?>
           