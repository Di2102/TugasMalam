<html>
<head>
    <title>Pemrograman Web</title>
</head>
<style>
    body{
    background-color: grey;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}

.from {
    display: flex;
    justify-content: center;
    margin-top: 3rem;
}

form {
        background: blac;
        border-radius: 2rem;
        padding: 2rem;
    }
    
textarea:focus {
            border: solid 7px white;
            outline: none;
}

</style>
<body>
    <a href = "Data berhasil disimpan".target = "_blank">
    <table border="1" align="center"><br></br>
        <tr>
            <td>
                <from method ="post" name="from1" action="">
                    <table>
                        <tr>
                            <td colspan="3" align="center"><b>Profil Diri</b></td>
                         </tr>
                        <tr>
                            <td>Masukkan Nim Anda</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fMasukkan Nim Anda"></td>
                        </tr>
                        <tr>
                            <td>Masukkan Nama</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fMasukkan Nama"></td>
                        </tr>
                        <tr>
                            <td>Masukkan gender</td>
                            <td align="center">:</td>
                            <td>
                                <input type="radio" name="fgender" id='laki-laki' value='laki-laki'> <label for='laki-laki'>laki-laki</label>
                                <input type="radio" name="fgender" id='wanita' value='wanita'> <label for='wanita'>wanita</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Masukkan status</td>
                            <td align="center">:</td>
                            <td>
                                <select name="fstatus">
                                    <option value='Belum Menikah'>Belum Meniklah</option>
                                    <option value='Menikah'>Menikah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Masukkan No HP</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fMasukkan No Hp"></td>
                        </tr>
                        <tr>
                            <td>Masukkan Alamat</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fMasukkan Alamat"></td>
                        </tr>
                        <tr>
                        <td colspan="3"><input type="submit" name="tblsumit" value="Save">

                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html> 