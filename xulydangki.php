
<?php
 $user = $_POST['user'];
 $password = $_POST['password'];
 $name = $_POST['name'];
 $conn = mysqli_connect("localhost","root","","sunphone");
$sql = "select * from admin  WHERE user = '$user' OR admin_name = '$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Đã tồn tại tài khoản"); window.location="index.php";</script>';    
        // Dừng chương trình
        die ();
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql1="insert into admin(user,password,level,admin_name) values('$user','$password','1',N'$name');";
         
        if (mysqli_query($conn, $sql1)){
            echo '<script language="javascript">alert("Đăng ký thành công! \nHãy đăng nhập"); window.location="index.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="index.php";</script>';
        }
    }

   
	
  

?>