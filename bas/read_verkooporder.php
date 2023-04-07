<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<?php
include ("header.php");
include("conn.php");
include("Verkooporder.php");
?><div class="readContent">
    <div class="readCreate">
        <div class="readCenter">
            <?php
            $verkooporder1 = new Verkooporder();
            $verkooporder1->readStudent();
            ?>
        </div>

    </div>
</div>


</body>
</html>












