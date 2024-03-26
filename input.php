<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <div style="margin-bottom: 10px;">
        <h3>Tambah Data Mahasiswa</h3>
        <hr/>
        <form method="post" action="proses.php?action=add">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"/></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"/></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td>:</td>
                    <td><input type="text" name="usia"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="tombol" value="Simpan"/>
                        <a href="tampil.php"><input type="button" value="Kembali"/></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
