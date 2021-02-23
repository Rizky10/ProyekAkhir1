<?php

include("onfig.php");
include("KSonfig.php");
if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM tulus WHERE id=$id";
    $query = mysqli_query($mysqli , $sql);
        if( $query ){
        header('Location: TampilanTulus.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>