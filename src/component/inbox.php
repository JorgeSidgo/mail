<?php
    include '../../app/config/Conexion.php';
    include '../../app/model/Mess.php';

    session_start();
    $m = new Mess();
    $m->setPara($_SESSION["email"]);
?>

<style>
    .messa {
       border: 1px solid #ccc; 
    }
</style>

<table style="width: 100%;">
    <tr>
        <td style="text-align: right">Viewing Messages</td>
    </tr>
</table>

<table class="messa" style="width: 100%;">
    <tr style="background: #FFFFCE">
        <td><b>From</b></td>
        <td><b>Date</b></td>
        <td><b>Subject</b></td>
    </tr>
    <?php
        $m->correosUsuario();
    ?>
</table>