<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
   <meta charset="utf-8" />
   <title><?=$title?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Africacodes" name="author" />
   <link href="<?=base_url()?>pub/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/css/style.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/css/app.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/css/style-responsive.css" rel="stylesheet" />
   <link href="<?=base_url()?>pub/css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index-2.html">
            <img class="center" alt="logo" src="<?=base_url()?>pub/img/logo.png">
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap infoMessage">
    	<div class="valid-error login-error">
        <?php if($message){?>
        <div class="alert alert-error">
        	<button data-dismiss="alert" class="close">×</button>
            <div id="infoMessage"><?php echo $message;?></div>
        </div>
        <?php } ?>
        </div>
    </div>
    <div class="login-wrap" id="loginWrapper">
    	<form method="post" action="<?=base_url()?>login">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
        <div class="metro double-size green">
                <div class="input-append lock-input">
                    <input type="text" class="" name="identity" id="identity" value="<?=$identity["value"]?>" placeholder="Email">
                </div>
        </div>
        <div class="metro double-size yellow">
                <div class="input-append lock-input">
                    <input type="password" class="" name="password" id="password" placeholder="Password">
                </div>
        </div>
        <div class="metro single-size terques login">
                <button type="submit" class="btn login-btn">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>
        </div>
        </form>
        <div class="metro double-size navy-blue ">
            <a href="index-2.html" class="social-link">
                <i class="icon-facebook-sign"></i>
                <span>Facebook Login</span>
            </a>
        </div>
        <div class="metro single-size deep-red">
            <a href="index-2.html" class="social-link">
                <i class="icon-google-plus-sign"></i>
                <span>Google Login</span>
            </a>
        </div>
        <div class="metro double-size blue">
            <a href="index-2.html" class="social-link">
                <i class="icon-twitter-sign"></i>
                <span>Twitter Login</span>
            </a>
        </div>
        <div class="metro single-size purple">
            <a href="index-2.html" class="social-link">
                <i class="icon-skype"></i>
                <span>Skype Login</span>
            </a>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id="remember" name="remember"> Remember Me
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="<?=base_url()?>forgot_password">Forgot Password?</a>
            </div>
        </div>
    </div>
    <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?=base_url()?>pub/js/jquery-1.8.3.min.js"></script>
   <script src="<?=base_url()?>pub/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>pub/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="<?=base_url()?>pub/assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->

</html>