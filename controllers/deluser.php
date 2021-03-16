<?php
include "../connect.php";
if ($_GET['user']) {
    $user = $_GET['user'];
    $sql = "DELETE FROM `radcheck` WHERE `username` = ?";
    $sql2 = "DELETE FROM `radreply` WHERE `username` = ?";
    $sql3 = "DELETE FROM `radusergroup` WHERE `username` = ?";
    $result = query($sql, array($user));
    $result2 = query($sql2, array($user));
    $result3 = query($sql3, array($user));
    if ($result && $result2 && $result3) {
        echo "<script>alert('ลบผู้ใช้งานแล้ว');window.location='../admin/users.php'</script>";
    } else {
        echo "<script>alert('ไม่สามารถลบผู้ใช้งานได้');window.location='../admin/users.php'</script>";
    }
}
