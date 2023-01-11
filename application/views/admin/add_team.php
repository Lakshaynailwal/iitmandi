<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="images/fav.png" sizes="32x32" />
<title><?php echo $page_title; ?></title>
<head>
    <?php echo $header_scripts; ?>
</head>
<body class="skin-blue">
    <div class="wrapper">
        <header class="main-header">
            <a href="admin" class="logo"><b>Admin</b>Panel</a>
            <?php echo $header; ?>
        </header>
        <?php echo $sidebar;?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1><?php echo $page_title; ?><small>Control panel</small></h1>
                <ol class="breadcrumb">
                    <li><a href="admin"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active"><?php echo $page_title; ?></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo $page_title; ?>
                            </div>
                            <div class="panel-body">
                                <?php echo $this->utilitylib->showMsg();?>
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="editForm" method="post" action=""  enctype="multipart/form-data">
                                    <div class="form-group">
                                       <label for="banner_title" class="control-label col-lg-3 col-md-3 col-sm-4">Name</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name" value="<?php echo @$banner['fname']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="banner_title" class="control-label col-lg-3 col-md-3 col-sm-4">Email</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="email" class="form-control" id="email" name="email" placeholder="User Email" value="<?php echo @$banner['email']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-lg-3 col-md-3 col-sm-4 control-label">User Type</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <select class="form-control" id="position" name="position" require>
                                             <option value="">Choose an Option</option>
                                             <option value="1" <?php if(@$banner['position']==1){ echo "selected"; } ?>>Faculty</option>
                                             <option value="2" <?php if(@$banner['position']==2){ echo "selected"; } ?>>Postdoc</option>
                                             <option value="3" <?php if(@$banner['position']==3){ echo "selected"; } ?>>Scholar</option>
                                             <option value="4" <?php if(@$banner['position']==4){ echo "selected"; } ?>>Student</option>
                                             <option value="5" <?php if(@$banner['position']==5){ echo "selected"; } ?>>Technical Staff</option>
                                             <option value="6" <?php if(@$banner['position']==6){ echo "selected"; } ?>>Supporting Staff</option>
                                             <option value="7" <?php if(@$banner['position']==7){ echo "selected"; } ?>>Project Staff</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group enrollno">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Enrollment No</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="enrollno" name="enrollno" placeholder="Enrollment No" value="<?php echo @$banner['designation']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group pddesignation">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Designation</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <select class="form-control" id="designation" name="designation">
                                             <option value="">Choose an Option</option>
                                             <?php 
                                                $designation = $this->common_model->get_data_array(TEAM,'','','','','',TEAM.".designation",'',array('is_delete'=>1));
                                                if(!empty($designation)) {
                                                foreach($designation as $row) { ?>
                                                   <option value="<?php echo $row['designation']; ?>" <?php if(@$banner['designation'] == $row['designation']){ echo "selected"; } ?>><?php echo $row['designation']; ?></option>
                                             <?php } } ?>
                                             <option value="others" <?php if(@$banner['designation']=='others'){ echo "selected"; } ?>>Others</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group ndesignation">
                                       <label for="banner_title" class="control-label col-lg-3 col-md-3 col-sm-4">Add New Designation</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="ndesignation" name="ndesignation" placeholder="Add New Designation" value="<?php echo @$banner['supervisor']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group supervisor">
                                       <label for="banner_title" class="control-label col-lg-3 col-md-3 col-sm-4">Supervisor</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="Supervisor" value="<?php echo @$banner['supervisor']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group cosupervisors">
                                       <label for="banner_title" class="control-label col-lg-3 col-md-3 col-sm-4">Co-Supervisors</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="cosupervisors" name="cosupervisors" placeholder="Co-Supervisor" value="<?php echo @$banner['cosupervisors']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group post">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Post</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="post" name="post" placeholder="Post" value="<?php echo @$banner['post']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group lab">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Lab</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="lab" name="lab" placeholder="Lab" value="<?php echo @$banner['lab']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group mobile">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Mobile</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo @$banner['mobile']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group office">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Office</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="office" name="office" placeholder="Office" value="<?php echo @$banner['office']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group specialization">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Specialization</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="specialization" name="specialization" placeholder="Specialization" value="<?php echo @$banner['specialization']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group admssnyear">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Year of Admission</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control" id="admssnyear" name="admssnyear" placeholder="Year of Admission" value="<?php echo @$banner['admssnyear']; ?>">
                                       </div>
                                    </div>
                                    <?php if(!empty($banner)){ ?>
                                    <div class="form-group">
                                       <label for="about_me" class="control-label col-lg-3 col-md-3 col-sm-4">Team Image</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <?php if(@$banner['team_image']){ ?>
                                          <img style="width: 200px" src="<?php echo base_url(); ?>uploads/our_team/thumb/<?php echo @$banner['team_image']; ?>" alt="<?php echo @$banner['team_image']; ?>" />
                                          <?php } else { ?>
                                          <img src="<?php echo base_url(); ?>images/no-img.png" alt="no-img.png">
                                          <?php } ?>
                                       </div>
                                    </div>
                                    <?php } ?>
                                    <div class="form-group">
                                       <label for="about_me" class="control-label col-lg-3 col-md-3 col-sm-4">Upload Team Image</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <div class="fileupload btn btn-primary_cust waves-effect waves-light">
                                             <input type="file" name="team_image" id="team_image" class="upload">
                                             <span id="image_name1"></span>
                                          </div>
                                          <div class="clearfix"></div>
                                          <label for="about_me" class="control-label" style="color:red;">Image size must be Less than 1MB (640px X 640px)</label>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-lg-3 col-md-3 col-sm-4 control-label">Status</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <select class="form-control" name="status">
                                             <option value="1" <?php if(@$banner['status']==1){ echo "selected"; } ?>>Active</option>
                                             <option value="2" <?php if(@$banner['status']==2){ echo "selected"; } ?>>Inactive</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-lg-offset-3 col-lg-10">
                                          <button class="btn btn-success_cust waves-effect waves-light m-b-5" type="submit">Save</button>
                                          <a href="admin/ourteam"><button class="btn btn-success_cust waves-effect waves-light m-b-5" type="button">Back</button></a>
                                       </div>
                                    </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $footer; ?>
            </section>
        </div>
    </div>
    <?php echo $footer_scripts; ?>
</body>
</html>