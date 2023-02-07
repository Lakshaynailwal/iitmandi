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
                                <a href="<?php echo base_url()?>faculty/dashboard/<?php echo $uid?>"><button type="button" class="btn btn-primary">Home</button></a>
                                <a href="<?php echo base_url()?>faculty/research/<?php echo $uid?>"><button type="button" class="btn btn-primary">Research</button></a>
                                <a href="<?php echo base_url()?>faculty/publication/<?php echo $uid?>"><button type="button" class="btn btn-primary">Publication</button></a>
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
                            
                            <!--Current Openings Start -->
                            <div class="col-12">
                                <div class='col-sm-12'>
                                    <h2 style="text-align: center;">Current Openings</h2>
                                </div>
                            </div>

                            <?php if(!empty($scholeropening)) { ?>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Scholars</h2>
                                    </div>
                                    <div class='col-sm-12 cslm_crnt_open'>
                                        <ul>
                                            <?php foreach($scholeropening as $row) { ?>
                                            <li><?php echo $row['description']?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                            <?php if(!empty($mtechropening)) { ?>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">M.Tech (R)</h2>
                                    </div>
                                    <div class='col-sm-12 cslm_crnt_open'>
                                        <ul>
                                            <?php foreach($mtechropening as $row) { ?>
                                            <li><?php echo $row['description']?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($pstuffopening)) { ?>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Project Staff</h2>
                                    </div>
                                    <div class='col-sm-12 cslm_crnt_open'>
                                        <ul>
                                            <?php foreach($pstuffopening as $row) { ?>
                                            <li><?php echo $row['description']?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($this->session->userdata('user_id') != '') { ?>
                            <div class="col-sm-12" style="text-align: right;">
                                <button type="button" class="btn btn-primary opening_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg5">Add New Record</button>
                            </div>
                            <?php } ?>
                            <!-- Current Openings End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
<div class="modal fade bd-example-modal-lg5 opening_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_opening" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-12 cstm_details">
                                    <label for="Event Name" class="control-label">Position For</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control" id="position" name="position">
                                            <option value="" >Select Position</option>
                                            <option value="1" <?php if(@$research_category['position']==1){ echo "selected"; } ?>>Scholars</option>
                                            <option value="2" <?php if(@$research_category['position']==2){ echo "selected"; } ?>>M.Tech (R)</option>
                                            <option value="3" <?php if(@$research_category['position']==3){ echo "selected"; } ?>>Project Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 cstm_details">
                                    <label for="Event Name" class="control-label">Description</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <textarea class="form-control required" id="codescription" name="codescription"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 cstm_details">
                                    <label for="Event Name" class="control-label">Status</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control" id="opening_status" name="opening_status">
                                            <option value="1" <?php if(@$research_category['opening_status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="2" <?php if(@$research_category['opening_status']==2){ echo "selected"; } ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <input class="btn btn-primary exp_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                        <input type="hidden" id="copeningid" name="copeningid">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $footer?>