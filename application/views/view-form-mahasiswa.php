<html> 

    <head> 
        <title>FORM INPUT DATA MAHASISWA</title> </head> 
    <body> 
    <center> 
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post"> 
            <table>
                <tr> 
                    <th colspan="3"> FORM INPUT DATA MAHASISWA
                    </th> 
                </tr>
                <tr> 
                    <td colspan="3"> <hr>
                    </td> 
                </tr> 
                <tr> 
                    <th>NAMA</th> <th>:</th> 
                    <td> <input type="text" name="nama" id="nama"> </td> 
                </tr> 
                <tr> 
                    <th>NIS</th> <th>:</th> 
                    <td> <input type="text" name="nis" id="nis"> </td> 
                </tr> 
                <tr> 
                    <th>KELAS</th> <th>:</th> 
                    <td> <input type="text" name="kelas" id="kelas"> </td> 
                </tr> 
                <tr> 
                    <th>TANGGAL LAHIR</th> <th>:</th> 
                    <td> <input type="date" name="tanggal" id="tanggal"> </td> 
                </tr> 
                <tr> 
                    <th>TEMPAT LAHIR</th> <th>:</th> 
                    <td> <input type="text" name="tempat" id="tempat"> </td> 
                </tr>
                <tr>
                    <th>ALAMAT</th> <th>:</th> 
                    <td> <input type="text" name="alamat" id="alamat"> </td> 
                </tr>
                <tr>
                    <th>JENIS KELAMIN</th> <th>:</th> 
                    <td> <input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki<br>
<input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan<br> </td> 
                </tr>
                <tr> 
                    <th>Agama</th> <td>:</td> 
                    <td> <select name="agama" id="agama"> 
                            <option value="">Pilih Agama</option> 
                            <option value="Islam">Islam</option> 
                            <option value="Kristen">Kristen</option> 
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select> 
                    </td> 
                </tr> 
                   <tr> 
                       <td colspan="3" align="center"> 
                        <input type="submit" value="Submit"> </td> 
                   </tr>

            </table> 
        </form> 
    </center> 
</body> 
</html>