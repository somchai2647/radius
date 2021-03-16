<?php
session_start();
include "../connect.php";
if (isset($_POST['gen'])) {
    $sqlchk = "SELECT * FROM radcheck WHERE username = ? LIMIT 1";
    $resultchk = query($sqlchk, array($_POST['username'] . '1'));
    if ($resultchk->rowCount() == 0) {
        $number = $_POST['number'];
        $date = date("d-m-Y");
        for ($i = 1; $i <= $number; $i++) {
            $sql = "INSERT INTO radcheck(username,attribute,op,value,name,date_created) VALUES (?,?,?,?,?,?)";
            $sql2 = "INSERT INTO radusergroup VALUES (?,?,?)";
            $sql3 = "INSERT INTO radreply VALUES (?,?,?,?,?)";
            $username = $_POST['username'] . $i;
            $password = rand(1111, 9999);
            $result = query($sql, array("$username", 'Password', ':=', "$password", "$username", "$date"));
            $result2 = query($sql2, array("$username", $_POST['group'], 1));
            $result3 = query($sql3, array(null, "$username", 'Idle-Timeout', "300", ':='));
            if (!$result || !$result2 || !$result3) {
                echo "SQL LOOP ERROR";
                // break;
                exit;
            }
        }
        echo "<script>alert('เพิ่มผู้ใช้งานเสร็จสิ้น');window.location='../admin/users.php'</script>";
        $result = null;
    } else {
        echo "<script>alert('ชื่อผู้ใช้งานถูกใช้งานไปแล้ว');window.location='../admin/usergen.php'</script>";
    }
}
