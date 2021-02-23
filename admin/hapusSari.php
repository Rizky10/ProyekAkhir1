<?php

include("onfig.php");
include("KSonfig.php");
if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM sari WHERE id=$id";
    $query = mysqli_query($mysqli , $sql);
        if( $query ){
        header('Location: TampilanSari.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>