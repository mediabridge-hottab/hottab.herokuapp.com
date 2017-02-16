<?php
include 'function.php'; var_dump($_POST);
    $tmp_name = $_FILES['icon']['tmp_name'];
    $nameimg = $_FILES['icon']['name'];
    addCatMenu($_POST['hotel'], $_POST['name'], $_POST['menu'], $_POST['des'],$tmp_name,$nameimg);