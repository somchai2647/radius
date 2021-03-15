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
</head>

<body>
    <?php include "./include/navbar_welcome.php" ?>
    <div class="container w-50 mt-4">
        <!-- <h1 class="text-center">ระบบการบริหารจัดการข้อมูลผู้ใช้งานระบบอินเตอร์เน็ต</h1> -->
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h2>
                    สมัครผู้ใช้งานระบบอินเตอร์เน็ต
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
                        <div class="form-group col-12 col-md-6">
                            <label for="name">ชื่อ-นามสกุล</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="tel">เบอร์โทร</label>
                            <input type="text" name="tel" id="tel" class="form-control" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="email">อีเมล</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="address">ที่อยู่</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="memo">หมายเหตุ</label><br>
                            <textarea name="memo" id="memo" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <button class="btn btn-info" type="submit" name="btnreg">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
</head>

<body>
    <?php include "./include/navbar_welcome.php" ?>
    <div class="container w-50 mt-4">
        <!-- <h1 class="text-center">ระบบการบริหารจัดการข้อมูลผู้ใช้งานระบบอินเตอร์เน็ต</h1> -->
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h2>
                    สมัครผู้ใช้งานระบบอินเตอร์เน็ต
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
                        <div class="form-group col-12 col-md-6">
                            <label for="name">ชื่อ-นามสกุล</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="tel">เบอร์โทร</label>
                            <input type="text" name="tel" id="tel" class="form-control" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="email">อีเมล</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="address">ที่อยู่</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="memo">หมายเหตุ</label><br>
                            <textarea name="memo" id="memo" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <button class="btn btn-info" type="submit" name="btnreg">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

>>>>>>> e8b43c166621b7d3706832f51dc8993b156622c9
</html>