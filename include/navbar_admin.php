<nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
    <a href="./manage.php" class="navbar-brand">ยินดีต้อนรับ <?php echo $_SESSION['name']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="users.php" class="nav-link active">จัดการชื่อผู้ใช้งาน</a>
            </li>
            <li class="nav-item">
                <a href="usergen.php" class="nav-link active">เพิ่มผู้ใช้งานอัตโนมัติ</a>
            </li>
            <li class="nav-item">
                <a href="history.php" class="nav-link active">ประวัติการใช้งานรวม</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="changpass.php" class="nav-link active">เปลี่ยนรหัสผ่าน</a>
            </li>
            <li class="nav-item">
                <a href="../controllers/authen.php?logout" class="nav-link active">ออกจากระบบ</a>
            </li>
        </ul>
    </div>
</nav>