<!DOCTYPE html>
<html>
<head>
<style>
.container {
    width: 50%;
    margin: 0 auto;
}
span {
    display: block;
    margin-bottom: 20px;
}
.success {
    display: block;
    margin-top: 20px;
    margin-bottom: 0;
    font-size: 14px;
}
b {
    color: greenyellow;
}
.main {
    width: 306px;
    padding: 10px 50px 30px;
    border: 2px solid gray;
    float: left;
    margin-top: 15px;
}
input[type="text"],
input[type="email"],
input[type="password"],
select,
input[type="radio"] {
    width: 96%;
    height: 25px;
    border: 1px solid;
    margin-bottom: 10px;
}
</style>
    <title>225510017</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="main">
        <form method="POST" action="index1.php" id="form"> 
            <h2>DATA IDENTITAS</h2>
<hr>
            <label>Nim :</label>
            <input type="text" name="nim" id="nim" />

            <label>Nama :</label>
            <input type="text" name="nama" id="nama" />

            <label>Alamat :</label>
            <input type="text" name="alamat" id="alamat" />

            <label>Jurusan :</label>
            <select name="jurusan" id="jurusan">
                <option value="tk">Teknik Komputer</option>
                <option value="si">Sistem informasi</option>
                <option value="bd">Bisnis digital</option>
            </select>

            <label>Gender :</label>
            <input type="radio" name="gender" id="gender" value="lk"> Laki-laki
            <input type="radio" name="gender" id="gender" value="pr"> Perempuan

<hr>
            <label>Email :</label>
            <input type="email" name="email" id="email" />

            <label>Password :</label>
            <input type="password" name="password" id="password" />

            <input type="submit" name="submit" id="submit" value="Submit">

            <?php
        ?>
        </form>
        <?php include "proses.php"; ?>

    </div>
</div>
</body>
</html>