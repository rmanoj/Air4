<!DOCTYPE html>
<html>

<!-- Mirrored from admindesigns.com/stardom/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 28 Apr 2014 10:23:17 GMT -->
<head>
<!-- 
  NOTE: This index page is primarily for demonstrative purposes. 
  dashboard.html is more suitable for use as it has 
  been stripped of added animations 
-->

<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<title><?php if(isset($TITLE)) echo $TITLE;?> - Air4 Communication</title>
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

<!-- Plugin CSS -->
<link rel="stylesheet" type="text/css" href="vendor/plugins/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="vendor/plugins/calendar/fullcalendar.css">
<link rel="stylesheet" type="text/css" href="vendor/plugins/datatables/css/datatables.min.css">
<link rel="stylesheet" type="text/css" href="vendor/plugins/formswitch/css/bootstrap-switch.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">

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
<style type="text/css">
  
.fieldSize
{
  width:70%;
}
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','js/www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46914307-1', 'admindesigns.com');
  ga('send', 'pageview');

</script>
</head>
<!--dashboard index-load-->
<body class="validation-page"> <script> var boxtest = localStorage.getItem('boxed'); if (boxtest === 'true') {document.body.className+=' boxed-layout';} </script>

<!-- Start: Header -->
<header class="navbar navbar-fixed-top">
  <div class="pull-left"> <a class="navbar-brand" href="dashboard.html">
    <div class="navbar-logo"><img src="img/logos/logo-red.png" class="img-responsive" alt="logo"/></div>
    </a> </div>
  <div class="pull-right header-btns">
   <!--  <div class="messages-menu">
      <button type="button" class="btn btn-sm dropdown-animate" data-toggle="dropdown"> <span class="glyphicon glyphicon-comment"></span> <b>4</b> </button>
      <ul class="dropdown-menu checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Recent Messages <span class="pull-right glyphicons glyphicons-comment"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-avatar"><img src="img/avatars/header/2.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Maggie</b> - <small class="text-muted">12 minutes ago</small><br />
                Great work Yesterday!</div>
            </li>
            <li>
              <div class="item-avatar"><img src="img/avatars/header/3.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Robert</b> - <small class="text-muted">3 hours ago</small><br />
                Is the Titan Project still on?</div>
            </li>
            <li>
              <div class="item-avatar"><img src="img/avatars/header/1.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Cynthia</b> - <small class="text-muted">14 hours ago</small><br />
                Don't forget about the staff meeting tomorrow</div>
            </li>
            <li>
              <div class="item-avatar"><img src="img/avatars/header/4.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Matt</b> - <small class="text-muted">2 days ago</small><br />
                Thor Project cancelled, Sorry.</div>
            </li>
          </ul>
        </li>
        <li class="dropdown-footer"><a href="messages.html">View All Messages <i class="fa fa-caret-right"></i> </a></li>
      </ul>
    </div> -->
   <!--  <div class="alerts-menu">
      <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicons glyphicons-bell"></span> <b>3</b> </button>
      <ul class="dropdown-menu checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Recent Alerts <span class="pull-right glyphicons glyphicons-bell"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-icon"><i style="color: #0066ad;" class="fa fa-facebook"></i> </div>
              <div class="item-message"><a href="#">Facebook likes reached <b>8,200</b></a></div>
            </li>
            <li>
              <div class="item-icon"><i style="color: #5cb85c;" class="fa fa-check"></i> </div>
              <div class="item-message"><a href="#">Robert <b>completed task</b> - Client SEO Revamp</a></div>
            </li>
            <li>
              <div class="item-icon"><i style="color: #f0ad4e" class="fa fa-user"></i> </div>
              <div class="item-message"><a href="#"><b>Marko</b> logged 12 hours</a></div>
            </li>
          </ul>
        </li>
        <li class="dropdown-footer"><a href="#">View All Alerts <i class="fa fa-caret-right"></i> </a></li>
      </ul>
    </div> -->
    <!-- <div class="tasks-menu">
      <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicons glyphicons-tag"></span> <b>7</b> </button>
      <ul class="dropdown-menu dropdown-checklist checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Recent Tasks <span class="pull-right glyphicons glyphicons-tag"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-icon"><i class="fa fa-pencil"></i> </div>
              <div class="item-message text-slash"><a>Try Clicking me!</a></div>
              <div class="item-label"><span class="label label-danger">Urgent</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox">
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-phone"></i> </div>
              <div class="item-message text-slash"><a>Contact Client and request Approval</a></div>
              <div class="item-label"><span class="label label-info">Normal</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox">
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-flask"></i> </div>
              <div class="item-message text-slash"><a>Find new Python Developer </a></div>
              <div class="item-label"><span class="label label-success">Completed</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox">
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-facebook"></i> </div>
              <div class="item-message text-slash"><a>Update Facebook Page with Halloween Pictures</a></div>
              <div class="item-label"><span class="label label-primary">In Progress</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox">
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-group"></i> </div>
              <div class="item-message text-slash"><a>Organize next Staff Meeting</a></div>
              <div class="item-label"><span class="label label-success">Completed</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox">
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-plane"></i> </div>
              <div class="item-message text-slash"><a>Interview new applicant</a></div>
              <div class="item-label"><span class="label label-warning">Moderate</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox">
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown-footer"><a href="#">View All Tasks <i class="fa fa-caret-right"></i> </a></li>
      </ul>
    </div> -->
    <div class="btn-group user-menu">
      <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicons glyphicons-user"></span> <b><?php echo $_SESSION['dataCenterSession'];?></b> </button>
      <button type="button" class="btn btn-sm dropdown-toggle padding-none" data-toggle="dropdown"> <img src="img/avatars/header/header-login.png" alt="user avatar" width="28" height="28" /> </button>
     
 
      <ul class="dropdown-menu checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Your Account <span class="pull-right glyphicons glyphicons-user"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-icon"><i class="fa fa-envelope-o"></i> </div>
              <a class="item-message" href="messages.html">Messages</a> </li>
            <li>
              <div class="item-icon"><i class="fa fa-calendar"></i> </div>
              <a class="item-message" href="calendar.html">Calendar</a> </li>
            <li class="border-bottom-none">
              <div class="item-icon"><i class="fa fa-cog"></i> </div>
              <a class="item-message" href="customizer.html">Settings</a> </li>
            <li class="padding-none">
              <div class="dropdown-lockout"><i class="fa fa-lock"></i> <a href="screen-lock.html">Screen Lock</a></div>
              <div class="dropdown-signout"><i class="fa fa-sign-out"></i> <a href="logout.php">Sign Out</a></div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- End: Header --> 
