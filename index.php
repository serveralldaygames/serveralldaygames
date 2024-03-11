<?php
require_once("./system/system.class.php");
session_start();
$system = new System();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,regular,500,600,700" rel="stylesheet" />
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1076497177884491897/1160058108517822494/ALLDAYGAMES.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://example.com/fontawesome/v5.15.4/js/conflict-detection.js" data-fa-detection-results-collection-max-wait="3000"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/jquery.js"></script>
</head>
<body>
    <?php
    if (isset($_GET['page'])) {
        try {
            require_once "./pages/" . $_GET['page'] . ".php";
        } catch (\Throwable $th) {
            require_once "./pages/404.php";
        }
    } else {
        require_once "./pages/home.php";
    }

    if (isset($_GET['page']) && $_GET['page'] == "login") {
        require_once('./pages/login.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "additional") {
        require_once('./pages/additional.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "register") {
        require_once('./pages/register.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "paymet") {
        require_once('./pages/paymet.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "logout") {
        require_once('./pages/logout.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "shop") {
        require_once('./pages/shop.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "editpassword") {
        require_once('./pages/editpassword.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "adminhome") {
        require_once('./pages/adminhome.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "download") {
        require_once('./pages/download.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "addstock") {
        require_once('./pages/Stock/addstock.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "delestock") {
        require_once('./pages/delestock.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "editstock") {
        require_once('./pages/editstock.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "setuplogin") {
        require_once('./pages/setuplogin.php');
    }
    if (isset($_GET['page']) && $_GET['page'] == "profile"){
        require_once("./pages/profile.php");
    }
    if (isset($_GET['page']) && $_GET['page'] == "email"){
        require_once("./pages/email.php");
    }
    if (isset($_GET['page']) && $_GET['page'] == "phone"){
        require_once("./pages/phone.php");
    }
    if (isset($_GET['page']) && $_GET['page'] == "movedata") {
        require_once('./pages/movedata.php');
    }
    ?>
    <footer>
        <div class="allday-footer-logos">
            <div class="allday-footer-logo"></div>
            <div data-interaction-id="allday-logo" class="allday-footer-sub-logo">
                <img src="img/LOGONT-ALLDAY.png" alt="ALLDAYGAMES-LOGO">
            </div>
        </div>
        <p class="copyright-text">© สงวนลิขสิทธิ์ตามกฏหมาย 2020-2024 Allday Games, ระบบต่างๆหรือเว็ปไซต์ และโลโก้ใด ๆ<br>
        <span>ที่เกี่ยวข้องถือเป็นเครื่องหมายการค้า เครื่องหมายบริการ และ/หรือเครื่องหมายการค้าจดทะเบียนของ Allday Games.</span>
    </footer>
</body>
<script>
        $(document).ready(function() {
                $('#menuBtn').click(function() {
                    console.log("Mobile menu button clicked!"); // Log to the console for debugging
                    $('#mobileMenu').toggleClass('hidden');
                });
            });
    </script>
    <script type="text/javascript">
        (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
        vgo('setAccount', '478502167');
        vgo('setTrackByDefault', true);

        vgo('process');
    </script>
</html>
