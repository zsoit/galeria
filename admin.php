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
</head>
<body class="page">
    <?php include('./php/nav-admin.php') ?>
    <main id="main__content" class="main page__item">
    <!-- CONTENT -->
    <?php include('./php/home-admin.php') ?>
    <!-- CONTENT -->
    </main>
    <?php include('./layout/footer.php') ?>
    <?php include('./layout/script.php') ?>

</body>

</html>