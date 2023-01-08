<!DOCTYPE html>
<html lang="en">
<?php
require("header.php");
?>


<body>

    <div class="page-wrapper">

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets//images/banners/tett.png')">
        		<div class="container">
        			<h1 class="page-title">Lịch sử mua hàng<span>Sun Phone</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" style=" font-family: roboto"><a href="index.php" >Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style=" font-family: roboto">Lịch sử mua</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						
							<div class="row">
								<?php
								if(isset($_SESSION['dangnhap_home'])){
									echo 'Đơn hàng : '.$_SESSION['dangnhap_home'];
								} 
								?>
							<div class="col-md-12">
								
								<?php
								if(isset($_GET['id'])){
									$id_khachhang = $_GET['id'];
								}else{
									$id_khachhang = '';
								}
								$sql_select = mysqli_query($conn,"SELECT giaodich.donhang_id, ten_sp, giaodich.soluong, ngaythang , hinh_anh, gia FROM giaodich, khachhang, sanpham, donhang WHERE giaodich.sanpham_id=sanpham.sanpham_id AND khachhang.khach_id=giaodich.khach_id and donhang.donhang_id = giaodich.donhang_id" ); 
								?> 
								<table class="table table-bordered ">
									<tr>
										<th>Thứ tự</th>
										<th>Mã giao dịch</th>
                                        <th>Ảnh sản phẩm</th>
										<th>Ngày đặt</th>
										<th>Tên sản phẩm</th>
										<th>Số lượng</th>
										<th>Giá</th>
									</tr>
									<?php
									$i = 0;
									while($row_donhang = mysqli_fetch_array($sql_select)){ 
										$i++;
									?> 
									<tr>
										<td><?php echo $i; ?></td>
										
										<td><?php echo $row_donhang['donhang_id']; ?></td>
                                        <td><img style="width: 50px;height: 50px;" src="assets/<?php echo $row_donhang["hinh_anh"];?>"></td>

										
										<td><?php echo $row_donhang['ngaythang'] ?></td>
										<td><?php echo $row_donhang['ten_sp']?></td>
										<td><?php echo $row_donhang['soluong']?></td>
										<td><?php echo ($row_donhang['gia'])?></td>
									</tr>
									 <?php
									} 
									?> 
								</table>
							</div>


							</div>

						
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				
			</div>
		</div>
	</div>
	        </main><!-- End .main -->

<?php
require("footer.php");
?>
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>