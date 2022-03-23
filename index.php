<?php
    include ('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
</head>
  <body>
    <table border='1' width="100%" style='border-collapse:collapse'>
              <thead>
                <tr>
                  <th>NPM</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Nomor_HP</th>
                  <th>Email</th>
                  <th>Jurusan</th>
                  <th>Fakultas</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  
                  $query = "SELECT * FROM tb_datamhs";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['NPM'];  ?></td>
                    <td><?php echo $data['Nama'];  ?></td>
                    <td><?php echo $data['Jenis_Kelamin'];  ?></td>
                    <td><?php echo $data['Alamat'];  ?></td>
                    <td><?php echo $data['Nomor_HP'];  ?></td>
                    <td><?php echo $data['Email'];  ?></td>
                    <td><?php echo $data['Jurusan'];  ?></td>
                    <td><?php echo $data['Fakultas'];  ?></td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
    </table>
  </body>
</html>
    