<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA UTDI</title>   
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
    <div class="main">
        <form method="POST" action="index1.php" id=form> 
            <h2>DATA IDENTITAS</H2>
<hr/>
            <label>Nama :</label>
            <input type="text" name="fnama" id="fnama" />

            <label>NIM :</label>
            <input type="text" name="nim" id="nim" />

            <!-- ================= Praktek Pertemuan 6 =============== -->

            <label>Jenis Kelamin :</label>
            <input type="radio" name="jenis" id="jenis" value="L">Laki-laki
            <input type="radio" name="jenis" id="jenis" value="P">Perempuan

            <label>Jurusan :</label>
            <select name= "jurusan" id="jurusan">
                <option value="tk">Teknik Komputer</option>
                <option value="si">Informatika</option>
                <option value="si">Sistem Informasi</option>

            <label>Alamat :</label>
            <input type="text" name="lalamat" id="lalamat" />

            <label>No Hp :</label>
            <input type="text" name="no" id="no" />

            <label>Tanggal Lahir :</label>
            <input type="text" name="tgl" id="tgl" />

    <input type="submit" name="submit" id="submit" value="submit">
        </form>
        <?php include "proses.php";?>
        </div>
    </div>
</body>
</html>




<!-- 

    <div class="container">
    <div class="main">
        <form method="POST" action="index1.php" id=form> 
            <h2>DATA IDENTITAS</H2>
<hr/>
            <label>Nama :</label>
            <input type="text" name="fnama" id="fnama" />

            <label>NIM :</label>
            <input type="text" name="nim" id="nim" />

            <label>E-Mail :</label>
            <input type="email" name="email" id="email" />

            <label>Password :</label>
            <input type="password" name="password" id="password" />

            
            <label>Jenis Kelamin :</label>
            <input type="radio" name="jenis" id="jenis" value="L">Laki-laki
            <input type="radio" name="jenis" id="jenis" value="P">Perempuan

            <label>Jurusan :</label>
            <select name= "jurusan" id="jurusan">
                <option value="tk">Teknik Komputer</option>
                <option value="si">Informatika</option>
                <option value="si">Sistem Informasi</option>

            <label>Alamat :</label>
            <input type="text" name="lalamat" id="lalamat" />

            <label>No Hp :</label>
            <input type="text" name="no" id="no" />

            <label>Tanggal Lahir :</label>
            <input type="text" name="tgl" id="tgl" />

    <input type="submit" name="submit" id="submit" value="submit">


 -->