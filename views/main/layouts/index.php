<?php
  include_once('views/main/navbar.php');
?>
  <!-- <style>
		.carousel-item img {
			width: 100%;
			height: 485px;
			object-fit: contain;
		}

    @media (min-width: 576px) {
			.carousel-item img {
				height: 400px;
			}
		}

		@media (min-width: 768px) {
			.carousel-item img {
				height: 500px;
			}
		}

		@media (min-width: 992px) {
			.carousel-item img {
				height: 600px;
			}
		}
	</style>
  <div class="container mt-5">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_3.jpg?1668074220953" alt="Slide 1">
				</div>
				<div class="carousel-item">
					<img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_2.jpg?1668074220953" alt="Slide 2">
				</div>
				<div class="carousel-item">
					<img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_1.jpg?1668074220953" alt="Slide 3">
				</div>
			</div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>  
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
		</div>
	</div> -->

    <div id="advertisement-product"class="container-fluid d-block" style="margin-top: 60px;">
      <div class="row banner">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_3.jpg?1668074220953" class="d-block w-100" alt="..." style="width: 100%; object-fit: cover; object-position: center;">
              </div>
              <!-- object-fit: cover; -->
              <!-- <div class="carousel-item">
                <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_2.jpg?1668074220953" class="d-block w-100" alt="..." style="width: 100%; height: 100%; object-position: center;"> 
              </div>
              <div class="carousel-item">
                <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_1.jpg?1668074220953" class="d-block w-100" alt="..." style="width: 100%; height: 100%; object-position: center;">
              </div> -->
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <main id="main" style="margin-top: 20px;">
    
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up "  style="box-shadow: 0 5px 10px rgba(0,0,0,.2);">

        <div class="row content" >
          <div class="container px-4 px-lg-6">
          <div class="row m-4">
              <h2 class="text-center mt-3" ><span class="green" style="color:#337Dff">NEW GEN</span> - <span class="fw-bold">NÂNG NIU VÓC DÁNG VIỆT</span></h2><br>
        
          <p class = "text-center">
            <span class="fw-bold">Fashion for GEN Z - Thời trang năng động cho giới trẻ</span>
          <p class="fst-italic justify-content">
            <span style="display: flex; justify-content: center; align-items: center;">
              <img src="assets/images/Z.webp" alt="" style="width: 15%; height: auto; object-position: center;">
            </span>
            <br>
            Logo thiết kế với chữ Z biểu thị cho Gen Z - nhóm đối tượng mà chúng tôi muốn hướng đến. Tượng trưng cho sự đơn giản nhưng không hề lỗi thời, hoặc đôi khi là một chút phá cách.
          </p>
          <p class="fst-italic">Thiết kế lấy màu xanh là màu chủ đạo </p>
            <ul class="fst-italic">
                <li class="justify-content">Màu xanh là màu của biển cả, bầu trời là màu của cuộc sống vui tươi, lạc quan, ấm áp, giàu sang và thịnh vượng. <span class="fw-bold">Đây là mục tiêu mà nhóm hướng đến.</span></li>
            </ul>
          </p>
          </div>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
    <div id="about">

    </div>
    <div id="news" onclick="window.location.href='/BigFarm/index.php?page=main&controller=blog&action=index'">
    </div>
    <div id="contact" onclick="window.location.href='/BigFarm/index.php?page=main&controller=contact&action=index'" style=" box-shadow: 0 5px 10px rgba(0,0,0,.2);">

    </div>
    <script>
      $(function(){
        $("#about").load("http://localhost/BigFarm/index.php?page=main&controller=about&action=index #about-page"); 
      });
      $(function(){
        $("#news").load("http://localhost/BigFarm/index.php?page=main&controller=blog&action=index #blog"); 
      });
      $(function(){
        $("#contact").load("http://localhost/BigFarm/index.php?page=main&controller=contact&action=index #contact"); 
      });
    </script>
 
  </main><!-- End #main -->

  <?php
include_once('views/main/footer.php');
?>
