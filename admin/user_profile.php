<?php
session_start();
include "../connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM radcheck WHERE id = ?";
$result = query($sql, array($id));
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
    <div class="container w-50 mt-4">
        <a href="users.php">[ BACK ]</a>
        <div class="card shadow">
            <div class="card-header bg-danger text-white">
                <b>แก้ไขข้อมูลส่วนตัว</b>
            </div>
            <div class="card-body">
                <form action="../controllers/update.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $rows['username'] ?>" readonly required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="name">ชื่อ-นามสกุล</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?php echo $rows['name'] ?>" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="tel">เบอร์โทร</label>
                            <input type="text" name="tel" id="tel" class="form-control" value="<?php echo $rows['tel'] ?>" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="email">อีเมล</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $rows['email'] ?>" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="address">ที่อยู่</label>
                            <input type="text" name="address" id="address" class="form-control" value="<?php echo $rows['address'] ?>" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="memo">หมายเหตุ</label><br>
                            <textarea name="memo" id="memo" rows="3" class="form-control"><?php echo $rows['memo'] ?></textarea>
                        </div>
                        <div class="form-group col-12 col-md-2">
                            <label for="date">วันที่สร้าง</label>
                            <input type="text" name="date" id="date" class="form-control text-right" value="<?php echo $rows['date_created'] ?>" readonly required>
                        </div>
                        <div class="form-group col-12">
                            <button class="btn btn-success" type="submit" name="btnupdate2">บันทึก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>