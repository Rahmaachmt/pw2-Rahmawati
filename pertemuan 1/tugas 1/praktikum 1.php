<?php
  $m_fruits = [
    ["name" => "Alpuket", "color" => "Hijau", "stock" => 10, "price" => 80000, "description" => "Alpuket mentega yang lezat"],
    ["name" => "Mangga", "color" => "Hijau", "stock" => 5, "price" => 10000, "description" => "Mangga harum manis yang segar"],
    ["name" => "Durian", "color" => "Kuning", "stock" =>15, "price" => 50000, "description" => "Durian sangat enak dan harum"]
  ];

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
      <?php
        foreach ($m_fruits as $fruit) {
          ?>
          <tr>

          
          <td><?= $fruit["name"] ?></td> 
          <td><?= $fruit["color"] ?></td> 
          <td><?= $fruit["stock"] ?></td> 
          <td><?= $fruit["price"] ?></td> 
          <td><?= $fruit["description"] ?></td> 
          
      </tr>

      <?php
        } 
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>