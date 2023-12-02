<?php
if(isset($_POST['fnama']))
{
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jel = $_POST['jel'];
    $prodi = $_POST['prodi'];
    $cekhobi = isset($_POST['cekhobi']) ? $_POST['cekhobi'] : [];

    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "Nama : " . $fnama . "<br/>Alamat : " . $lalamat . "<br/>Nomor HP : " . $nomor_hp . "<br/>Tanggal Lahir : " . $tanggal_lahir . "<br/>Jenis Kelamin: " . $jel . "<br/>Prodi: " . $prodi . "<br/>Hobi: " . implode(", ", $cekhobi);
}
//-----------------------------------------------------------------------
if(isset($_GET['fnama']))
{
    $fnama = $_GRT['fnama'];
    $lalamat = $_GRT['lalamat'];
    $nomor_hp = $_GRT['nomor_hp'];
    $tanggal_lahir = $_GRT['tanggal_lahir'];
    $jel = $_GRT['jel'];
    $prodi = $_GRT['prodi'];
    $cekhobi = isset($_GRT['cekhobi']) ? $_GRT['cekhobi'] : [];

    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "Nama : " . $fnama . "<br/>Alamat : " . $lalamat . "<br/>Nomor HP : " . $nomor_hp . "<br/>Tanggal Lahir : " . $tanggal_lahir . "<br/>Jenis Kelamin: " . $jel . "<br/>Prodi: " . $prodi . "<br/>Hobi: " . implode(", ", $cekhobi);
}