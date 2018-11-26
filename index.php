<?php
require("includes/authenticate.php");

if(isset($_SESSION["sessionPass"]))
    {
    if(($_SESSION["sessionPass"]) == ($_SESSION["sessionUsPas"]))
        { 
            //sessionExpire();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>Department of Computer Science</title>
</head>
<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="">
      <img src="media/cslogo.svg" width="30" height="30" class="d-inline-block align-top" alt="Department of Computer Science Logo">
      Department of Computer Science
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/programmes">Programmes Offered</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/staff">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/clubs">Clubs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/alumni">Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/activity">Department Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/courses">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/undergraduate">Undergraduate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin Forms
          </a>
          <div class="dropdown-menu" aria-labelledby="adminForms">
            <a class="dropdown-item" href="pages/forms/alumni-form">Add Alumni</a>
            <a class="dropdown-item" href="pages/forms/club-form">Add Club</a>
            <a class="dropdown-item" href="pages/forms/courses-form">Add Courses</a>
            <a class="dropdown-item" href="pages/forms/activity-form">Add Department Activity</a>
            <a class="dropdown-item" href="pages/forms/programme-form">Add Programme</a>
            <a class="dropdown-item" href="pages/forms/staff-form">Add Staff &amp; Staff Research</a>
            <a class="dropdown-item" href="pages/forms/undergraduate-form">Add Undergraduate Research</a>
          </div>
        </li>
      </ul>
      <form method="post" class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-danger my-2 my-sm-0" name="logout" type="submit">Logout</button>
      </form>
    </div>
  </nav>

  <div class="parallax">
    <div class="caption">
      <span class="border">Department of Computer Science</span>
    </div>
  </div>

  <div class="py-4 text-center">
    <h1 class="display-4">About Us</h1>
    <p class="lead">The official website for the Department of Computer Science</p>
  </div>

  <div class="parallax2"></div>

  <div class="py-4 text-center">
    <h1 class="display-4">Contact Us</h1>
    <a class="btn btn-primary" href="mailto:csdept@uni.com" role="button"><i class="fas fa-envelope"></i> csdept@uni.com</a>
    <a class="btn btn-primary" href="tel:2222222" role="button"><i class="fas fa-phone"></i> 2222222</a>
  </div>

  <div class="parallax3"></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<i class="fas fa-arrow-up arrow"></i>',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
</body>
</html> 
        
<?php }
  else {
?>
    <script>window.alert("Hmmm Whats up doc?, Try Logging in.");</script> 
<?php
    include ("includes/login.php");
  }
}
else
  {
    if(isset($_POST["nav-login"])) {
      include ("includes/login.php");
    }
    else {
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>Department of Computer Science</title>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="">
      <img src="media/cslogo.svg" width="30" height="30" class="d-inline-block align-top" alt="Department of Computer Science Logo">
      Department of Computer Science
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/programmes">Programmes Offered</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/staff">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/clubs">Clubs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/alumni">Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/activity">Department Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/courses">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/undergraduate">Undergraduate</a>
        </li>
      </ul>
      <form method="post" class="form-inline my-2 my-lg-0 mx-2">
        <button class="btn btn-outline-success my-2 my-sm-0" name="nav-login" type="submit">Login</button>
      </form>
    </div>
  </nav>

  <div class="parallax">
    <div class="caption">
      <span class="border">Department of Computer Science</span>
    </div>
  </div>

  <div class="py-4 text-center">
    <h1 class="display-4">About Us</h1>
    <p class="lead">The official website for the Department of Computer Science</p>
  </div>

  <div class="parallax2"></div>

  <div class="py-4 text-center">
    <h1 class="display-4">Contact Us</h1>
    <a class="btn btn-primary" href="mailto:csdept@uni.com" role="button"><i class="fas fa-envelope"></i> csdept@uni.com</a>
    <a class="btn btn-primary" href="tel:2222222" role="button"><i class="fas fa-phone"></i> 2222222</a>
  </div>

  <!-- <div class="parallax3"></div> -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<i class="fas fa-arrow-up arrow"></i>',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
</body>
</html> 
 
<?php
}
}
?>
