<?php
require_once('config.php');


function execute($sql)
{
    //CON

    // $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    // mysqli_set_charset($conn, 'UTF8');
    //SQL
    // $e_check = mysqli_query($dbh, $sql);

    $e_check = '';
    try {
        $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE . ";charset=utf8" . "", USERNAME, PASSWORD);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e_check = $conn->query($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    //CLOSE
    // mysqli_close($conn);

    $conn = NULL;
    return $e_check;
}

//lay danh sach 1 doi tuong
function getListOfObject($sql)
{
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'UTF8');
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
