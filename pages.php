<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ngoo web design">
    <meta name="keywords" content="HTML, html, CSS, css, JavaScript, javascript, PHP, php , SQL, sql, full-stack kursai, ngoo dizainas, Ngoo dizainas">
    <meta name="author" content="grumin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngoo | index</title>
    <link href="app/css/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c630c8eb00.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="app/css/style.css">
    <link rel="stylesheet" href="app/css/normalize.css">
</head>
<body>
<?php include("app/views/header.php"); ?>
<!-- page content start -->
<?php
    $path = 'app/views/inc/';
    if ($_GET['page']){
        $page = $_GET['page'];
        $display = $path . $page . '.php';
        include($display);
    } else {
        echo 'Welcome to my ngoo dynamic web';
    };
?>
<!-- page content end -->
<?php include("app/views/footer.php"); ?>
</body>
</html>