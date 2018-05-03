<!DOCTYPE html>
<html>
<head>
	<title>NewsFeed</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font.css">
	<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style type="text/css">
		a,h1  {
			font-family: "arial" !important;
		}
	</style>
</head>
<body onload="setRootCategory(); setLatestPost(); setChildCategory();setCategorySidebar();setContentPost();">

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<div class="container">
<p style="" id="slug"><?php echo basename($_SERVER['SCRIPT_FILENAME']); ?></p>
<?php
include 'header.php';
include 'navArea.php';
include 'newsSection.php';
?>
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="../index.html">Home</a></li>
              <li><a href="#">Tablets</a></li>
              <li class="active">Mac</li>
            </ol>
            <h1>Huawei MediaPad M5: Đánh dấu xu hướng tablet mới
            </h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Tablets</a> </div>
            <div class="single_page_content"> 
              <img class="img-center" src="images/Huawei MediaPad M5_Đánh dấu xu hướng tablet mới.jpg" alt="">
              <p>Quan trọng hơn, thay vì sử dụng màn hình với nhiều hạn chế, MacBook Air mới của Apple sẽ có kích thước 13,3 inch cùng công nghệ màn hình Retina cao cấp như nhiều MacBook Pro hiện nay. Điều này cho phép màn hình hiển thị độ phân giải 2560 x 1600 pixel cho hình ảnh sắc nét hơn. Đây là loại màn hình được tạo ra bởi LG Display thay vì tấm nền giá rẻ từ các công ty Trung Quốc.</p>
              <blockquote> Bên trong sản phẩm đi kèm bộ xử lý Core i5 kết hợp RAM 8 GB như là tiêu chuẩn. Kết hợp tất cả những điều này lại khiến MacBook Air mới của Apple sẽ có mức giá khởi điểm tương tự hoặc thậm chí cao hơn so với MacBook Air hiện tại, vốn là 999 USD. Được biết giá khởi điểm dành cho MacBook 12 inch là 1299 USD, tương tự MacBook Pro 13 inch.

Quanta Computer và Foxconn Electronics được cho là đối tác sản xuất máy tính xách tay mới của Apple với hoạt động sản xuất dự kiến ​​bắt đầu vào cuối tháng 5 hoặc đầu tháng 6, do đó khả năng công ty bắt đầu bán thiết bị vào cuối quý 2/2018.

Theo Digitimes, Apple có những mục tiêu bán hàng đầy tham vọng cho máy tính xách tay mới này. Có vẻ như công ty dự kiến bán ra 6 triệu chiếc MacBook Air mới trong năm nay, mặc dù giới phân tích cho rằng con số này có thể thấp hơn, chỉ khoảng 4 triệu chiếc.. </blockquote>
              
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="images/Envy X2_Laptop ARM HP đầu tiên chạy Windows 10.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Envy X2: Laptop ARM HP đầu tiên chạy Windows 10</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="images/Đây là công nghệ sẽ làm nên tên tuổi  iPhone X giá rẻ sắp ra mắt.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Đây là công nghệ sẽ làm nên tên tuổi  iPhone X giá rẻ sắp ra mắt</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="images/HP ZBook 15_ kẻ thay thế xứng đáng cho EliteBook Mobile Workstation.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> HP ZBook 15_ kẻ thay thế xứng đáng cho EliteBook Mobile Workstation</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
        <div>
          <h3>City Lights</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
        <div>
          <h3>Street Hills</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> </nav>
<?php
include 'sidebarContentSection.php';
include 'footer.php';

?>

</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
<script src="ajax/setRootCategory.js"></script>
<script src="ajax/setLatestPost.js"></script>
<script src="ajax/setChildCategory.js"></script>
<script src="ajax/setCategorySidebar.js"></script>
<script src="ajax/setMainContent.js"></script>
<script src="ajax/setContentPost.js"></script>
</body>
</html>