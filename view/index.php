<!DOCTYPE html>
<html>

<!-- Mirrored from admindesigns.com/stardom/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 28 Apr 2014 10:25:31 GMT -->
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<title>Stardom - A Responsive HTML5 Admin UI Template Theme</title>
<meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
<meta name="description" content="Stardom - A Responsive HTML5 Admin UI Template Theme">
<meta name="author" content="Holladay">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font CSS  -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700">

<!-- Core CSS  -->
<link rel="stylesheet" type="text/css" href="css/netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/glyphicons_pro/glyphicons.min.css">

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="css/theme.css">
<link rel="stylesheet" type="text/css" href="css/pages.css">
<link rel="stylesheet" type="text/css" href="css/plugins.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- Boxed-Layout CSS -->
<link rel="stylesheet" type="text/css" href="css/boxed.css">

<!-- Demonstration CSS -->
<link rel="stylesheet" type="text/css" href="css/demo.css">

<!-- Your Custom CSS -->
<link rel="stylesheet" type="text/css" href="css/custom.css">

<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body class="login-page"> 
  <script>
   var boxtest = localStorage.getItem('boxed');
   if (boxtest === 'true'){
    document.body.className += 'boxed-layout';
   } 
  </script>
 
<!-- Start: Main -->
<div id="main">
  <div class="container">
    <div class="row">
      <div id="page-logo"> <img src="img/logos/logo-red.png" class="img-responsive" alt="logo"> </div>
    </div>
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-title"> <span class="glyphicon glyphicon-lock"></span> Login </div>
          <!-- <span class="panel-title-sm pull-right padding-right-sm">Not <b>Cynthia Blue?</b></span>
         -->

           </div>
        <form class="cmxform" id="altForm" method="post">
          <div class="panel-body">
       <!--      <div class="login-avatar">
             <img src="img/avatars/login.png" width="150" height="112" alt="avatar"> 
           </div> -->
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                <input type="text" class="form-control phone" maxlength="10" autocomplete="off" name="username" placeholder="User Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span> </span>
                <input type="password" class="form-control product" maxlength="10" autocomplete="off" name="password" placeholder="Password">
              </div>
            </div>
            
            <?php if(isset($_GET['login'])):?>
            <div class="alert alert-warning login-alert">
              <?php if($_GET['login'] === "ulos") echo "User logged out successfully. Please <strong>Login</strong> to continue";?>
            
              <?php if($_GET['login'] === "iup") echo "Invalid username or password </strong>!</strong>";?>

            </div>
           <?php endif?>
          </div>
          <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"><a> Forgotten Password?</a></span>
            <div class="form-group margin-bottom-none">
              <input class="btn btn-primary pull-right" type="submit" name="loginForm" value="Login" />
              <div class="clearfix"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End: Main --> 

<!-- Core Javascript - via CDN --> 
<script src="js/ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="js/ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> 
<script src="js/netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> <!-- Theme Javascript --> 
<script type="text/javascript" src="js/uniform.min.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/custom.js"></script> 
<script type="text/javascript">

jQuery(document).ready(function() {

  // Init Theme Core    
  Core.init();   
  
});

</script>
</body>


<!-- Mirrored from admindesigns.com/stardom/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 28 Apr 2014 10:25:31 GMT -->
</html>
