<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Write A Blog <small>Write a Blog</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Form Elements
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input class="form-control">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Meta Title</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Blog Category</label>
                                                <select class="form-control">
                                                    <option>1</option>
                                                </select>

                                                <div class="form-group">
                                                    <label>Main Image</label>
                                                    <input type="file">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alternate Image</label>
                                                    <input type="file">
                                                </div>
                                                <div class="form-group">
                                                    <label>Summary</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Blog Content</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Blog Tags (separated by Comma)</label>

                                                </div>
                                                <div class="form-group ">
                                                    <label>Blog Path</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">www.nbn.com</span>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Homepage placement</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="">1
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-default">Add Blog</button>

                                        </form>
                                    </div>

                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php include "footer.php" ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
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