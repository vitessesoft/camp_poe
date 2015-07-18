<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Camp Poe  | Log in</title>
        <?php include_once './resoures/admin/imports/admin_login_header.php'; ?>

    </head>
    <body class="login-page">

        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b><br>CAMP POE</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg" style="color: red;"><?php
                    if (isset($wrong_login)) {
                        echo $wrong_login;
                    }
                    ?></p>
                <form action="<?php echo base_url(); ?>/index.php/admin/check_login" method="post">
                    <div class="form-group has-feedback">
                        <input name="email" required type="email" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" required class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>
                <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
        <?php include_once './resoures/admin/imports/admin_login_footer.php'; ?>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>