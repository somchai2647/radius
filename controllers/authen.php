<?php
session_start();
include "../connect.php";
//User Function
if (isset($_POST['btnreg'])) {
    $sql = "SELECT * FROM radcheck WHERE username = ?";
    $result = query($sql, array($_POST['username']));
    if ($result->rowCount() != 1) {
        $sql = "INSERT INTO radcheck VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $date = date("d-m-Y");
        $result = query($sql, array(null, $_POST['username'], 'Password', ':=', $_POST['password'], $_POST['name'], $_POST['address'], $_POST['email'], $_POST['tel'], $_POST['memo'], $date));
        $result2 = query("INSERT INTO radusergroup VALUES(?,?,?)", array($_POST['username'], 'student', 1));
        $result3 = query("INSERT INTO radreply VALUES(?,?,?,?)", array(null, $_POST['username'], 'Idle-Timeout', ':=', '300'));
        //ใช้ phpmyadmin triggers เพิ่มแทน
        if ($result) {
            echo "<script>alert('สมัครผู้ใช้งานสำเร็จ!');window.location='../index.php'</script>";
        } else {
            echo "<script>alert('ไม่สามารถสมัครผู้ใช้งานสำเร็จ');window.location='../register.php'</script>";
        }
    } else {
        echo "<script>alert('ชื่อผู้ใช้งานนี้ถูกใช้งานไปแล้ว');window.location='../register.php'</script>";
    }
}
if (isset($_POST['btnlogin'])) {
    $sql = "SELECT * FROM radcheck WHERE username = ? AND value = ? LIMIT 1";
    $result = query($sql, array($_POST['username'], $_POST['password']));
    if ($result->rowCount() == 1) {
        $rows = $result->fetch();
        if ($rows['op'] == ':=') {
            $_SESSION['username'] = $rows['username'];
            $_SESSION['name'] = $rows['name'];
            $_SESSION['id'] = $rows['id'];
            header("refresh:0;url=../user/index.php");
        } else {
            echo "<script>alert('ชื่อผู้ใช้งานนี้ถูกระงับใช้งาน');window.location='../index.php'</script>";
        }
    } else {
        echo "<script>alert('ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง!');window.location='../index.php'</script>";
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    echo "<script>alert('ออกจากระบบสำเร็จ!');window.location='../index.php'</script>";
}
if (isset($_POST['chgpass'])) {
    $sqlchk = "SELECT * FROM radcheck WHERE username = ? AND value = ? LIMIT 1";
    $resultchk = query($sqlchk, array($_SESSION['username'], $_POST['old_password']));
    if ($resultchk->rowCount() == 1) {
        $sql = "UPDATE `radcheck` SET `value` = ? WHERE username = ?";
        $result = query($sql, array($_POST['new_password1'], $_SESSION['username']));
        if ($result) {
            session_destroy();
            echo "<script>alert('เปลี่ยนรหัสผ่านสำเร็จ กรุณาเข้าสู่ระบบใหม่');window.location='../index.php'</script>";
        } else {
            echo "<script>alert('รหัสผ่านเดิมไม่ถูกต้อง!');window.location='../user/changpass.php'</script>";
        }
    } else {
        echo "<script>alert('รหัสผ่านเดิมไม่ถูกต้อง!');window.location='../user/changpass.php'</script>";
    }
}
//Admin Function
if (isset($_POST['btnloginadmin'])) {
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ? LIMIT 1";
    $result = query($sql, array($_POST['username'], $_POST['password']));
    if ($result->rowCount() == 1) {
        $rows = $result->fetch();
        $_SESSION['username'] = $rows['username'];
        $_SESSION['name'] = $rows['name'];
        header("refresh:0;url=../admin/manage.php");
    } else {
        echo "<script>alert('ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง!');window.location='../admin/index.php'</script>";
    }
}
if (isset($_POST['chgpass2'])) {
    $sqlchk = "SELECT * FROM admin WHERE username = ? AND password = ? LIMIT 1";
    $resultchk = query($sqlchk, array($_SESSION['username'], $_POST['old_password']));
    if ($resultchk->rowCount() == 1) {
        $sql = "UPDATE `admin` SET `password` = ? WHERE username = ?";
        $result = query($sql, array($_POST['new_password1'], $_SESSION['username']));
        if ($result) {
            session_destroy();
            echo "<script>alert('เปลี่ยนรหัสผ่านสำเร็จ กรุณาเข้าสู่ระบบใหม่');window.location='../admin/index.php'</script>";
        } else {
            echo "<script>alert('รหัสผ่านเดิมไม่ถูกต้อง!');window.location='../admin/changpass.php'</script>";
        }
    } else {
        echo "<script>alert('รหัสผ่านเดิมไม่ถูกต้อง!');window.location='../admin/changpass.php'</script>";
    }
}
