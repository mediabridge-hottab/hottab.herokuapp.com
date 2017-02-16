<?php
	$conn = mysqli_connect('localhost', 'root', '', 'hottab_herokuapp') or die ('Không thể kết nối tới database');

    function getHotel(){
        GLOBAL $conn;
        $sql = "SELECT * FROM hotel";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function addListMenu($name, $menu, $des){
        GLOBAL $conn;
        $sql = "INSERT INTO `list_menu`(`hotel_id`, `name`, `desciption`) VALUES ('$name', '$menu', '$des')";
        mysqli_query($conn, $sql);
        header('Location: add_menu.php');
    }
    function getMenu(){
        GLOBAL $conn;
        $sql = "SELECT * FROM list_menu";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function addCatMenu($hotel , $name, $menu, $des,$tmp_name,$nameimg){
        GLOBAL $conn;
        $path = "img/icon/";
        move_uploaded_file($tmp_name,$path.$nameimg);
        $sql = "INSERT INTO `category`(`hotel_id`, `menu_id`, `name`, `description`, `icon`) VALUES ('$hotel', '$menu', '$name', '$des', '$nameimg')";
        mysqli_query($conn, $sql);
        header('Location: add_category_menu.php');
    }
    function getAllCate(){
        GLOBAL $conn;
        $sql = "SELECT * FROM category";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function getDeleteCate($id){
        GLOBAL $conn;
        $sql = "DELETE FROM `category` WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header('Location: list_category_menu.php');
    }
    function getCateById($id){
        GLOBAL $conn;
        $sql = "SELECT * FROM category WHERE id = '$id'";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $sql);

        return $result;
    }

    function editCateIsImg($id,$hotel , $name, $menu, $des,$tmp_name,$nameimg ){
        GLOBAL $conn;
        $path = "img/icon/";
        move_uploaded_file($tmp_name,$path.$nameimg);
        $sql = "UPDATE `category` SET`hotel_id`= '$hotel',`icon`='$nameimg',`menu_id`='$menu',`name`='$name',`description`='$des' WHERE id = ' $id'";
        mysqli_query($conn, $sql);
        header('Location: list_category_menu.php');
    }
    function editCateByNotImg($id,$hotel , $name, $menu, $des){
        GLOBAL $conn;

        $sql = "UPDATE `category` SET`hotel_id`= '$hotel',`menu_id`='$menu',`name`='$name',`description`='$des' WHERE id = ' $id'";
        mysqli_query($conn, $sql);
        header('Location: list_category_menu.php');
    }
    function getALLMenu(){
        GLOBAL $conn;
        $sql = "SELECT * FROM list_menu";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function getDeleteMenu($id){
        GLOBAL $conn;
        $sql = "DELETE FROM `list_menu` WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header('Location: list_menu.php');
    }
    function getMenuById($id){
        GLOBAL $conn;
        $sql = "SELECT * FROM list_menu WHERE id = '$id'";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function editMenu($id, $hotel, $name, $des){
        GLOBAL $conn;
        $sql = "UPDATE `list_menu` SET `hotel_id`= '$hotel',`name`= '$name',`desciption`= '$des' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header('Location: list_menu.php');
    }
    function saveLocation($ip){
        GLOBAL $conn;
        $sql = "UPDATE `ip_user` SET `ip`= '$ip' WHERE 1";
        mysqli_query($conn, $sql);
    }
    function getLocation(){
        GLOBAL $conn;
        $sql = "SELECT * FROM ip_user WHERE 1";
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $sql);

        return $result;
    }