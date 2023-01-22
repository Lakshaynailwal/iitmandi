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
                                <select class="form-control" id="finding_agency" name="finding_agency">
                                    <option value="">Finding Agency</option>
                                <?php if(!empty($designation)) { 
                                    foreach($designation as $row) { ?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['designation']?></option>
                                <?php  } } else { ?>
                                    <option value="">No Data</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" id="starting_year" name="starting_year">
                                    <option value="">Year</option>
                                    <option value="1" <?php if(@$banner['specialization']==1){ echo "selected"; } ?>>Environmental Engineering</option>
                                    <option value="2" <?php if(@$banner['specialization']==2){ echo "selected"; } ?>>Geotechnical Engineering</option>
                                    <option value="3" <?php if(@$banner['specialization']==3){ echo "selected"; } ?>>Structural Engineering</option>
                                    <option value="4" <?php if(@$banner['specialization']==4){ echo "selected"; } ?>>Water Resources Engineering</option>
                                    <option value="5" <?php if(@$banner['specialization']==5){ echo "selected"; } ?>>Transportation Engineering</option>
                                    <option value="6" <?php if(@$banner['specialization']==6){ echo "selected"; } ?>>Remote Sensing and GIS</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" id="faculty_member" name="faculty_member">
                                    <option value="">Faculty Member</option>
                                    <option value="1" <?php if(@$banner['specialization']==1){ echo "selected"; } ?>>Environmental Engineering</option>
                                    <option value="2" <?php if(@$banner['specialization']==2){ echo "selected"; } ?>>Geotechnical Engineering</option>
                                    <option value="3" <?php if(@$banner['specialization']==3){ echo "selected"; } ?>>Structural Engineering</option>
                                    <option value="4" <?php if(@$banner['specialization']==4){ echo "selected"; } ?>>Water Resources Engineering</option>
                                    <option value="5" <?php if(@$banner['specialization']==5){ echo "selected"; } ?>>Transportation Engineering</option>
                                    <option value="6" <?php if(@$banner['specialization']==6){ echo "selected"; } ?>>Remote Sensing and GIS</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" name="status">
                                    <option value="">Status</option>
                                    <option value="1">Ongoing</option>
                                    <option value="2">Completed</option>
                                    <option value="3">Transferred</option>
                                    <option value="4">Closed</option>
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-secondary research_project_data">Search</button>
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
                                <tbody>
                                    <?php if(!empty($research)) { 
                                        $i=1; ?>
                                    <?php foreach($research as $row) { ?>
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