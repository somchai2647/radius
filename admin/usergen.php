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
    <div class="container w-50 mt-4">
        <div class="card shadow">
            <div class="card-header bg-danger text-white">
                <b>เพิ่มผู้ใช้งานอัตโนมัติ</b>
            </div>
            <div class="card-body">
                <form action="../controllers/usergen.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group col-12 col-md-3">
                            <label for="number">จำนวน</label>
                            <input type="number" name="number" id="number" class="form-control" value="1" min="1" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-3">
                            <label for="group">กลุ่มผู้ใช้งาน</label>
                            <select name="group" id="group" class="form-control">
                                <?php
                                $sql = "SELECT * FROM `radgroupcheck`";
                                $result = query($sql);
                                while ($rows = $result->fetch()) { ?>
                                    <option value="<?php echo $rows['groupname'] ?>"><?php echo $rows['groupname'] ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success" name="gen">เพิ่ม</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>