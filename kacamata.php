<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kacamata.php">Kacamata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pembeli.php">Pembeli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="detail_transaksi.php">Detail Transaksi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM kacamata ORDER BY id_kacamata DESC");
?>

<a href="add.php">Tambah Kacamata</a><br/><br/>
 
    <table width='80%' class = "table table-secondary">
 
    <tr class = "table-secondary">
        <th>Id Kacamata</th> 
        <th>Warna</th> 
        <th>Ukuran Kiri</th> 
        <th>Ukuran Kanan</th> 
        <th>Bahan Frame</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>
    <?php  
    while($row = mysqli_fetch_array($result)) {         
        echo "<tr class = 'table-secondary'>";
          echo "<td class = 'table-secondary'>".$row['id_kacamata']."</td>";
          echo "<td class = 'table-secondary'>".$row['warna']."</td>";
          echo "<td class = 'table-secondary'>".$row['ukuran_kiri']."</td>";
          echo "<td class = 'table-secondary'>".$row['ukuran_kanan']."</td>";
          echo "<td class = 'table-secondary'>".$row['bahan_frame']."</td>"; 
          echo "<td class = 'table-secondary'>".$row['harga']."</td>";   
          echo "<td><a href='edit.php?id=$row[id_kacamata]'>Edit</a> | <a href='delete.php?id=$row[id_kacamata]'>Delete</a></td>";
          echo"</tr>";        
    }
    ?>
    </table>
</body>
</html>

