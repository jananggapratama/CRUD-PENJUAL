<?php 

include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_menu a join tb_penjual b on b.id_penjual = a.id_penjual ORDER BY id_menu DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <span class="navbar-brand mb-0 h1">WEBSITE KANTIN</span>
  </div>
</nav>

<a class="btn btn-primary btn-lg text-align-center" href="add.php" role="button">Learn more</a>
<div class="container">

<table class="tabel" width='80%' border=1> 


<tr>
        <th>Nama Makanan</th> 
        <th>Harga</th>
        <th>Jenis Makanan</th> 
        <th>Penjual</th>
        <th>Aksi</th>

    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
    ?>
  <tr>
     <td><?= $user_data['nama_menu'] ?></td>
     <td>Rp.<?= number_format($user_data['harga'],2,',','.') ?></td>
     <td><?= $user_data['jenis'] ?></td>   
     <td><?= $user_data['nama'] ?></td>    

     <td><a href="edit.php?id=<?= $user_data['id_menu'] ?>">Edit</a> | <a href="delete.php?id=<?= $user_data['id_menu'] ?>">Delete</a></td></tr>  

<?php } ?>
    </table><br>

    <!-- <?php 
    
        //  while($user_data = mysqli_fetch_array($result ))  {         
            
        //     echo "<p>Nama Makanan :$user_data['nama_menu'] ?></p>";
        //     echo "<p>Harga Makanan :".$user_data['harga'] ?>."</p>";
        //     echo "<p>Jenis Makanan :".$user_data['jenis']."</p>";   
           

        //  }
       ?> -->
       
    </div>

</div>
    
</body>
</html>