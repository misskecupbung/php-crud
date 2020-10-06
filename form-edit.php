<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);

//membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan = array('TRPL','TRI','TRIK');
function active_radio_button($value,$input){
    // apabila value dari radio sama dengan yang di input
    $result = $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Digital Talent</title>
    </head>
    <body>
        <form method="post" action="edit.php">
            <input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
            <table>
                <tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
                <tr><td>Nama</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
                    </td></tr>
                <tr><td>Jurusan <?php echo $row['jurusan'];?></td><td>
                    <select name="jurusan">
                        <?php
                        foreach ($jurusan as $j){
                            echo "<option value='$j' ";
                            echo $row['jurusan']==$j?'selected="selected"':'';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td></tr>
                <tr><td>Alamat</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Simpan Perubahan</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
