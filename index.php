<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

<?php
    


$stringa = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam ut similique iusto cupiditate, minus quod maiores. Cupiditate veniam expedita neque vero, at eaque non vel animi ratione delectus suscipit perspiciatis?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam ut similique iusto cupiditate, minus quod maiores. Cupiditate veniam expedita neque vero, at eaque non vel animi ratione delectus suscipit perspiciatis?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam ut similique iusto cupiditate, minus quod maiores. Cupiditate veniam expedita neque vero, at eaque non vel animi ratione delectus suscipit perspiciatis?';

echo $stringa;

echo "<br>";
echo "<br>";

echo strlen($stringa);

echo "<br>";
echo "<br>";

echo str_replace('amet', '***', $stringa);

echo "<br>";
echo "<br>";

echo strlen($stringa);



?>



</body>
</html>