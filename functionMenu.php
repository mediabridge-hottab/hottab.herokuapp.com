<?php
session_start();
$arr = array();
$arr['name'] = isset($_SESSION['order']['name'])? ($_SESSION['order']['name']."&".$_GET['name']) : $_GET['name'];
$arr['price'] = isset($_SESSION['order']['price'])? ($_SESSION['order']['price']."&".$_GET['price']) : $_GET['price'];
$arr['number'] = isset($_SESSION['order']['number'])? ($_SESSION['order']['number']."&".$_GET['number']) : $_GET['number'];
$arr['img'] = isset($_SESSION['order']['img'])? ($_SESSION['order']['img']."&".$_GET['img']) : $_GET['img'];
$arr['id'] = isset($_SESSION['order']['id'])? ($_SESSION['order']['id']."&".$_GET['id']) : $_GET['id'];
$_SESSION['order'] = $arr;

header("location: menu.php");
