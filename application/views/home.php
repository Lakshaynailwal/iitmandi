  <?php echo $header;?>
  <!-- ======= Hero Banner Section ======= -->
   <div id="wowslider-container1">
    <div class="ws_images">
      <ul>
      <?php if(!empty($banner)) {
        foreach ($banner as $row){ ?>
        <li>
          <img src="<?php echo base_url()?>uploads/banner/<?php echo $row['banner_image']?>" alt="jquery slider" title="<?php echo $row['banner_title']?>" id="wows1_0"/>
        </li>
      <?php } } ?>
      </ul>
    </div>
	  <div class="ws_shadow"></div>
  </div>	
  <!-- ======= Hero Banner Section ======= -->

  <main id="main">
    <!-- ======= Welcome Section ======= -->
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
    <!-- End Welcome Section -->

    <!-- ======= Count Section ======= -->
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
    <!-- End Count Section -->

    <!-- ======= Announcement Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 d-flex" data-aos="fade-right">
            <div class="card" style="border: 1px solid;">
              <div class="card-img">
                <div class="school_img">
                  <img src="<?php echo base_url()?>uploads/homemessage/<?php echo $home_message[0]["homemsg_img"]?>" alt="director" height="385" width="385">
                </div>
                <div class="into-inner">
                  <div class="intro">
                  <h3><?php echo $home_message[0]["name"]?></h3>
                  <p style="color: bluw;color: #002a5c;font-size: 25px !important;padding: 0 0 4px;"><?php echo $home_message[0]["designation"]?></p>
                  <p style="color: black;/*! font-size: xx-large; */font-style: initial;"><?php echo $home_message[0]["location"]?></p>
                  </div>
                </div>
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
                <?php if(!empty($news)) {
                foreach ($news as $row){ ?>
                  <div class="main" id="section1">
                    <h5><a href=""><?php echo $row['title']?></a></h5>
                    <p class="card-text"><?php echo $row['description']?></p>
                  </div>
                  <?php } } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Announcement Section -->

    <!-- ======= Research Section ======= -->
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
    <!-- End Research HIGHLIGHTS Section -->

    <!-- ======= Events Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in">Events</h2>
        </div>
        <div class="row justify-content-center">
        <?php if(!empty($events)) {
        foreach ($events as $row){ ?>
          <div class="col-lg-3 col-sm-6 mb-5">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
              <img class="card-img-top rounded-0" src="<?php echo base_url()?>uploads/events/<?php echo $row['event_image']?>" alt="<?php echo $row['title']?>" style="width: 100%; height: 200px;">
              <div class="card-body">
                <ul class="list-inline mb-2">
                  <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo $date = date("D, d M Y", strtotime($row['event_date']));?></li>
                  <!-- <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li> -->
                </ul>
                <a href="#">
                  <h4 class="card-title"><?php echo $row['title']?></h4>
                </a>
                <p class="card-text mb-4"><?php echo $row['location']?></p>
                <a href="course-single.html" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
          </div>
        <?php } } ?>
        </div>
      </div>
    </section>
    <!-- End Events Section -->
  </main>
  <!-- End #main -->
  <?php echo $footer;?>