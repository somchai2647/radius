<?php
session_start();
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
                <b>เปลี่ยนรหัสผ่าน</b>
            </div>
            <div class="card-body">
                <form action="../controllers/authen.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="old_password">รหัสผ่านเดิม</label>
                            <input type="password" name="old_password" id="old_password" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="new_password1">รหัสผ่านใหม่</label> <span id="warning"></span>
                            <input type="password" name="new_password1" id="new_password1" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="new_password2">รหัสผ่านใหม่ (อีกครั้ง)</label>
                            <input type="password" name="new_password2" id="new_password2" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-danger" name="chgpass2" id="chgpass" disabled>บันทึก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#new_password1,#new_password2').on('keyup keypress blur change', function() {
                let pass1 = $('#new_password1').val();
                let pass2 = $('#new_password2').val();
                if (pass1 == pass2 && pass1 && pass2) {
                    $('#chgpass').prop('disabled', false);
                    $('#warning').text("รหัสผ่านตรงกัน");
                    $('#warning').removeClass("text-danger");
                    $('#warning').addClass("text-success");
                } else {
                    $('#chgpass').prop('disabled', true);
                    $('#warning').text("รหัสผ่านไม่ตรงกัน");
                    $('#warning').addClass("text-danger");
                    $('#warning').removeClass("text-sucess");
                }
                if (!pass1 && !pass2) {
                    $('#warning').text("");
                }
            });
        });
    </script>
</body>

</html>