<?php 
  /* Facebook : อดิเทพ เทศเทียน /*
  /* Tel : 063-163-1368 /*
  /* Line : Aditep2541 /*
  /* Date : 25/01/63 */ 
session_start();

include "../function/database.php";

if(empty($_SESSION['user'])){
	// include $_SERVER['DOCUMENT_ROOT'].'login.php';
  echo "YourLogin";
  header("location:../index.php");
	exit();
}else{
	$Query = query("SELECT * FROM user WHERE user = ?",array($_SESSION['user']));
	$Acc = $Query->fetch();
  $Query1 = query("SELECT * FROM setting WHERE id = ?",array('1'));
  $Acc1 = $Query1->fetch();
}
if($Acc['rank']!="admin"){
  echo "No_Admin";
	exit();
}
?>
<?php 
function getwin_sagame($user){
$q = query("SELECT * FROM statisctic_sagame WHERE user = ? AND result = 'win'",array($user));
return $q->rowCount();
}
function getlose_sagame($user){
$q = query("SELECT * FROM statisctic_sagame WHERE user = ? AND result = 'lose'",array($user));
return $q->rowCount();
}
?>
<?php 
function getwin_sexy($user){
$q = query("SELECT * FROM statisctic_sexy WHERE user = ? AND result = 'win'",array($user));
return $q->rowCount();
}
function getlose_sexy($user){
$q = query("SELECT * FROM statisctic_sexy WHERE user = ? AND result = 'lose'",array($user));
return $q->rowCount();
}
?>
<?php 
function getwin_wm($user){
$q = query("SELECT * FROM `statisctic_wm` WHERE user = ? AND result = 'win'",array($user));
return $q->rowCount();
}
function getlose_wm($user){
$q = query("SELECT * FROM `statisctic_wm` WHERE user = ? AND `result` = 'lose'",array($user));
return $q->rowCount();
}
?>
<?php 
function getwin_dg($user){
$q = query("SELECT * FROM statisctic_dg WHERE user = ? AND result = 'win'",array($user));
return $q->rowCount();
}
function getlose_dg($user){
$q = query("SELECT * FROM statisctic_dg WHERE user = ? AND result = 'lose'",array($user));
return $q->rowCount();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
  <!-- Datatable JS -->
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!-- Datatable CSS -->
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <title>xxxxx | Backend</title>

  <style>
    h2,
    h1,
    h3,
    body,
    span,
    div {
      font-family: 'Kanit', sans-serif !important;
    }

    body {
      background-size:cover!important;
      background: linear-gradient(rgba(57, 6, 9, 0.96), rgba(57, 6, 9, 0.99)),url(https://previews.123rf.com/images/hobbitfoot/hobbitfoot1709/hobbitfoot170900696/85929960-big-win-slots-777-banner-casino-on-the-red-background-vector-illustration.jpg);
}

    .baccarat-color {
      background: linear-gradient(to bottom, #5d5b5b 0%, #181818 100%);
    }

    .baccarat-color-light {
      background-color: #ff98007a !important;
    }

    .font14 {
      font-size: 14px !important;
    }

    .navbar {
      padding: 0 0 10px 20px;
      min-height: 40px;
      background-color: rgba(0, 0, 0, 0);
      background-image:  url(../img/frame2.png);
      background-repeat: no-repeat, no-repeat;

    }

    a {
      color: #FFF !important;
    }

    .a2 {
      color: #FFF !important;
    }

    .a2:hover {
      color: #FFF !important;
    }

    .sagame {
      height: 100%;
      background-image: url('../img/sagame.png');
      background-repeat: no-repeat;
      background-size: 85% 75%;
      background-position: center center;
      padding-right: 4%
    }

    .tab {
      background-image: url('../img/line_.png');
      background-repeat: no-repeat;
      background-size: 2px 100%;
      background-position: center left;
      height: 100%;
      position: relative;
    }

    .frame-casino {
      padding: 2%;
      background-size: 100% 100%;
      border-radius: 10px;
      background-color: rgba(0, 0, 0, 0.3);
    }

    .nav-casino {
      display: inline-block;
      vertical-align: middle;
      font-size: 120%;
      letter-spacing: 2px;
      margin-right: 1em;
      height: 32px;
      background-color: black;
      border-radius: 5px;
      padding: 1px;
      margin-top: 5px
    }

    .casino-side {
      position: fixed;
      bottom: 20px;
      left: 20px;
    }

    .btn-side {
      color: #ebd876;
      background: #300e05;
      border: 1.5px solid #c09d3e;
      border-radius: 50px 50px;
    }

    .btn-side:hover {
      color: #fff;
      background: #c09d3e;
      border: 1.5px solid #c09d3e;
      border-radius: 50px 50px;
    }

    hr.style {
      border: 0;
      height: 1px;
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), #fff, rgba(0, 0, 0, 0));
      background-image: -moz-linear-gradient(left, #fff, rgba(0, 0, 0, .75), rgba(0, 0, 0, 0));
      background-image: -ms-linear-gradient(left, #fff, #fff, rgba(0, 0, 0, 0));
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, .75), rgba(0, 0, 0, 0));
    }

    .casino-card {
      background: linear-gradient(to right, #38060a 0%, #5c0a10 100%);
    }

    .casino-card::after {
    position: absolute;
    top: -3.5px; bottom: -3.5px;
    left: -3.5px; right: -3.5px;
    background: linear-gradient( #b68933 , #d1c051);
    content: '';
    z-index: -1;
    border-radius: 10px;
}

    .table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
}
.swal2-popup {
background: rgba(10, 10, 10,0.8) !important;
border: solid 1px #a67a2e;
}
.swal2-title {
color: #fffb80 !important;
}
.swal2-content {
color: #fffb80 !important;
}
.swal2-confirm {
background: #E4BA42 !important;
color: black !important;
background-image: linear-gradient(to bottom, #ae8e3f, #fdf0bc, #ae8e3f) !important;
}
.swal2-icon.swal2-error [class^=swal2-x-mark-line] {
    display: block;
    position: absolute;
    top: 2.3125em;
    width: 2.9375em;
    height: .3125em;
    border-radius: .125em;
    background-color: #fffb80  !important;
}
.swal2-icon.swal2-error {
    border-color: #fffb80  !important;
}
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top p-2 font14">
    <a class="navbar-brand" href="javascript: window.history.back();"><img src="<?php echo $Acc1["logo"] ?>" height="80"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a>
            <span class="nav-casino"><img src="../img/user.png" style="height:25px;">&nbsp; <?= $_SESSION['user'] ?> &nbsp; </span>
          </a>
        </li>
        <a data-toggle="modal" data-target="#redeemcode"><span class="nav-casino"><img src="../img/bitcoin.png" style="height:25px;">&nbsp; <span class="text-white">0.00 &nbsp; </span></span></a>
<!--         <li class="nav-item">
          <a data-toggle="modal" data-target="#redeemcode" style="margin-right: 1em;">
            <img src="../img/refill.png" style="height:32px;margin-top: 5px">
          </a>
        </li> -->
        <li class="nav-item">
          <a href="javascript: logout();" style="margin-right: 1em;">
            <img src="img/logout.png" style="height:32px;margin-top: 5px">
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-bottom p-1 font14">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav nav-flex-icons" style="margin:0 auto;">
      <li class="nav-item">
          <a style="margin-right: 1em;" href="?page=home">
            <img src="../img/m_home.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li>
      <li class="nav-item">
          <a style="margin-right: 1em;" href="?page=m_user">
            <img src="../img/m_user.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li>
        <li class="nav-item">
<!--           <a style="margin-right: 1em;" href="?page=m_formula_sagame">
            <img src="../img/m_formula.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li>
        <li class="nav-item">
          <a style="margin-right: 1em;" href="?page=m_formula_sexy">
            <img src="../img/m_formula.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li>
        <li class="nav-item">
          <a style="margin-right: 1em;" href="?page=m_formula_wm">
            <img src="../img/m_formula.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li>
        <li class="nav-item">
          <a style="margin-right: 1em;" href="?page=m_formula_dg">
            <img src="../img/m_formula.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li>
        <li class="nav-item">
          <a style="margin-right: 1em;" href="?page=m_formula_venus">
            <img src="../img/m_formula.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li> -->
        <li class="nav-item">
          <a style="margin-right: 1em;" href="?page=m_redeemcode">
            <img src="../img/m_code.png?v=0.5" style="height:42px;margin-top: 5px">
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <?php
  error_reporting(0);

  switch ($_GET["page"]) {
    case 'home':
      require("page/home.php");
      break;
    case 'm_user':
      require("page/m_user.php");
      break;
    case 'm_formula_sagame':
      require("page/m_formula_sagame.php");
      break;
    case 'm_formula_sexy':
      require("page/m_formula_sexy.php");
      break;
    case 'm_formula_wm':
      require("page/m_formula_wm.php");
      break;
    case 'm_formula_dg':
      require("page/m_formula_dg.php");
      break;
    case 'm_formula_venus':
      require("page/m_formula_venus.php");
      break;
    case 'm_formula_allbet':
      require("page/m_formula_allbet.php");
      break;
    case 'm_formula_gclub':
      require("page/m_formula_gclub.php");
      break;
    case 'm_formula_ebet':
      require("page/m_formula_ebet.php");
      break;
    case 'm_formula_asia':
      require("page/m_formula_asia.php");
      break;
    case 'm_formula_bggaming':
      require("page/m_formula_bggaming.php");
      break;
    case 'm_redeemcode':
      require("page/m_redeemcode.php");
      break;
    case 'm_adduser':
      require("page/m_adduser.php");
      break;
    case 'm_setting':
      require("page/m_setting.php");
      break;

    default:
      require("page/home.php");
      break;
  }
  ?>
<br><br><br><br>
  <script>

    $(document).ready(function() {
      $("#register").click(function() {

            $.ajax({
               type: "POST",
               url: "../ajax/adduser.php",
               data: $('#register_form').serialize(),
               success: function(data) {
              alert(data.status,data.title,data.info,data.href);
               }
             });


        });
    });

    $(document).ready(function() {
      $("#btn_setting").click(function() {

            $.ajax({
               type: "POST",
               url: "../ajax/setting.php",
               data: $('#setting_form').serialize(),
               success: function(data) {
                alert(data.status,data.title,data.info,data.href);
               }
             });


        });
    });

    function alert(status,title,text,href){
      Swal.fire({
  type: status,
  title: title,
  text: text,
  confirmButtonText: "ตกลง",
  cancelButtonText: "ยกเลิก",
}).then(function() {
    // Redirect the user
  if(href === ""){

  }else{
    window.location.href = href;
  }

    });
    }
function logout(){
  Swal.fire({
  title: 'คุณแน่ใจมั้ย?',
  text: "ที่จะออกจากระบบ!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: "ตกลง",
  cancelButtonText: "ยกเลิก",
}).then((result) => {
  if (result.value) {
       $.get("../ajax/logout.php")
  .done(function( data ) {
Swal.fire(
      'สำเร็จ!',
      'ออกจากระบบแล้ว',
      'success'
    ).then(function() {
    window.location.href = "./";

    });
  });

  }
})
}    
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>