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
$str = "select transaksi.id_transaksi,pembeli.nama, transaksi.tanggal_transaksi from transaksi,pembeli where transaksi.id_pembeli=pembeli.id_pembeli";
$result = mysqli_query($mysqli,$str);
?>

<a href="add.php">Tambah Transaksi</a><br/><br/>
 
    <table width='80%' class = "table table-secondary">
 
    <tr class = "table-secondary">
        <th>Id Transaksi</th> 
        <th>Nama Pembeli</th> 
        <th>Tanggal Transaksi</th>
        <th>Action</th>
        <th></th>
    </tr>
    <?php  
    while($row = mysqli_fetch_array($result)) {         
        echo "<tr class = 'table-secondary'>";
            echo "<td class = 'table-secondary'>".$row['id_transaksi']."</td>";
            echo "<td class = 'table-secondary'>".$row['nama']."</td>";
            echo "<td class = 'table-secondary'>".$row['tanggal_transaksi']."</td>";
            echo "<td><a href='delete.php?id=$row[id_transaksi]'>Lihat Detail Barang</a></td>";
            echo "<td><a href='delete.php?id=$row[id_transaksi]'>Delete</a></td>";
        echo"</tr>";        
    }
    ?>
    </table>
</body>
</html>