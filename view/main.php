
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="HORY David">

    <link rel="stylesheet" href="./style/header.css" media="screen and (min-width: 890px)">
    <link rel="stylesheet" href="./style/footer.css" media="screen and (min-width: 890px)">
    <link rel="stylesheet" href="./style/main.css" media="screen and (min-width: 890px)">

    <link rel="stylesheet" href="./style/headerPhone.css" media="screen and (max-width: 889px)">
    <link rel="stylesheet" href="./style/footerPhone.css" media="screen and (max-width: 889px)">
    <link rel="stylesheet" href="./style/mainPhone.css" media="screen and (max-width: 889px)">

    <title>PortFolio</title>
</head>
<form method="post">
    <body>
        <?php
            include_once __DIR__.'/header.php';
        ?>
        <div class="line"></div>
        <div class="container">
            <?php
                include_once __DIR__.'/listProject.php';
            ?>
        </div>
        <?php
            include_once __DIR__.'/footer.php'
        ?>
    </body>
</form>
</html>