<!-- Start: Main -->


<div id="main"> 
  <!-- Start: Sidebar -->
  <aside id="sidebar">
    <div id="sidebar-search">
      <form role="search">
        <input type="text" class="search-bar form-control" placeholder="Search">
        <i class="fa fa-search field-icon-right"></i>
        <button type="submit" class="btn btn-default hidden"></button>
      </form>
      <div class="sidebar-toggle"> <span class="glyphicon glyphicon-resize-horizontal"></span> </div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        
        <li <?php if(isset($dashboard)) echo "class=\"active\"";?> > 
        <a href="dashboard.php"><span class="glyphicons glyphicons-star"></span>
        <span class="sidebar-title">Dashboard</span></a>
         </li>
   
          <li <?php if(isset($planManagement)) echo "class=\"active\"";?> > 
          <a href="planManagement.php"><span class="glyphicons glyphicons-list"></span>
        <span class="sidebar-title">Manage Plan</span></a>
         </li>

          <li <?php if(isset($customerManagement)) echo "class=\"active\"";?> > 
          <a href="customerManagement.php"><span class="glyphicons glyphicons-user_add"></span>
        <span class="sidebar-title">Add New Customer</span></a>
         </li>

      </ul>
    </div>
  </aside>
  <!-- End: Sidebar --> 