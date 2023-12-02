<!DOCTYPE html>
<html lang="en">
<head>
    <limk rel="stylesheet" herf="css/style.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <form mettod="get"action="indext.php"id="form">
                <h2>DATA IDENTITAS</h2>
                <hr/>
                <table>Nama</table>
                <input type="text" nama="fnama" id="fnama" />

                <table>Alamat</table>
                <input type="text" nama="lalamat" id="lalamat" />

                <input type="submit" nama="submit" id="submit" />
            </form>
            <?php include "proses.php";?>
        </div>
    </div>
</body>
</html>