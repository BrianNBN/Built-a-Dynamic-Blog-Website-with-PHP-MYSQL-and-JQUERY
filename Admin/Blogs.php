<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Blog Categories</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <?php include "header.php";
        include "sidebar.php"  ?>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Blog Categories
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">

                                <!-- /. PAGE WRAPPER  -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        All Blogs
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Views</th>
                                                        <th>Blog Path</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <button>view</button>
                                                            <button>Edit</button>
                                                            <button>Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End  Kitchen Sink -->
                            </div>
                            <!-- /. WRAPPER  -->
                            <!-- JS Scripts-->
                            <!-- jQuery Js -->
                            <script src="assets/js/jquery-1.10.2.js"></script>
                            <!-- Bootstrap Js -->
                            <script src="assets/js/bootstrap.min.js"></script>
                            <!-- Metis Menu Js -->
                            <script src="assets/js/jquery.metisMenu.js"></script>
                            <!-- Custom Js -->
                            <script src="assets/js/custom-scripts.js"></script>


</body>

</html>