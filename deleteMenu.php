<?php
    session_start();
    var_dump($_SESSION['order']);
    $getId =  $_GET['id'];
    $menuList = isset($_SESSION['order'])? $_SESSION['order'] : '';
    $name = explode('&',$menuList['name']);
    $price = explode('&',$menuList['price']);
    $number = explode('&',$menuList['number']);
    $img = explode('&',$menuList['img']);
    $id = explode('&',$menuList['id']);
    unset($_SESSION['order']);
    $arr=array();
    $arr['name']=null;
    $arr['price']=null;
    $arr['number']=null;
    $arr['img']=null;
    $arr['id']=null;
   for ($i = 0; $i < sizeof($name); $i++){
        if($getId != $id[$i] && $i < (sizeof($name)-1)){
            $arr['name'] = $arr['name'].$name[$i].'&';
            $arr['price'] = $arr['price'].$price[$i].'&';
            $arr['number'] = $arr['number'].$number[$i].'&';
            $arr['img'] = $arr['img'].$img[$i].'&';
            $arr['id'] = $arr['id'].$id[$i].'&';
        }else if($getId != $id[$i] && $i == (sizeof($name)-1)){
            $arr['name'] = $arr['name'].$name[$i];
            $arr['price'] = $arr['price'].$price[$i];
            $arr['number'] = $arr['number'].$number[$i];
            $arr['img'] = $arr['img'].$img[$i];
            $arr['id'] = $arr['id'].$id[$i];
        }
    }
    $_SESSION['order'] = $arr;
    $_SESSION['delele'] = 1;
    header("location: menu.php");