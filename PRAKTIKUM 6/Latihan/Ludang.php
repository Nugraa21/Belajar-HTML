<!DOCTYPE html>
<html>
<head>
    <title>225510017</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="main">
        <form method="POST" action="Ludang.php" id=form> 
          <h2>DATA IDENTITAS</h2>
          <hr/>
            <label>Nama :</label>
            <input type="text" name="fnama" id="fnama" />

            <label>Alamat :</label>
            <input type="text" name="lalamat" id="lalamat" />
<!-- ================ LATIHAN PERTEMUAN5 =============== --> <p class="penanda">=== Latihan pertemuan 5 ===</p>
            <label>Nomor HP :</label>
            <input type="text" name="nomor_hp" id="nomor_hp" />

            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" />
<!-- ================ PRAKTEK PERTEMUAN 6 =============== --><p class="penanda">=== Praktek pertemuan 6 ===</p>
            <p>
                <label>Jenis Kelamin</label> <br>
                    <input type="radio" name="jel" value="Laki-laki">Laki-Laki <br>
                    <input type="radio" name="jel" value="Perempuan">Perempuan
            </p>
            <p>
                <label>Program Study</label>
                    <select name="prodi">
                        <option value="TK">Teknik Komputer</option>
                        <option value="BD">Bisnis Digital</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="MR">Manajemen Ritel</option>
                        <option value="IF">Informatoka</option>
                    </select>
            </p>
            <p>
            <label>Hobi</label> <br> <!-- Pada baris saya beri BR agar tampilan turun -->
                <input type="checkbox" name="cekhobi[]" value="disain web">
                    <label for="cekSing">Disainer web</label> <br>
                <input type="checkbox" name="cekhobi[]" value="editor vido">
                    <label for="cekSing">Editing Video</label> <br>
                <input type="checkbox" name="cekhobi[]" value="gpunya">
                    <label for="cekSing">gak ada hobi :V </label> <br>
            </p>

            
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
    <?php include "proses.php";?>
</div>
</div>
</body>
</html>















    <!-- <style>
        * {
    box-sizing: border-box;
}

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
    border: 2px solid black;
}

b {
    color: rgb(192, 0, 0);
}

div.main {
    width: 306px;
    padding: 10px 50px 30px;
    border: 2px solid gray;
    float: left;
    margin-top: 15px;
}

input[type=text] {
    width: 96%;
    height: 25px;
    border: 1px solid;
    margin-bottom: 10px;
}

label {
    font-weight: bold;
}

p {
    margin-bottom: 10px;
}

select {
    width: 100%;
    height: 30px;
    margin-bottom: 10px;
}

input[type=checkbox] {
    margin-right: 10px;
}

input[type=submit] {
    width: 100%;
    height: 30px;
    background-color: #ff0000;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}

input[type=submit]:hover {
    background-color: #a04545;
}

/* Penanda  */

.penanda {
    color: red;
}

    </style> -->