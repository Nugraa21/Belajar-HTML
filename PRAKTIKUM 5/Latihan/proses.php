<?php
if(isset($_POST['fnama']))
{
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/>Nomor HP : ".$nomor_hp."<br/>Tanggal Lahir : ".$tanggal_lahir;
}
//-----------------------------------------------------------------------
if(isset($_GET['fnama']))
{
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $nomor_hp = $_GET['nomor_hp'];
    $tanggal_lahir = $_GET['tanggal_lahir'];
    echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
    echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/>Nomor HP : ".$nomor_hp."<br/>Tanggal Lahir : ".$tanggal_lahir;
}
?>
