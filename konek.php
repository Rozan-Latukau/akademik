<?php
if(!isset($_SESSION['session _ username'])){
    header("location:index.php") ;
    exit();
}
print_r($_SESSION);
print_r($_COOKIE);
?>