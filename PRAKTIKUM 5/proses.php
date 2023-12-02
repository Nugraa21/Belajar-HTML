<?php
if(isset($_POST['fnama']))
{
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    echo "<span class='success'>Dengan <b>METODE POST<b></span><br/>";
    echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
//-----------------------------------------------------------------------
if(isset($_GET['fnama']))
{
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    echo "<span class='success'>Dengan <b>METODE GET<b></span><br/>";
    echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
?>