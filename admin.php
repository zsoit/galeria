<!DOCTYPE html>
<html lang="pl">
<head>
    <?php include('./layout/head.php') ?>
    <title>Admin Panel ZSOiT</title>
    <style>
    .menu__btn::after {
    content: 'Admin Panel ZSOiT';}
    .ipHost::before{
        content: 'Host: ';
    }
    </style>
    <link rel="stylesheet" href="src/css/admin.css">
</head>
<body class="page">
    <?php include('./layout/nav-admin.php') ?>
    <main id="main__content" class="main page__item">
    <!-- CONTENT -->
    <div class="AdminContanier">
        <div id="infoClient">
            <fieldset>
            <legend>Aktualna sesja </legend>
                <p>Użytkownik: Eugeniusz</p>
                <p>Grupa: Admin</p>
                <p class="infoOS"></p>
                <p class="infoBrowser"></p>
                <p class="infoScreen"></p>
                <p id="ip" class="ipHost"></p> <center>
                <img src="images/basic-logo-zsoit.png" width="90"> </center>
            </fieldset>
        </div>
        <div id="infoClient">
            <fieldset>
                <legend>Serwer WWW</legend>
                <div class="iconWWW" style="margin-left: 10px; padding:  17px ">
                    <i class="icon-debian" style="color: red; font-size: 45px; "></i>
                    <i class="icon-apache" style="color: white; font-size: 45px; "></i>
                    <i class="icon-php" style="color: lightblue; font-size: 45px; "></i>
                    <i class="icon-mysql" style="color: yellow; font-size: 45px; "></i>
                    <i class="icon-shell" style="color: green; font-size: 45px; "></i>
                </div>
                <p>System: Debian GNU/Linux 10 (buster) i686</p>
                <p>Kernel: 4.19.0-11-686-pae</p>
                <p>Shell: bash 5.0.3</p>
                <p>CPU: Intel Xeon 3.20GHz (4) @ 3.198GHz</p>
                <p>GPU: AMD ATI Rage XL PCI </p>
                <p>RAM: 3869MiB</p>
                <p>Apache/2.4.38 & PHP 7.3.19 & mySQL 14.14 </p>
            </fieldset>
        </div>
        

    </div>

    <!-- CONTENT -->
    </main>
    <?php include('./layout/footer.php') ?>
    <?php include('./layout/script.php') ?>

</body>

</html>