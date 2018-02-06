<?php 
session_start(); 
 
if (isset($_SESSION['namekh'])){
    unset($_SESSION['namekh']);
    unset($_SESSION['idkh']);
    unset($_SESSION['cart']);
}
header('Location: ../../Index.php');
?>