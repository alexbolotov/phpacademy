<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>
    <?php

$book[fray] = array("autor" => "Макс Фрай", "style" => "Фэнтези", "book" => "Простые волшебные вещи", "price" => "45.99");
$book[kidruk] = array("autor" => "Максим Кидрук", "style" => "Технотриллер", "book" => "Бот", "price" => "56.99");
$book[london] = array("autor" => "Джек Лондон", "style" => "Приключения", "book" => "Сердца трёх", "price" => "74.99");
                       
        echo '<pre>';               
        print_r($book);
        echo '</pre>';
    ?>
</body>
</html>
