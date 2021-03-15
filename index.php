<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="boostrap/jquery-3.6.0.min.js"></script>
    <script src="boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
    <title>Welcome to Internet Management</title>
    <style>
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;

        }

        .footer span {
            font-size: 16pt;
        }
    </style>
</head>

<body>
    <?php include "./include/navbar_welcome.php" ?>
    <div class="container w-50 mt-4">
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h2>
                    ระบบการบริหารจัดการข้อมูลผู้ใช้งานระบบอินเตอร์เน็ต
                </h2>
            </div>
            <div class="card-body">
                <form action="controllers/authen.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">รหัสผ่าน</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <button class="btn btn-info" type="submit" name="btnlogin">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer bg-info">
        <center>
            <span class="text-white">วิทยาลัยชีวศึกษาเชียงราย เทคโนโลยีสารสนเทศ <a href="./admin/index.php" class="text-danger">[ ADMIN ]</a></span>
        </center>
    </footer>
</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="boostrap/jquery-3.6.0.min.js"></script>
    <script src="boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
    <title>Welcome to Internet Management</title>
    <style>
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 50px;

        }

        .footer span {
            font-size: 16pt;
        }
    </style>
</head>

<body>
    <?php include "./include/navbar_welcome.php" ?>
    <div class="container w-50 mt-4">
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h2>
                    ระบบการบริหารจัดการข้อมูลผู้ใช้งานระบบอินเตอร์เน็ต
                </h2>
            </div>
            <div class="card-body">
                <form action="controllers/authen.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">รหัสผ่าน</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <button class="btn btn-info" type="submit" name="btnlogin">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer bg-info">
        <center>
            <span class="text-white">วิทยาลัยชีวศึกษาเชียงราย เทคโนโลยีสารสนเทศ <a href="./admin/index.php" class="text-danger">[ ADMIN ]</a></span>
        </center>
    </footer>
</body>

>>>>>>> e8b43c166621b7d3706832f51dc8993b156622c9
</html>