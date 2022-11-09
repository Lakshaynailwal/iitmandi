<?php 
echo $header;
$uid = $this->session->userdata('uid');
?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .cstm_gllery {float: left; display: inline;}
    .cstm_gllery img {padding: 12px;}
    .modal-content {padding: 30px}
    .modal-lg, .modal-xl {--bs-modal-width: 90% !important;}
    .cstm_details {float: left; display: inline-block;}
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
                        <h3>Student Details</h3>
                        <div class="row">
                            <div class="col-3">
                                <!-- Tab navs -->
                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                                    <a class="nav-link active" id="v-pills-link1-tab" data-mdb-toggle="pill" role="tab">About me</a>
                                    <a class="nav-link active" id="v-pills-link2-tab" data-mdb-toggle="pill" role="tab">Education</a>
                                    <a class="nav-link active" id="v-pills-link3-tab" data-mdb-toggle="pill" role="tab">Experience</a>
                                    <a class="nav-link active" id="v-pills-link4-tab" data-mdb-toggle="pill" role="tab">Publications</a>
                                    <a class="nav-link active" id="v-pills-link5-tab" data-mdb-toggle="pill" role="tab">Awards and Honours</a>
                                    <a class="nav-link active" id="v-pills-link6-tab" data-mdb-toggle="pill" role="tab">Photo Gallery</a>
                                </div>
                                <!-- Tab navs -->
                            </div>
                            <div class="col-9">
                            <!-- Tab content -->
                                <div class="container slide_content">
                                    <div class="row" style="overflow: scroll; height: 425px;">
                                        <div class="tab-content1" id="v-pills-tabContent1">
                                            <div class="tab-pane" id="v-pills-link1" role="tabpanel" aria-labelledby="v-pills-link1-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <div class="col-sm-6" style="text-align: right;float: left;display: inline-block;">
                                                                <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/1667140703711760.jpg" alt=""/>
                                                            </div>
                                                            <div class="col-sm-6" style="float: left;display: inline-block;">
                                                                <p class='bio_text'>Name:<?php echo $uid?></p>
                                                                <p class='bio_text'>Enrolment No.:</p>
                                                                <p class='bio_text'>Email:</p>
                                                                <p class='bio_text'>Admission year:</p>
                                                                <p class='bio_text'>Research Interests:</p>
                                                            </div>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                        <p class='bio_text1'>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                                                        <button type="button" class="btn btn-primary about_btn" data-toggle="modal" data-target=".bd-example-modal-lg">Edit Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link2" role="tabpanel" aria-labelledby="v-pills-link2-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Education</h2>
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
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary"><a href=''>Add New Record</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link3" role="tabpanel" aria-labelledby="v-pills-link3-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Professional Experience</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Position(Company name)</th>
                                                                        <th>Year</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary"><a href=''>Add New Record</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link4" role="tabpanel" aria-labelledby="v-pills-link4-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Publications</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <p>1. Journal article</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title of Paper</th>
                                                                        <th>Journal Name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>2. Conference paper</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title of Paper</th>
                                                                        <th>Conference name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Organizer/Publisher</th>
                                                                        <th>location</th>
                                                                        <th>External Link</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>3. Book chapter</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Book name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Editors</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>4. Book</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>5. Patent</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Publised date</th>
                                                                        <th>Patent Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary"><a href=''>Add New Record</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link5" role="tabpanel" aria-labelledby="v-pills-link5-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Awards and Honours</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary"><a href=''>Add New Record</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link6" role="tabpanel" aria-labelledby="v-pills-link6-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Photo Gallery</h2>
                                                        </div>
                                                        <div class="content">
                                                            <div class='col-sm-12'>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary"><a href=''>Add New Album</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
<div class="modal fade bd-example-modal-lg about_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
        <form id="form_aboutme" action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 40px;">
                        <div class="col-sm-2" style="text-align: right;float: left;display: inline-block;">
                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/1667140703711760.jpg" alt=""/>
                        </div>
                        <div class="col-sm-10" style="float: left; display: inline-block;">
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Name</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="fname" name="fname" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Enrolment No.</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="enrollno" name="enrollno" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Email</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="email" class="form-control required" id="email" name="email" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Admission year</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="admissionyear" name="admissionyear" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Research Interests</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="research_interest" name="research_interest" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12'>
                        <textarea id="aboutme" name="aboutme">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
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
<?php echo $footer?>