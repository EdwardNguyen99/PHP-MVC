
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALO SHOP </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
      
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
    include '../controller/controller.php';
    foreach($games as $title =>$game):
      echo 'Title:'.$game->$title;
    endforeach;
    ?>
    <?php require "view/header.php" ?>
    <?php require "view/nav.php"?>
    <?php require "view/section.php"?>
    <?php require "view/footer.php"?>
    <div id="copy-right">
      <div class="container"> Copyright 2020 NgThLuat Co ., LTD .ALL RIGHT RESERVED</div>
    </div>
</body>
</html>

