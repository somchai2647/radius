<?php
session_start();
include "../connect.php";
$sql = "SELECT * FROM admin WHERE username = ?";
$result = query($sql, array($_SESSION['username']));
$rows = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../boostrap/jquery-3.6.0.min.js"></script>
    <script src="../boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
    <title>Welcome <?php echo $_SESSION['name']; ?></title>
</head>

<body>
    <?php include "../include/navbar_admin.php" ?>
    <div class="container-fluid mt-4">
        <div class="card shadow">
            <div class="card-body">
                <div class="form-row">
                    <form action="users.php" method="get">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" name="search" id="search" class="form-control" placeholder="ค้นหา">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success">ค้นหา</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr align="center">
                            <th>ลำดับ</th>
                            <th>รหัส</th>
                            <th>ชื่อผู้ใช้งาน</th>
                            <th>รหัสผ่าน</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>เบอร์โทร</th>
                            <th>อีเมล</th>
                            <th>วันที่สร้าง</th>
                            <th>เปิด/ปิด</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['search']) && $_GET['search'] != "") {
                            $sql = "SELECT * FROM radcheck WHERE username LIKE ?";
                            $search = '%' . $_GET['search'] . '%';
                            $result = query($sql, array($search));
                        } else {
                            $sql = "SELECT * FROM radcheck ORDER BY id DESC";
                            $result = query($sql, array($_SESSION['username']));
                        }
                        $count = 0;
                        if ($result->rowCount() > 0) {
                            while ($rows = $result->fetch()) { ?>
                                <tr align="center">
                                    <td><?php echo ++$count; ?>.</td>
                                    <td><?php echo $rows['id'] ?></td>
                                    <td><?php echo $rows['username'] ?></td>
                                    <td><?php echo $rows['value'] ?></td>
                                    <td><?php echo $rows['name'] ?></td>
                                    <td><?php echo ($rows['tel']) ? $rows['tel'] : '-'; ?></td>
                                    <td><?php echo ($rows['email']) ? $rows['email'] : '-'; ?></td>
                                    <td><?php echo $rows['date_created'] ?></td>
                                    <td>
                                        <?php
                                        if ($rows['op'] == ':=') {
                                        ?>
                                            <a href="../controllers/update.php?off=<?php echo $rows['id']; ?>" class="btn btn-sm btn-success">คลิกเพื่อปิด</a>
                                        <?php } else { ?>
                                            <a href="../controllers/update.php?on=<?php echo $rows['id']; ?>" class="btn btn-sm btn-danger">คลิกเพื่อเปิด</a>
                                        <?php }
                                        ?>
                                    </td>
                                    <td align="center">
                                        <a href="user_profile.php?id=<?php echo $rows['id']; ?>" class="btn btn-secondary btn-sm">แก้ไข</a>
                                        <a href="../controllers/deluser=<?php echo $rows['id']; ?>" class="btn btn-danger btn-sm">ลบ</a>
                                    </td>
                                </tr>

                            <?php }
                        } else { ?>
                            <tr align="center">
                                <td colspan="9">-ไม่พบข้อมูล-</td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>