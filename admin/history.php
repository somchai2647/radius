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
        <table class="table table-striped">
            <thead>
                <tr align="center">
                    <th>ลำดับ (ล่าสุด)</th>
                    <th>เวลาเข้า</th>
                    <th>เวลาออก</th>
                    <th>จำนวน (วินาที)</th>
                    <th>หมายเลข IP Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM radacct WHERE username = ? ORDER BY radacctid DESC";
                $result = query($sql, array($_SESSION['username']));
                if ($result->rowCount() > 0) {
                    while ($rows = $result->fetch()) { ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    <?php }
                } else { ?>
                    <tr align="center">
                        <td colspan="5">-ไม่พบข้อมูล-</td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>