<!DOCTYPE html>
<?php 
require("header.php");
?>

<html>
 <style>
    p,tr,h2,a {
        font-family: roboto;
        color: black;
    }
    
    .table td{
        padding:8px 8px;
    }
 </style>
<body>
<main class="main" >
        <div class="page-content" >
        <div class="container">
            <div class="row">
                <div class="col-12" >
                    <p style="margin: 15px 15px">Chào mừng Quý khách! <br> Dưới đây là chi tiết thông tin bảo hành các sản phẩm, <a href="index.php" style="color: #fcb941">SunPhone</a> luôn nỗ lực để Quý khách hài lòng và tin tưởng khi mua hàng.
                       <br> Chân thành cảm ơn và mong được phục vụ Quý khách!</p>
                	<h2 style="margin: 15px 15px; text-align:center" >CHÍNH SÁCH BẢO HÀNH</h2><!-- End .title mb-3 -->
                </div><!-- End .col-12 -->
                		<div class="tabs-vertical">
		            		<ul class="nav nav-tabs nav-tabs-bg flex-column" id="tabs-7" role="tablist" style="background-color:">
								<li class="nav-item">
								    <a class="nav-link active" id="tab-25-tab" data-toggle="tab" href="#tab-25" role="tab" aria-controls="tab-25" aria-selected="true">Đổi mới 30 ngày miễn phí</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="tab-26-tab" data-toggle="tab" href="#tab-26" role="tab" aria-controls="tab-26" aria-selected="false">Bảo hành tiêu chuẩn</a>
								</li>
							</ul>
								<div class="tab-content tab-content-border" id="tab-content-7" >
								    <div class="tab-pane fade show active" id="tab-25" role="tabpanel" aria-labelledby="tab-25-tab">
								    	<p>Khi mua sản phẩm tại SunPhone, khách hàng có quyền hoàn toàn yên tâm với sản phẩm chính hãng, được bảo hành chính thức tại hãng và ngoài ra có thêm chính sách đổi mới miễn phí lên tới 30 ngày tại SunPhone</p>
                                        <!-- <table class="table table-bordered">
                                            <thead>
                                                <tr class="success">
                                                    <th style="text-align: center;"> <span style="font-size: 14px;">
                                                        <strong>Loại sản phẩm</strong> </span>
                                                    </th>
                                                    <th style="text-align: center;"><span style="font-size: 14px;">
                                                        <strong>Đổi mới miễn phí (*)</strong></span>
                                                    </th>
                                                    <th style="text-align: center;"><span style="font-size: 14px;">
                                                        <strong>Quy định nhập lại, trả lại</strong></span>
                                                    </th></tr>
                                            </thead> 
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: left;"><span style="font-size: 14px;">Điện thoại</span></td> 
                                                    
                                                    <td style="text-align: center;"><span style="font-size: 14px;">30 ngày</span></td> 
                                                    
                                                    <td style="text-align: left;"><span style="font-size: 14px;">- Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: 14px;">- Sau 30 ngày nhập lại máy theo giá thoả thuận</span></td>    
                                                </tr>
                                                
                                                <tr><td style="text-align: left;"><span style="font-size: 14px;">Bảo hành mở rộng</span></td> <td style="text-align: center;"><span style="font-size: 14px;">15 ngày</span></td> <td style="text-align: left;"><span style="font-size: 14px;">Trong 7 ngày đầu, máy không lỗi, khách hàng trả lại gói BHMR</span><br><span style="font-size: 14px;">&gt; Nhập lại trừ phí 50% gói BHMR</span></td></tr>
                                            </tbody>
                                        </table> -->

                                        <table class="table table-striped table-bordered" >
                                            <thead >
                                                <tr style="text-align:center; background-color:tomato;font-size: 20px; font-family: roboto; color: black">
                                                <th style="font-size: 20px; font-family: roboto; color: black">THÁNG 1</th>
                                                <th style="font-size: 20px; font-family: roboto; color: black">THÁNG 2-12</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr style="text-align:center">
                                                <td colspan="2">Sản phẩm lỗi do nhà sản xuất</td>
                                                </tr>
                                                <tr>
                                                <td> Miễn phí đổi sản phẩm tương đương: cùng model, cùng dung lượng, cùng thời gian bảo hành…<br>
                                                Trường hợp không có sản phẩm tương đương, SunPhone hoàn lại tiền 100%
                                                </td>
                                                <td>SunPhone gửi máy đi bảo hành theo chính sách của hãng hoặc bảo hành của SunPhone
                                                </td>
                                                </tr>

                                                <tr style="text-align:center">
                                                <td colspan="2">Sản phẩm không lỗi</td>
                                                </tr>

                                                <tr>
                                                <td colspan="2">Không áp dụng đổi trả</td>
                                                </tr>

                                                <tr style="text-align:center">
                                                <td colspan="2">Sản phẩm lỗi do người sử dụng</td>
                                                </tr>

                                                <tr>
                                                <td colspan="2"><strong> Không áp dụng đổi trả</strong> với sản phẩm:<br>
                                                - Máy không còn giữ nguyên 100% hình dạng ban đầu, bao gồm: có dấu hiệu va chạm mạnh, cấn móp, bị vào nước...<br>
                                                - Không đủ điều kiện bảo hành theo chính sách của hãng.<br>
                                                Trong trường hợp này, SunPhone hỗ trợ chuyển TTBH và khách hàng chịu phí sửa chữa.
                                                </td>
                                                </tr>

                                            </tbody>
                                        </table>
								    </div><!-- .End .tab-pane -->
								    <div class="tab-pane fade" id="tab-26" role="tabpanel" aria-labelledby="tab-26-tab" >
                                    <p><span style="font-size: 14px;"><strong>1.&nbsp;</strong><strong>Sản phẩm áp dụng:</strong> Điện thoại</span><br><span style="font-size: 14px;"><strong>2.&nbsp;</strong><strong>Thời gian bảo hành:</strong> 06 tháng/12 tháng</span><br><span style="font-size: 14px;"><strong>3.&nbsp;</strong><strong>Điều kiện bảo hành:</strong></span></p>
								    <p><span style="font-size: 14px;">Sản phẩm bị lỗi do nhà sản xuất.</span></p>
                                    <p><span style="font-size: 14px;">Việc kiểm tra và xác định lỗi do nhà sản xuất được thực hiện bởi Trung Tâm Bảo Hành của SunPhone hoặc Trung tâm bảo hành của nhà sản xuất.</span></p>
                                    <p><span style="font-size: 14px;"><strong>4.&nbsp;</strong><strong>Quyền lợi bảo hành:</strong></span></p>
                                    <p><span style="font-size: 14px;"><strong>4.1&nbsp;Đổi sản phẩm sau khi sản phẩm được kiểm tra và xác định đúng bị lỗi phần cứng phát sinh từ phía nhà sản xuất:</strong></span></p>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="success"><td style="text-align: center;"><p><span ><strong>Phạm vi bảo hành</strong></span></p></td> <td style="text-align: center;"><p><span ><strong>Bảo hành tiêu chuẩn</strong></span></p></td> <td style="text-align: center;"><p><span ><strong>BH 1 đổi 1 - VIP</strong></span></p></td></tr> <tr><td><p><span >Mainboard (lỗi nguồn), ổ cứng</span></p></td> <td><p><span >-&nbsp;&nbsp;&nbsp; Bảo hành sửa chữa</span></p> <p><span >-&nbsp;&nbsp;&nbsp; Riêng iPhone mới: 1 đổi 1 theo quy định</span></p> <p><span >-&nbsp;&nbsp;&nbsp; Sản phẩm đổi là sản phẩm tồn kho/chưa, đã kích hoạt/ cũ</span></p></td> <td><p><span >1 đổi 1</span></p></td></tr> <tr><td><p><span >Màn hình cảm ứng (&gt;= 3 điểm chết hoặc kích thước điểm chết &gt;= 1mm)</span></p></td> <td rowspan="2"><p><span >Bảo hành sửa chữa</span></p></td> <td rowspan="2"><p><span >1 đổi 1</span></p></td></tr> <tr><td><p><span >Các lỗi linh kiện: camera (trước/sau), loa (trong/ngoài), chip wifi, mic thoại, đèn flash …</span></p></td></tr> <tr><td><p><span >Lỗi chân sim, chân khe cắm thẻ nhớ, chân sạc</span></p></td> <td><p><span >Không bảo hành</span></p></td> <td><p><span >Bảo hành sửa chữa</span></p></td></tr> <tr><td><p><span >Pin và phím bấm vật lý bên ngoài hư hỏng, không hoạt động (âm lượng, phím nguồn…)</span></p></td> <td><p><span >Bảo hành sửa chữa 3 Tháng</span></p> <p><span >(Pin iPhone cũ: 6 tháng)</span></p></td> <td><p><span >1 đổi 1 trong 12 Tháng</span></p></td></tr></tbody>
                                    </table>
                                    </div><!-- .End .tab-pane -->
								</div><!-- End .tab-content -->
						</div><!-- End .tabs-vertical -->
            </div><!-- End .row -->
        </div><!-- End .col-md-6 -->
</div>
</main>      
</body>
    



</html>
<?php 
require("footer.php");
?>