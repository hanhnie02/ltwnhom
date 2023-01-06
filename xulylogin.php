
<?php
 
   $user = $_POST['user'];
   $password = $_POST['password'];
   $conn = mysqli_connect("localhost","root","","sunphone");
  
   $sql = "select *from admin where user ='$user' and password = '$password'";
   
  $total = mysqli_query($conn , $sql);
  if (mysqli_num_rows($total)>0)
  {  
     $row = mysqli_fetch_array($total);
   
    if($row['level']==1){
      echo '<script language="javascript">alert("Đăng nhập thành công"); window.location="http://localhost:80/ltwnhom/AdminContent.php";</script>';
    }else if($row['level']==2)
    {
        //Có thể tạo thêm lv2 của khách hàng hoặc dùng 1 lv thôi
        // Thêm 1 trang nào đó vô
    }else{  
        
    } 
  }
  else{
    echo "
    <script>
    alert('Tên đăng nhập hoặc mật khẩu sai');
    </script>
    ";
   require_once'index.php';
  }
?>