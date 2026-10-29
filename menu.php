<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe POS | Menu</title>
</head>

<body>
  <?php 
    $total = 0;

    $menu = [
      ["name" => "Biscoff Latte", "price" => 190],
      ["name" => "Spanish Latte", "price" => 150],
      ["name" => "Iced Americano", "price" => 120]
    ];

    // foreach ($menu as $item) {
    //   echo "Name: {$item["name"]} Price: {$item["price"]} <br>";
    // }


    foreach ($menu as $item) {
      $total += $item["price"];
    }

    echo $total;
  ?>
</body>

</html>