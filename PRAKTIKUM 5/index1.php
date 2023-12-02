<!DOCTYPE html>
<html>
<head>
    <title>225510017</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container">
    <div class="main">
        <form method="get" action="index1.php" id=form> 
          <h2>DATA IDENTITAS</H2>
<hr/>
            <label>Nama :</label>
            <input type="text" name="fnama" id="fnama" />

            <label>Alamat :</label>
            <input type="text" name="lalamat" id="lalamat" />

        <input type="submit" name="submit" id="submit" value="submit">
    </form>
    <?php include "proses.php";?>
</div>
</div>
</body>
</html>