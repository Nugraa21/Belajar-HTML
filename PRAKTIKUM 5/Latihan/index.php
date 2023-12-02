<!DOCTYPE html>
<html>
<head>
    <title>Fadrian</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="main">
        <form method="GET" action="index.php" id=form> 
          <h2>DATA IDENTITAS</h2>
          <hr/>
            <label>Nama :</label>
            <input type="text" name="fnama" id="fnama" />

            <label>Alamat :</label>
            <input type="text" name="lalamat" id="lalamat" />

            <label>Nomor HP :</label>
            <input type="text" name="nomor_hp" id="nomor_hp" />

            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" />

        <input type="submit" name="submit" id="submit" value="submit">
    </form>
    <?php include "proses.php";?>
</div>
</div>
</body>
</html>