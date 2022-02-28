<?php
if(!$_POST['m']){

    $url = "https://gi.shb-cdn.com/cdn/books/GIAC67_G6760801K/pdf/pages/".$_POST['pag']."?type=";
    header("Location: $url");
    exit();
}
if(!$_POST['n']){

    $url = "https://gi.shb-cdn.com/cdn/books/GIAC67_67921T/pdf/pages/".$_POST['pag']."?type=";
    header("Location: $url");
    exit();
}
?>