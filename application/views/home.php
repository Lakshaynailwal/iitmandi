  <?php echo $header;?>
  <!-- ======= Hero Section ======= -->
  <section class="hero-section overlay"> 
		<!-- <div class="container"> -->
  		<div class="hero-slider">
        <?php if(!empty($banner)) {
        foreach ($banner as $row){ ?>
  			<div class="hero-slider-item overlay" data-background="<?php echo base_url()?>uploads/banner/<?php echo $row['banner_image']?>" style="background-image: url('<?php echo base_url()?>uploads/banner/<?php echo $row["banner_image"]?>'); width: 1440px; height: 690px; position: relative; left: -1440px; top: 0px; z-index: 999; opacity: 1;">
					<div class="row">
				  	<div class="col-md-8">
				    	<h1 class="hero-section1 text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1"><?php echo $row['banner_title']?></h1>
            </div>
					</div>
  			</div>
        <?php } } ?>
  		</div>
		<!-- </div> -->
	</section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">
        <div class="row gy-4">
          <div class="image col-xl-5" style="background: url('<?php echo base_url()?>uploads/homeabout/<?php echo $home_about[0]["homeabt_img"]?>') center center no-repeat;background-size: cover;"></div>
          <div class="col-xl-7">
            <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
              <h3 data-aos="fade-in" data-aos-delay="100">Welcome to School of Civil and Environmental Engineering</h3>
              <p data-aos="fade-in"><?php echo $home_about[0]["description"]?></p>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
          <div class="col-lg-4 col-md-4 col-6">
            <div class="client-logo">
              <strong class="number">50 </strong><span style="margin-right: 15px;">+</span>
              <i class="bi bi-journals"></i>
              <span style="margin-left: 5px;">Research Publication</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6">
            <div class="client-logo">
              <strong class="number">15</strong><span style="margin-right: 15px;">+</span>
              <i class="bi bi-person-workspace"></i>
              <span style="margin-left: 5px;">Faculty Member</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6">
            <div class="client-logo">
              <strong class="number">09</strong><span style="margin-right: 15px;">+</span>
              <i class="bi bi-building"></i>
              <span style="margin-left: 5px;">Labs</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 d-flex" data-aos="fade-right">
            <div class="card" style="border: 1px solid;">
              <div class="card-img" style="text-align: center">
                <img src="<?php echo base_url()?>uploads/homemessage/<?php echo $home_message[0]["homemsg_img"]?>" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=javascript:void(0)>Message from the School Chair</a></h5>
                <p class="card-text"><?php echo $home_message[0]['description']?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex" data-aos="fade-left">
            <div class="card" style="border: 1px solid;">
              <div class="card-img">
              <h4 class="card-title">News & Announcement</h4>
                <div class="Scroll">
                  <div class="main" id="section1">
                    <h5><a href="">Section 1</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                  <div class="main" id="section1">
                    <h5><a href="">Section 2</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                  <div class="main" id="section1">
                    <h5><a href="">Section 3</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                  <div class="main" id="section1">
                    <h5><a href="">Section 4</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                  <div class="main" id="section1">
                    <h5><a href="">Section 5</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                  <div class="main" id="section1">
                    <h5><a href="">Section 6</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                  <div class="main" id="section1">
                    <h5><a href="">Section 7</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in">Research Highlights</h2>
        </div>
        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/fontend/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/fontend/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/fontend/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/fontend/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->
  </main>
  <!-- End #main -->
  <?php echo $footer;?>