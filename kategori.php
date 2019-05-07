<?php 
  $file = "data-game.json";
  $game = file_get_contents($file);
  $data = json_decode($game, true);

//   print_r($data);
  foreach($data as $row){
    echo $row['id']."<br>";
    echo $row['judul']."<br>";
    echo $row['rating']."<br>";
    echo $row['released']."<br>";
    echo $row['size']."<br>";
    echo $row['kategori']."<br>";
    echo $row['deskripsi']."<br>";
  }
  $data=("Select Count(*) From kategori");
 
?>