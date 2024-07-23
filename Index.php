<?php
$text= $_GET['testo'];
$censura=$_GET['censura'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?php echo $text?></h1>
    <p><?php echo strlen($text) ?></p>
    <h1><?php echo str_replace($censura,'***',$text)?></h1>
    <p><?php echo strlen(str_replace($censura,'***',$text)) ?></p>

</body>

</html>