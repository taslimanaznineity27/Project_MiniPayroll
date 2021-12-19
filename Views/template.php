<!-- start session variable -->
<?php
session_start();
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HR || PAYROLL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Views/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Views/dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="Views/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="Views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="Views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="Views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="Views/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="Views/dist/js/demo.js"></script> -->
  <!-- <script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script> -->
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
  <!-- Site wrapper -->
  <div class="wrapper">
    <?php
    // session check start 
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'ok') {
      echo '<div class="wrapper">';
      include 'modules/header.php';
      include 'modules/siderbar.php';
      if (isset($_GET["route"])) {
        if (
          $_GET["route"] == 'home' ||
          $_GET["route"] == 'users' ||
          $_GET["route"] == 'companypolicy' ||
          $_GET["route"] == 'companie' ||
          $_GET["route"] == 'locations' ||
          $_GET["route"] == 'department' ||
          $_GET["route"] == 'designations' ||
          $_GET["route"] == 'announcement'||
          $_GET["route"] == 'employeeinfo'||
          $_GET["route"] == 'addemployee'||
          $_GET["route"] == 'viewempprofile'||
          $_GET["route"] == 'empincriment'||
          $_GET["route"] == 'emppromotion'||
          $_GET["route"] == 'empleaveinfo'||
          $_GET["route"] == 'empsalary'||
          $_GET["route"] == 'empmonthsell'||
          $_GET["route"] == 'empatten'||
          $_GET["route"] == 'empattview'||
          $_GET["route"] == 'addcompany'||
          $_GET["route"] == 'adddept'||
          $_GET["route"] == 'addlocation'||
          $_GET["route"] == 'adddesign'
          ||
          $_GET["route"] == 'addannounc' ||
          
          $_GET["route"] == 'logout'
        ) {
          include "modules/" . $_GET["route"] . ".php";
        } else {
          include 'modules/404.php';
        }
      } else {
        include "modules/home.php";
      }
      include 'modules/footer.php';

      echo '</div>';
    } else {
      include "modules/login.php";
    }
    ?>

    <script src="Views/js/template.js"></script>
</body>

</html>