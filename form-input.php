<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Inputan Data</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td</tr>
                <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
                <tr><td>Jurusan</td><td>
                    <select name="jurusan">
                        <option value="TRPL">TRPL</option>
                        <option value="TRI">TRI</option>
                        <option value="TRIK">TRIK</option>
                    </select>
                    </td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value"simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
