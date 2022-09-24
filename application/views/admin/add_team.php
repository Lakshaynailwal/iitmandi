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
                                       <label for="banner_title" class="control-label col-lg-3 col-md-3 col-sm-4">Name(required)</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <input type="text" class="form-control required" id="fname" name="fname" placeholder="Full Name" value="<?php echo @$banner['fname']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="banner_title1" class="control-label col-lg-3 col-md-3 col-sm-4">Designation (required)</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <!-- <textarea  class="form-control" id="designation" name="designation" placeholder="Designation"><?php echo @$banner['designation']; ?></textarea> -->
                                          <input type="text" class="form-control required" id="designation" name="designation" placeholder="Designation" value="<?php echo @$banner['designation']; ?>">
                                       </div>
                                    </div>
                                    <?php if(!empty($banner)){ ?>
                                    <div class="form-group">
                                       <label for="about_me" class="control-label col-lg-3 col-md-3 col-sm-4">Team Image</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <?php if(@$banner['team_image']){ ?>
                                          <img style="width: 200px" src="<?php echo base_url(); ?>assets/images/our_team/thumb/<?php echo @$banner['team_image']; ?>" alt="<?php echo @$banner['team_image']; ?>" />
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
                                       <label class="col-lg-3 col-md-3 col-sm-4 control-label">Position</label>
                                       <div class="col-lg-9 col-md-9 col-sm-8">
                                          <select class="form-control" name="position">
                                             <option value="1" <?php if(@$banner['position']==1){ echo "selected"; } ?>>ADMINISTRATOR</option>
                                             <option value="2" <?php if(@$banner['position']==2){ echo "selected"; } ?>>ADMIN TEAM</option>
                                             <option value="1" <?php if(@$banner['position']==3){ echo "selected"; } ?>>PGT</option>
                                             <option value="2" <?php if(@$banner['position']==4){ echo "selected"; } ?>>TGT</option>
                                             <option value="1" <?php if(@$banner['position']==5){ echo "selected"; } ?>>PRT</option>
                                             <option value="2" <?php if(@$banner['position']==6){ echo "selected"; } ?>>NTT</option>
                                          </select>
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