<?php
include 'function.php';
$tmp_name = $_FILES['icon']['tmp_name'];
$nameimg = $_FILES['icon']['name'];
    if($tmp_name!=null)
        editCateIsImg($_GET['id'],$_POST['hotel'] , $_POST['name'], $_POST['menu'], $_POST['des'],$tmp_name,$nameimg);
    else
        editCateByNotImg($_GET['id'],$_POST['hotel'] , $_POST['name'], $_POST['menu'], $_POST['des']);
