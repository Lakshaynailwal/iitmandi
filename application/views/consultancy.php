<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .col-sm-1 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-2 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-3 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-4 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-8 {display: inline-block;float: left;}
    .col-sm-12 {display: inline-block;}
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
                        <div class="col-sm-12 filter_data">
                            <div class="col-sm-4">
                                <select class="form-control" id="funding_agencyflt" name="funding_agency">
                                <option value="">Funding Agency</option>
                                    <?php 
                                    $funding_agency = $this->db->query("SELECT funding_agency, GROUP_CONCAT(id) as id FROM iitmandi_project WHERE `is_delete` = 1 GROUP BY funding_agency ORDER BY COUNT(*) DESC");
                                    if(!empty($funding_agency->result_array())) { 
                                    foreach($funding_agency->result_array() as $row) { 
                                        $id = explode(",",$row['id']);
                                    ?>  
                                    <option value="<?php echo $row['funding_agency']?>"><?php echo $row['funding_agency']?></option>
                                    <?php  } } else { ?>
                                    <option value="">No Data</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" id="starting_yearflt" name="starting_year">
                                    <option value="">Year</option>
                                    <?php 
                                    $starting_year = $this->db->query("SELECT starting_year, GROUP_CONCAT(id) as id FROM iitmandi_project WHERE `is_delete` = 1 GROUP BY starting_year ORDER BY COUNT(*) DESC");
                                    if(!empty($starting_year)) { 
                                    foreach($starting_year as $row) { ?>
                                    <option value="<?php echo $row['starting_year']?>"><?php echo $row['starting_year']?></option>
                                    <?php  } } else { ?>
                                    <option value="">No Data</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" id="faculty_memberflt" name="faculty_member">
                                    <option value="">Faculty Member</option>
                                    <?php if(!empty($team)) { 
                                    foreach($team as $row) { ?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['fname']?></option>
                                    <?php  } } else { ?>
                                    <option value="">No Data</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" id="statusflt" name="statusflt">
                                    <option value="">Status</option>
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Transferred">Transferred</option>
                                    <option value="Closed">Closed</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Reset</button>
                                <input type="hidden" id="project_type" value = '2'>
                            </div>
                        </div>
                        <div class='col-sm-12' style="margin-top: 50px;">
                            <table id="datatable" class="table table-striped table-bordered dat_tbl">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Project Title</th>
                                        <th>Status</th>
                                        <th>View Details</th>
                                    </tr>
                                </thead>
                                <tbody id = "showFilterData">
                                    <?php if(!empty($consultancy)) { 
                                        $i=1; ?>
                                    <?php foreach($consultancy as $row) { ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['project_title']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                        <button type="button" class="btn btn-primary">View More</button>
                                        </td>
                                    </tr>
                                    <?php $i++; } } else {?>
                                    <!-- <tr>
                                        <td colspan="5">No Record Found</td>
                                    </tr> -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>