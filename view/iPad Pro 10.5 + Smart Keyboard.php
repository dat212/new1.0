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
              <li class="active">apple</li>
            </ol>
            <h1>iPad Pro 10.5 + Smart Keyboard</h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Tablet</a> </div>
            <div class="single_page_content"> 
              <img class="img-center" src="images/iPad Pro 10.5 + Smart Keyboard.jpg" alt="">
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
              <blockquote> Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus. </blockquote>
              <ul>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
              </ul>
             
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