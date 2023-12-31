<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/favicon-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="./style/style.css">

    <title>About us</title>
</head>

<body>

    <div class="head-lable-box page-width">
        <?php
    
        include "header.php";
    
        ?>


        <div class="head-lable-text">
            <h1>About us</h1>
            <img class="line-dot-p" src="./imgs/linedot.svg" alt="" >
        </div>
    </div>

    <?php
    
    include "about-section.php";

    ?>

    <?php
    
    include "statics-section.php";

    ?>

    <?php
    
    include "reviews-section.php";

    ?>
    <?php
    
    include "our-clients-section.php";

    ?>

    <?php
    
    include "contact-us-section.php";

    ?>


    <?php
    
    include "footer.php";

    ?>





</body>

</html>