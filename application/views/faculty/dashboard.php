<?php 
$uid = $this->session->userdata('user_id');
$get_name = get_users_name($uid);
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
                        <h3 style="text-transform: capitalize">Welcome <?php echo $get_name[0]['fname'];?></h3>
                        <p style="text-transform: capitalize">Welcome <?php echo $get_name[0]['designation'];?></p>
                        <div class="row">
                            <div class="col-12 profile_menu" style="text-align:center">
                                <!-- Tab navs -->
                                <a href="<?php echo base_url()?>faculty/dashboard"><button type="button" class="btn btn-primary active">Home</button></a>
                                <a href="<?php echo base_url()?>faculty/research"><button type="button" class="btn btn-primary">Research</button></a>
                                <a href="<?php echo base_url()?>faculty/publication"><button type="button" class="btn btn-primary">Publication</button></a>
                                <a href="<?php echo base_url()?>faculty/projects"><button type="button" class="btn btn-primary">Projects</button></a>
                                <a href="<?php echo base_url()?>faculty/lab_members"><button type="button" class="btn btn-primary">Lab Members</button></a>
                                <a href="<?php echo base_url()?>faculty/current_opening"><button type="button" class="btn btn-primary">Current Openings</button></a>
                                <a href="<?php echo base_url()?>faculty/miscellaneous"><button type="button" class="btn btn-primary">Miscellaneous</button></a>
                                <!-- Tab navs -->
                            </div>
                            <!-- Home Start -->
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12' style="margin-top: 50px;">
                                        <div class="col-sm-3" style="text-align: center;float: left;display: inline-block;">
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $get_name[0]['team_image'];?>" alt=""/>
                                        </div>
                                        <div class="col-sm-9" style="float: left;display: inline-block;">
                                            <p class='bio_text1'><?php echo $get_name[0]['aboutme'];?></p>
                                        </div>
                                        <div class="col-sm-12" style="text-align: right;">
                                            <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                                            <button type="button" class="btn btn-primary about_btn" data-toggle="modal" data-target=".bd-example-modal-lg1">Edit Record</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Academic Background</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Degree</th>
                                                    <th>University</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($education)) {
                                                $i=1; ?>
                                            <?php foreach($education as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row['degree'];?></td>
                                                    <td><?php echo $row['university'];?></td>
                                                    <td><?php echo $row['year'];?></td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class edu_edit_btn" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class edu_dlt_btn" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            <?php $i++; } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2">Add New Record</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Professional Background</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Organisation</th>
                                                    <th>Post</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($education)) {
                                                $i=1; ?>
                                                <?php foreach($education as $row) { ?>
                                                <tr>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_edit_btn" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_dlt_btn" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            <?php $i++; } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3">Add New Record</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Awards and Distinctions</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Degree</th>
                                                    <th>University</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class edu_edit_btn" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class edu_dlt_btn" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2">Add New Record</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Events Organised</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Organisation</th>
                                                    <th>Post</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_edit_btn" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_dlt_btn" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3">Add New Record</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">News</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Organisation</th>
                                                    <th>Post</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_edit_btn" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_dlt_btn" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3">Add New Record</button>
                                </div>
                            </div>
                            <!-- Home End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<div class="modal fade bd-example-modal-lg1 about_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
        <form id="formf_aboutme" action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 40px;">
                        <div class="col-sm-2" style="text-align: right;float: left;display: inline-block;">
                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/1667140703711760.jpg" alt=""/>
                        </div>
                    </div>
                    <div class='col-sm-12'>
                        <input type="text" id="aboutme" name="aboutme" value="<?php echo $get_name[0]['aboutme'];?>"/>
                    </div>
                </div>
                <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                    <div id="err"></div>
                    <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                    <!-- <button type="button" class="btn btn-primary about_save" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button> -->
                    <input class="btn btn-primary about_save" type="submit" value="Update">
                    <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg2 edu_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
        <form id="formf_edu" action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 40px;">
                        <div class="col-sm-12" style="float: left; display: inline-block;">
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Degree</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="degree" name="degree" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">University</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="university" name="university" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Year</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="year" name="year" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-md-3 col-sm-4 control-label">Status</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <select class="form-control" name="status">
                                        <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                        <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                    <div id="err"></div>
                    <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                    <!-- <button type="button" class="btn btn-primary about_save" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button> -->
                    <input class="btn btn-primary edu_save" type="submit" value="Submit">
                    <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg3 exp_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_exp" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Position</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="position" name="position" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Year</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="year" name="year" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Status</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control" name="status">
                                            <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                        <!-- <button type="button" class="btn btn-primary about_save" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button> -->
                        <input class="btn btn-primary exp_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg4 pub_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_pub" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Publications Type" class="control-label ">Publications Type</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control publication_type" name="publication_type" id="publication_type">
                                            <option value="">Choose an option</option>
                                            <option value="Journal Article">Journal Article</option>
                                            <option value="Conference Paper">Conference Paper</option>
                                            <option value="Book Chapter">Book Chapter</option>
                                            <option value="Book">Book</option>
                                            <option value="Patent">Patent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 body_content" style="float: left; display: inline-block;">
                                <div>
                                    <div class="form-group col-sm-4 cstm_details attachment">
                                        <label for="Event Name" class="control-label">Image</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="file" class="form-control required" id="attachment" name="attachment" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details author_name">
                                        <label for="Event Name" class="control-label">Authors Name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="author_name" name="author_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details paper_title">
                                        <label for="Event Name" class="control-label">Title of Paper</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="paper_title" name="paper_title" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details journal_name">
                                        <label for="Event Name" class="control-label">Journal Name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="journal_name" name="journal_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details conference_name">
                                        <label for="Event Name" class="control-label">Conference name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="conference_name" name="conference_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details book_name">
                                        <label for="Event Name" class="control-label">Book name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="book_name" name="book_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details publish_date">
                                        <label for="Event Name" class="control-label">Publised date</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="publish_date" name="publish_date" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details patient_number">
                                        <label for="Event Name" class="control-label">Patent Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="patient_number" name="patient_number" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details publisher">
                                        <label for="Event Name" class="control-label">Publisher</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="publisher" name="publisher" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details location">
                                        <label for="Event Name" class="control-label">location</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="location" name="location" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details external_Link">
                                        <label for="Event Name" class="control-label">DOI (External Link)</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="external_Link" name="external_Link" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details editors">
                                        <label for="Event Name" class="control-label">Editors</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="editors" name="editors" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Page Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="page_number" name="page_number" value="">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group col-sm-12 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Short Summary</label>
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control required" id="page_number" name="page_number" value=""> -->
                                            <textarea id="short_summery" name="short_summery"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Key points</label>
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control required" id="page_number" name="page_number" value=""> -->
                                            <textarea id="key_points" name="key_points"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group col-sm-4 cstm_details">
                                        <label for="Event Name" class="control-label">Highlights</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="highlight" name="highlight" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details">
                                        <label for="Event Name" class="control-label">Status</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <select class="form-control" id="status" name="status">
                                                <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                                <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <input class="btn btn-primary publication_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg5 awrd_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_awrd" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Position</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="position" name="position" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Year</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="year" name="year" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Status</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control" name="status">
                                            <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                        <!-- <button type="button" class="btn btn-primary about_save" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button> -->
                        <input class="btn btn-primary exp_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $footer?>