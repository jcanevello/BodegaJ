<!DOCTYPE html>
<html>

    <!-- Mirrored from superhero.phoonio.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2015 06:30:13 GMT -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Bodega Jessica</title>

        <!-- bootstrap -->
        <link href="/BodegaJ/media/css/bootstrap/bootstrap.css" rel="stylesheet" />

        <!-- libraries -->
        <link href="/BodegaJ/media/css/libs/font-awesome.css" type="text/css" rel="stylesheet" />

        <!-- global styles -->
        <link rel="stylesheet" type="text/css" href="/BodegaJ/media/css/compiled/layout.css">
        <link rel="stylesheet" type="text/css" href="/BodegaJ/media/css/compiled/elements.css">

        <!-- this page specific styles -->

        <!-- google font libraries -->
        <link href='../fonts.googleapis.com/cssf58a.css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
            <script src="/BodegaJ/media/js/html5shiv.js"></script>
            <script src="/BodegaJ/media/js/respond.min.js"></script>
        <![endif]-->
        <!--[if lt IE 8]>
            <link href="/BodegaJ/media/css/libs/font-awesome-ie7.css" type="text/css" rel="stylesheet" />
        <![endif]-->

    </head>
    <body id="login-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="login-box">
                        <div class="row">
                            <div class="col-xs-12 clearfix" id="login-box-header">
                                <div class="login-box-header-red"></div>
                                <div class="login-box-header-green"></div>
                                <div class="login-box-header-yellow"></div>
                                <div class="login-box-header-purple"></div>
                                <div class="login-box-header-blue"></div>
                                <div class="login-box-header-gray"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="login-box-inner">
                                    <!-- <img src="/BodegaJ/media/img/logo-login.png" alt="SuperheroAdmin" class="img-responsive" id="login-logo"/> -->
                                    <div id="login-logo">
                                        <img src="/BodegaJ/media/img/logo-login.png" alt=""/> Bodega Jessica
                                    </div>

                                    <form role="form" action="" method="POST">
                                        <?php if(!empty($error)): ?>
                                        <div class="alert alert-danger fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-times-circle fa-fw fa-lg"></i>
                                            <strong>Error!</strong><?php echo $error ?></a>.
                                        </div>
                                        <?php endif ?>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                                        </div>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input type="password" name="contrasena" class="form-control" placeholder="Contraseña">
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12 col-sm-push-6">
                                                <button type="submit" class="btn btn-success col-xs-12">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- global scripts -->
        <script src="/BodegaJ/media/js/jquery.js"></script>
        <script src="/BodegaJ/media/js/bootstrap.js"></script>

        <!-- this page specific scripts -->


        <!-- theme scripts -->
        <script src="/BodegaJ/media/js/scripts.js"></script>

        <!-- this page specific inline scripts -->

    </body>

    <!-- Mirrored from superhero.phoonio.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2015 06:30:18 GMT -->
</html>