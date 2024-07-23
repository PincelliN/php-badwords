<?php
$text= $_POST['testo'];
$censura=$_POST['censura'];

$text_cen=str_replace($censura,'***',$text);



$array=['io','tu','egli'];
echo '<pre>';
var_dump($array);
echo '</pre>';
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
    <h1><?php echo $text_cen?></h1>
    <p><?php echo strlen($text_cen) ?></p>

</body>

</html>