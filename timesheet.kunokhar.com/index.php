<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kunokhar Timesheet</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
    <link href="public/css/fontawesome-free-5.12.1-web/css/all.min.css" type="text/css">
</head>
<body>
    <div id="snackbar"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <!-- form card login -->
                        <div class="card shadow">
                            <div class="card-header">
                                <h3 class="mb-0"><img src="public/img/kunokharK.png" style="width: 35px;"> Timesheet Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                    <div class="form-group">
                                        <label for="uname1">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required>
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <button class="btn login-btn btn-lg float-right shadow-sm" id="btnLogin">Login</button>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->
    
                    </div>
    
    
                </div>
                <!--/row-->
    
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->

<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/css/fontawesome-free-5.12.1-web/js/all.min.js"></script>
<script src="public/js/main.js"></script>
</body>
</html>
