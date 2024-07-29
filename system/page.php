<?php


require_once 'system/conn.php';

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'dataList') {
        require_once "dataList.php";
    } else if ($_GET['page'] == 'login') {
        require_once "login.php";
    } else if ($_GET['page'] == 'checker') {
        require_once "formChecker.php";
    }
} else {
    require_once "formChecker.php";
}
