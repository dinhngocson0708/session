<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #tb1{
            background-color: brown;
            color: white;
        }
        #tb2{
            width: 300px;
            color: white;
            background-color: brown;
        }
    </style>
</head>
<body>
    <?php

        session_start();
        $check=0;
        if(!empty($_POST['name']&& !empty($_POST['email']) && !empty($_POST['nameDN']) &&!empty($_POST['password']))){
        $check=1;
        $_SESSION["name"]=$_POST['name'];
        $_SESSION["email"]=$_POST['email']; 
        $_SESSION["nameDN"]=$_POST['nameDN']; 
        $_SESSION["MK"]=$_POST['password']; 
        }
    ?>
    <center>
    <div>THÔNG TIN ĐĂNG NHẬP</div>
    <form action="" method="post">
        <table id="tb1">
        <tr>
            <td>Họ và tên:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Tên đăng nhập:</td>
            <td><input type="text" name="nameDN"></td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit"></td>
        </tr>
        </table>
       
    </form>
    <br>
    <br>
    
    <div id="tb2" >
        <?php 
            if($check==1){
        ?>
            <table id="tb2">
                <tr>
                    <td>Xin chào <?php echo $_SESSION["name"] ?>
                
                        <br>
                            Email:
                            <?php echo $_SESSION["email"]?> 
                        <br>
                            Tên dăng nhập:
                            <?php echo $_SESSION["nameDN"]?> 
                        <br>
                        
                            Mật khẩu:
                            <?php echo $_SESSION["MK"]?>
                        <br>
                            <a href="b2.php">Click here</a>
                    </td>
                </tr>

            </table>
        <?php
        }
        ?>
        </div>
   
    
    </center>
 
</body>
</html>