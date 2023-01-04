<!DOCTYPE html>

<?php
require("header.php");
?>
<html>




<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    <div class="header-bottom sticky-header">
        <div class="row" style="margin-left: 0px">
            <p>Chào mừng Quý khách !</p>
            <p>Dưới đây là chi tiết thông tin bảo hành các sản phẩm, SunPhone luôn nỗ lực để Quý khách hài lòng và tin tưởng khi mua hàng</p>
            <p>Chân thành cảm ơn và mong được phục vụ Quý khách!</p>
        </div>
        <div class="container row col-lg-12" style="border-top-style: solid">
            <div class="w3-bar-block col-lg-3">
                <h5 class="w3-bar-item"></h5>
                <button class="w3-bar-item w3-button tablink" onclick="openTab(event, 'Csdt')">I.Đổi mới 30 ngày miễn phí</button>
                <button class="w3-bar-item w3-button tablink" onclick="openTab(event, 'Csbh')">II.Bảo hành tiêu chuẩn</button>
            </div>

            <div class="col-lg-9" style="border-left-style: solid">

                <div style="text-align: center">CHÍNH SÁCH BẢO HÀNH</div>

                <div id="Csdt" class="w3-container policy" style="display:none">
                    <h2>Chính sách đổi trả</h2>
                    <p>Khi mua sản phẩm tại Cellphones.com.vn, khách hàng có quyền hoàn toàn yên tâm với sản phẩm chính hãng, 
                        được bảo hành chính thức tại hãng và ngoài ra có thêm chính sách đổi mới miễn phí lên tới 30 ngày tại CellphoneS</p>
                    <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
                </div>

                <div id="Csbh" class="w3-container policy" style="display:none">
                    <h2>Chính sách bảo hành</h2>
                    <p>Paris is the capital of France.</p> 
                    <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
                </div>

                
            </div>     
        </div>
    </div>

<script>
function openTab(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("policy");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html>
<?php
require("footer.php");
?>