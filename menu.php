<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe POS | Menu</title>
</head>

<body>
  <?php 
    $conn = mysqli_connect("localhost", "root", "", "cafe-pos");
    if (!$conn) { die("Connection failed"); }
    $result = mysqli_query($conn, "SELECT * FROM menu_items");

    while($row = mysqli_fetch_assoc($result)) {
      echo "Name: {$row["name"]} Price: {$row["price"]} <br>";
    }

    // $menu = [
    //   ["name" => "Biscoff Latte", "price" => 190],
    //   ["name" => "Spanish Latte", "price" => 150],
    //   ["name" => "Iced Americano", "price" => 120]
    // ];

    // foreach ($menu as $item) {
    //   echo "Name: {$item["name"]} Price: {$item["price"]} <br>";
    // }
  ?>
</body>

</html>