<?php
$pages = 'home';
if(isset($_GET['i'])){
     $pages = addslashes($_GET['i']); 
}
    include 'pages/header.php';
    switch ($pages) {
        case 'about_us':
            include 'pages/about_us.php';
            break;
        case 'contact':
            include 'pages/contact.php';
            break;
        case 'location':
            include 'pages/location.php';
            break;
        case 'product1':
            include 'pages/product1.php';
            break;
        case 'product2':
            include 'pages/product2.php';
            break;
        case 'product3':
            include 'pages/product3.php';
            break;
        case 'product4':
            include 'pages/product4.php';
            break;
        case 'product5':
            include 'pages/product5.php';
            break;            
        default:
        include 'pages/home.php';
        break;
}
    include 'pages/footer.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <style> 
            * {
                margin: 0;
                padding: 0;
            }
            .gallery_product{
                margin-bottom: 30px;
            }
            .gallery_product .title{
            color:#fff;
            margin: 0;
            position:relative;
            bottom:40%;
            left:20%;
            }
            .gallery_product .title small{
            display:block;
            }
        </style>
        <title>Donna Doces | Home</title>
    </head>
    <body>    
    </body>
</html>