<?php
include "../connect.php";
// if ($_GET['user']) {
//     $user = $_GET['user'];
//     $sql = "DELETE FROM `radcheck` WHERE `username` = ?";
//     $sql2 = "DELETE FROM `radcheck` WHERE `username` = ?";
//     $result = query($sql, array($user));
//     $result2 = query($sql2, array($user));
//     if ($result && $result2) {
//         echo "<script>alert('ลบผู้ใช้งานแล้ว');window.location='../admin/users.php'</script>";
//     } else {
//         echo "<script>alert('ไม่สามารถลบผู้ใช้งานได้');window.location='../admin/users.php'</script>";
//     }
// }
// ใช้ phpmyadmin triggers ในการลบตางรางอื่นที่มี username ที่ลบไป
if ($_GET['user']) {
    $user = $_GET['user'];
    $sql = "DELETE FROM `radcheck` WHERE `username` = ?";
    $result = query($sql, array($user));
    if ($result) {
        echo "<script>alert('ลบผู้ใช้งานแล้ว');window.location='../admin/users.php'</script>";
    } else {
        echo "<script>alert('ไม่สามารถลบผู้ใช้งานได้');window.location='../admin/users.php'</script>";
    }
}
