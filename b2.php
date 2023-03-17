<center>
    <img src="https://kenh14cdn.com/thumb_w/620/2018/3/17/32-1521251291968403012395.JPG" alt="">
    <div>Kết quả sau khi nhấn<i>Click here</i></div>
    <?php
        session_start();
        echo "Xin chào ". $_SESSION["name"] ."<br>";
        echo "Tên đăng nhập " .$_SESSION['nameDN'];
    ?>
    <br>
    <a href="b1.php">Quay lại trang chủ</a>
 </center>