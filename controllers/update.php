<?php
session_start();
include "../connect.php";
if (isset($_POST['btnupdate'])) {
    $sql = "UPDATE `radcheck` SET `name` = ?, `address` = ?, `email` = ?, `tel` = ?, `memo` = ? WHERE username = ?";
    $result = query($sql, array($_POST['name'], $_POST['address'], $_POST['email'], $_POST['tel'], $_POST['memo'], $_SESSION['username']));
    if ($result) {
        $_SESSION['name'] = $_POST['name'];
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');window.location='../user/index.php'</script>";
    } else {
        echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้!');window.location='../user/index.php'</script>";
    }
}
if (isset($_POST['btnupdateadmin'])) {
    $sql = "UPDATE `admin` SET `name` = ?, `email` = ?, `tel` = ?, `memo` = ? WHERE username = ?";
    $result = query($sql, array($_POST['name'], $_POST['email'], $_POST['tel'], $_POST['memo'], $_SESSION['username']));
    if ($result) {
        $_SESSION['name'] = $_POST['name'];
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');window.location='../admin/manage.php'</script>";
    } else {
        echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้!');window.location='../admin/manage.php'</script>";
    }
}
//ADMIN
if (isset($_GET['on'])) {
    $id = $_GET['on'];
    $sql = "UPDATE `radcheck` SET `op` = ':=' WHERE `id` = '$id'";
    echo $sql;
    $result = query($sql, array($id));
    if ($result) {
        header("refresh:0;url=../admin/users.php");
    }
}
if (isset($_GET['off'])) {
    $id = $_GET['off'];
    echo $sql = "UPDATE `radcheck` SET `op` = '!=' WHERE `id` = '$id'";
    $result = query($sql, array($id));
    if ($result) {
        header("refresh:0;url=../admin/users.php");
    }
}
if (isset($_POST['btnupdate2'])) {
    $id = $_POST['id'];
    $sql = "UPDATE `radcheck` SET `name` = ?, `address` = ?, `email` = ?, `tel` = ?, `memo` = ? WHERE username = ?";
    $result = query($sql, array($_POST['name'], $_POST['address'], $_POST['email'], $_POST['tel'], $_POST['memo'], $_POST['username']));
    if ($result) {
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');window.location='../admin/user_profile.php?id=$id'</script>";
    } else {
        echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้!');window.location='../admin/user_profile.php?id=$id'</script>";
    }
}
