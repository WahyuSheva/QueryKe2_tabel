<!DOCTYPE html>
<html>
    <head>
        <title>Join Tabel</title>
    </head>
    <body>
    <table border="1">
    <a href ="edit.php"><input type ="button" value="Kembali"></a>
        <tr>
            <td  bgcolor="Aqua">NO.</td>
            <td  bgcolor="Gold">Nama</td>
            <td  bgcolor="Green">Kelas</td>
            <td  bgcolor="Grey">Jurusan</td>
            <td  bgcolor="Yellow">Tahun</td>
            <td  bgcolor="Silver">Nominal</td>
            <td  bgcolor="Blue">Mengubah</td>
        </tr> 
        
        <?php
        include("koneksi.php");
        $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp1 = tb_spp.id_spp1");
        
        while($siswa=mysqli_fetch_array($query)){
            echo "<tr>";
                       echo "<td>".$siswa['id_siswa']."</td>";
                       echo "<td>".$siswa['nama']."</td>";
                       echo "<td>".$siswa['kelas']."</td>";
                       echo "<td>".$siswa['nama_jurusan']."</td>";
                       echo "<td>".$siswa['nominal']."</td>";
                       echo "<td>".$siswa['tahun']."</td>";
                       echo "<td>";
                       echo "<a href='edit.php?id_siswa=".$siswa['id_siswa']."'>Edit</a> |";
                       echo "<a href='hapus.php?id_siswa=".$siswa['id_siswa']."'>hapus</a>";
                       echo "</td>";
            echo "</tr>";
           }
        ?>
        <a href="tambah.php"><input type="button"  name="Tambah" value="tambah">  
</table>
</body>
</html>