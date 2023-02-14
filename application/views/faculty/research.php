<?php 
if ($this->session->userdata('user_id') != "") {
    $uid = $this->session->userdata('user_id');
} else {
    $uid = $about_me[0]['id'];
}
echo $header;
?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 200px; height: 200px;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .cstm_gllery {float: left; display: inline;}
    .cstm_gllery img {padding: 12px; border-radius: 50%; height: 313px;}
    .cstm_gllery h3, p {text-align: center;}
    .modal-content {padding: 30px}
    .modal-lg, .modal-xl {--bs-modal-width: 90% !important;}
    .cstm_details {float: left; display: inline-block;}
    .portfolio-details .portfolio-info h3{margin-bottom: 0 !important; padding-bottom: 0 !important; border-bottom: none !important;}
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {max-width: 1440px !important;}
    .cslm_crnt_open ul { list-style-type: disc !important; padding-left:1em !important; margin-left:1em;}
    .cstmf_gllery {float: left; display: inline;}
    .cstmf_gllery img {padding: 12px;}
    .profile_menu a {color: #FFF; text-decoration: none;}
    .active {background: #032851 !important; color: #fff !important;}
    .btn {padding: 15px 35px !important;}
</style>
<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li>Portfolio Details</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <!-- <h3 style="text-transform: capitalize">Welcome <?php echo $about_me[0]['fname'];?></h3>
                        <p style="text-transform: capitalize">Welcome <?php echo $about_me[0]['designation'];?></p> -->
                        <div class="row">
                            <div class="col-12 profile_menu" style="text-align:center">
                                <!-- Tab navs -->
                                <a href="<?php echo base_url()?>faculty/dashboard/<?php echo $uid?>"><button type="button" class="btn btn-primary active">Home</button></a>
                                <a href="<?php echo base_url()?>faculty/research/<?php echo $uid?>"><button type="button" class="btn btn-primary">Research</button></a>
                                <?php if(!empty($publications)) { ?>
                                <a href="<?php echo base_url()?>faculty/publication/<?php echo $uid?>"><button type="button" class="btn btn-primary">Publication</button></a>
                                <?php } ?>
                                <?php if(!empty($project)) { ?>
                                <a href="<?php echo base_url()?>faculty/projects/<?php echo $uid?>"><button type="button" class="btn btn-primary">Projects</button></a>
                                <?php } ?>
                                <?php if(!empty($lab_member)) { ?>
                                <a href="<?php echo base_url()?>faculty/lab_members/<?php echo $uid?>"><button type="button" class="btn btn-primary">Lab Members</button></a>
                                <?php } ?>
                                <?php if(!empty($copening)) { ?>
                                <a href="<?php echo base_url()?>faculty/current_opening/<?php echo $uid?>"><button type="button" class="btn btn-primary">Current Openings</button></a>
                                <?php } ?>
                                <?php //if(!empty($experience)) { ?>
                                <a href="<?php echo base_url()?>faculty/miscellaneous/<?php echo $uid?>"><button type="button" class="btn btn-primary">Miscellaneous</button></a>
                                <?php //} ?>
                                <?php if ($this->session->userdata('user_id') != '') { ?>
                                <a href="<?php echo base_url()?>faculty/logout"><button type="button" class="btn btn-primary">Logout</button></a>
                                <?php } ?>
                                <!-- Tab navs -->
                            </div>
                            <!-- Research Start -->
                            <section id="features" class="features section-bg">
                                <div class="container">
                                    <div class="section-title">
                                        <h2 data-aos="fade-in">Research Highlights</h2>
                                    </div>
                                    <div class="row content">
                                        <div class="col-md-5" data-aos="fade-right">
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-1.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7 pt-4" data-aos="fade-left">
                                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
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
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-2.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                                            <h3>Corporis temporibus maiores provident</h3>
                                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            </p>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row content">
                                        <div class="col-md-5" data-aos="fade-right">
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-3.svg" class="img-fluid" alt="">
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
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-4.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                                            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            </p>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Research End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
<?php echo $footer?>