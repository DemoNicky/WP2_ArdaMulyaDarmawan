<html> 
    <head>

        <title>TAMPIL DATA MAHASISWA</title> 
    </head> 
    <body>
    <center> 
        <table> 
            <tr> <th colspan="3"> TAMPIL DATA MAHASISWA</th> </tr> 
            <tr> <td colspan="3"> <hr> </td> </tr> 
            <tr> <td>NIS</td> <th>:</th> <td> <?= $nis; ?> </td> </tr> 
            <tr> <td>KELAS</td> <th>:</th> <td> <?= $kelas; ?> </td> </tr> 
            <tr> <td>NAMA</td> <td>:</td> <td> <?= $nama; ?> </td> </tr> 
            <tr> <td>TANGGAL</td> <td>:</td> <td> <?= $tanggal; ?> </td> </tr>
            <tr> <td>TEMPAT LAHIR</td> <td>:</td> <td> <?= $tempat; ?> </td> </tr>
            <tr> <td>ALAMAT</td> <td>:</td> <td> <?= $alamat; ?> </td> </tr>
            <tr> <td>JENIS KELAMIN</td> <td>:</td> <td> <?= $jeniskelamin; ?> </td> </tr> 
            <tr> <td>AGAMA</td> <td>:</td> <td> <?= $agama; ?> </td> </tr> 
            <tr> <td colspan="3" align="center"> 
                    <a href="<?= base_url('mahasiswa'); ?>">Kembali</a> </td>
            </tr> 
        </table> 
    </center> 
</body> 
</html>