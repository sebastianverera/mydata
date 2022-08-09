<?php 
require '../koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table YouTube</title>
    </head>
    <body>

        <h1>Table YouTube</h1>

        <a href="tambah.php">[+] Tambah Data</a>

        <br><br>

        <table border="1" cellspacing="0" cellpadding="2">
            <tr>
                <th>No</th>
                <th>Postingan</th>
                <th>Jenis</th>
                <th>Keyword</th>
                <th>Tanggal</th>
                <th>Link</th>
                <th>Akun</th>
                <th>Followers</th>
                <th>Comment</th>
                <th>Like</th>
                <th>Share</th>
                <th>View</th>
                <th>Kota/Kabupaten</th>
                <th>Provinsi</th>
                <th>Aksi</th>
            </tr>
            
            <?php 
                $query = mysqli_query($koneksi, "SELECT * FROM tb_youtube");

                $no = 1;

                while($row = mysqli_fetch_array($query)){
                
                echo '<tr>';

                echo '<td>'.$no.'</td>';
                echo '<td>'.$row['post'].'</td>';
                echo '<td>'.$row['jenis'].'</td>';
                echo '<td>'.$row['keyword'].'</td>';
                echo '<td>'.$row['tanggal'].'</td>';
                echo '<td>'. '<a href='.$row['link'].'>'.$row['link'].'</a>'.'</td>';
                echo '<td>'.$row['akun'].'</td>';
                echo '<td>'.$row['followers'].'</td>';
                echo '<td>'.$row['comment'].'</td>';
                echo '<td>'.$row['like'].'</td>';
                echo '<td>'.$row['share'].'</td>';
                echo '<td>'.$row['view'].'</td>';
                echo '<td>'.$row['kabupaten'].'</td>';
                echo '<td>'.$row['provinsi'].'</td>';

                echo '<td>';
                echo '<a href="detail_youtube.php?id='.$row['id'].'">Detail</a> | ';
                echo '<a href="edit_youtube.php?id='.$row['id'].'">Edit</a> | ';
                echo '<a href="hapus_youtube.php?id='.$row['id'].'">Hapus</a>';
                echo '</td>';

                echo '</tr>';
               
                }
            ?>

        </table>

    </body>
</html>