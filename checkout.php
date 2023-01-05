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
        			<h1 class="page-title">Thanh toán<span>Sun Phone</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" style=" font-family: roboto"><a href="index.php" >Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style=" font-family: roboto">Thanh toán</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<form action="#">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title" style=" font-family: roboto">Chi tiết hóa đơn</h2><!-- End .checkout-title -->
									<label style=" font-family: roboto">Họ tên *</label>
	            						<input style=" font-family: roboto" type="text" class="form-control" required>

										<label style=" font-family: roboto">Email *</label>
	        							<input type="email" class="form-control" required>


	            						<label style=" font-family: roboto">Địa chỉ *</label>
	            						<input style=" font-family: roboto" type="text" class="form-control" placeholder="Số nhà, xóm, phường.... " required>

	                					<label style=" font-family: roboto">Số điện thoại *</label>
	        							<input type="number" class="form-control" required>

	                					<label style=" font-family: roboto">Ghi chú: </label>
	        							<textarea style=" font-family: roboto" class="form-control" cols="30" rows="4" placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: vấn đề giao hàng...."></textarea>
										<div class="cart-bottom">
											<div class="cart-discount">
												<form action="#" method="post">
													<div class="input-group">
														<input type="text" class="form-control" name ="giamgia" required placeholder="mã giảm giá">
														<div class="input-group-append">
															<button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
														</div><!-- .End .input-group-append -->
													</div><!-- End .input-group -->
												</form>
											</div><!-- End .cart-discount -->
											
                                </div><!-- End .cart-bottom -->

		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title" style=" font-family: roboto">Đơn hàng của bạn</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th style=" font-family: roboto">Sản phẩm</th>
		                							<th style=" font-family: roboto">Tổng</th>
		                						</tr>
		                					</thead>

		                					<tbody>
											<?php foreach ($cart as $key => $value) :?>

		                						<tr>
		                							<td><a href="#"><?php echo $value["name"];?></a></td>
		                							<td><?php echo number_format($value["gia"])?><sup>đ</sup></td>
		                						</tr>
											<?php endforeach ?>
		                						</tr>
												<tr class="summary-shipping-row" style=" font-family: roboto">
												<tr class="summary-total" style=" font-family: roboto">
												<?php
												if(isset($GET["giamgia"]))
												{
												if($_GET["giamgia"]=="LIXI2023sun")
												{
													?>
													<td>
															<input type="radio" id="ma" name="ma" class="custom-control-input">
															<label class="custom-control-label" for="ma">Mã giảm giá:</label>
													</td>
													<td>500,000</td>
	
												</tr>
												<tr class="summary-total" style=" font-family: roboto">
													<td>Tổng:</td>
													<td><?php echo number_format($thanhtoan=$_SESSION['tongtien'] +20000-500000) ?></td>
												</tr><!-- End .summary-total -->
												<?php $_SESSION['thanhtoan']=$thanhtoan;?>
	
												<?php
												}
												else{
													?>
													<td>
															<input type="radio" id="ma" name="ma" class="custom-control-input">
															<label class="custom-control-label" for="ma">Mã giảm giá:</label>
													</td>
													<td>0</td>
	
												</tr>
												<tr class="summary-total" style=" font-family: roboto">
													<td>Tổng:</td>
													<td><?php echo number_format($thanhtoan=$_SESSION['tongtien'] +20000) ?></td>
												</tr><!-- End .summary-total --> 
												<?php $_SESSION['thanhtoan']=$thanhtoan;?>
												<?php
												}
											}
												?>
	
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1" style=" font-family: roboto">
										                    Thanh toán chuyển khoản
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment" >
										            <div class="card-body">
													Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn hàng của bạn sẽ không được giao cho đến khi chúng tôi nhận được tiền. Số tài khoản sẽ được gửi vào mail khi bạn click thanh toán.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3" style=" font-family: roboto">
										                    Thanh toán khi nhận được hàng
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">Vui lòng thanh toán cho shipper sau khi bạn nhận và kiểm tra hàng. 
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										</div><!-- End .accordion -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text" style=" font-family: roboto">Đặt hàng</span>
		                					<span class="btn-hover-text" style=" font-family: roboto">Tiến hành thanh toán</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->

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