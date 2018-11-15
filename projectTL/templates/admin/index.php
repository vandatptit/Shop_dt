<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link href="<?php echo URL_BASE . 'templates/admin'; ?>/css/layout.css"  rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>templates/admin/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>templates/admin/css/layout.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<!--        <script src="ckeditor/skins/ckeditor.js" type="text/javascript"></script>-->
        <script src="<?php echo URL_BASE; ?>templates/admin/ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Trang Quản Trị</title>
    </head>
    <body>
        <div class="page-header"><?php require 'templates/admin/header.php'; ?></div>
        <?php require TEMPLATE; ?>
        <div><?php require 'templates/admin/footer.php'; ?></div>
    </body>
</html>
