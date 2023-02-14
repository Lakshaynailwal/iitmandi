<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
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
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <h3 style="text-align:center"><?php echo $title?></h3>
                        <!-- <div class="col-sm-12">
                            <?php if(!empty($scholars)) {
                                $i=1; ?>
                            <?php foreach($scholars as $row) { ?>
                            <div class="col-sm-2" style="border: 1px solid;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999; margin-right: 40px; float: left;">
                                <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row['team_image']?>" alt="">
                                <a href= '<?php echo base_url();?>pages/student_details/<?php echo base64_encode($row['id'])?>'><p style="text-align: center; background: #fff;"><?php echo $row['fname']?><br><small><?php echo $row['designation']?></small></p></a>
                                <p></p>
                            </div>
                            <?php $i++; } } ?>
                        </div> -->
                        <?php if(!empty($designation)) {
                            foreach($designation as $row1) { ?>
                            <h3 style="text-align:center"><?php echo $row1['designation']?></h3>
                            <div class="col-sm-12" style="display: inline-block;">
                            <?php 
                            echo "SELECT * from iitmandi_team WHERE iitmandi_team.position = 3 and iitmandi_team.designation = '".$row1['id']."' and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1";
                                $scholars = $this->db->query("SELECT * from iitmandi_team WHERE iitmandi_team.position = 3 and iitmandi_team.designation = '".$row1['id']."' and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1");
                                if(!empty($scholars->result_array())) {
                                    foreach($scholars->result_array() as $row) { ?>
                                <div class="col-sm-2" style="border: 1px solid;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999; margin-right: 40px; float: left;">
                                    <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row['team_image']?>" alt="">
                                    <?php if($row1['designation'] == 'PhD') { ?>
                                    <a href= '<?php echo base_url();?>pages/postdocs_details/<?php echo base64_encode($row['id'])?>'><p style="text-align: center; background: #fff;"><?php echo $row['fname']?><br><small><?php echo $row1['designation']?></small></p></a>
                                    <?php } else {?>
                                        <p style="text-align: center; background: #fff;"><?php echo $row['fname']?><br><small><?php echo $row1['designation']?></small></p></a>
                                    <?php } ?>
                                    <p style="text-align: center; background: #fff;"><?php if ($row['specialization'] == '1'){echo 'Environmental Engineering'; } else if($row['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($row['specialization'] == '3'){echo 'Structural Engineering'; } else if($row['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($row['specialization'] == '5'){echo 'Transportation Engineering'; } else if($row['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                                </div>
                            <?php } } ?>
                            </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>