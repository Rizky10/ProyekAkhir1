<?php include("onfig.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Komentar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Komentar D3 Teknik Komputer</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Komentar</th>
        <th>Waktu</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
       <?php
       settype($var,'integer');
        $var = 1;
        $sql = "SELECT * FROM komentar";
        $query = mysqli_query($mysqli , $sql);
        
        while($komen = mysqli_fetch_array($query)){
        
            echo "<tr>";

            echo "<td>".$var."</td>";
            echo "<td>".$komen['nama']."</td>";
            echo "<td>".$komen['email']."</td>";
            echo "<td>".$komen['komentar']."</td>";
            echo "<td>".$komen['tanggal']."</td>";
            
            
            echo "<td>";
            echo "<a href='hapus.php?id=".$komen['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $var++;
        } 
        ?>

    </tbody>
  </table>
</div>

</body>
</html>
