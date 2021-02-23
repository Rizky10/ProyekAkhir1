<?php

include("onfig.php");
include("KSonfig.php");
if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM pandapotan WHERE id=$id";
    $query = mysqli_query($mysqli , $sql);
        if( $query ){
        header('Location: Tampilanpandapotan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>