<?php
require_once('config.php');


function execute($sql)
{
    //CON
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //SQL
    $e_check = mysqli_query($conn, $sql);

    //CLOSE
    mysqli_close($conn);
    return $e_check;
}

//lay danh sach 1 doi tuong
function getListOfObject($sql)
{
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    // mysqli_set_charset($conn, 'UTF8');
    //SQL
    $resultSet = mysqli_query($conn, $sql);
    //khai bao mang 
    $list = [];

    while ($row = mysqli_fetch_array($resultSet, 1)) {
        $list[] = $row;
    }
    //CLOSE
    mysqli_close($conn);

    return $list;
}
