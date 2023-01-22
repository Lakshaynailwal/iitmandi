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
                    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><?php echo $page_title; ?></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo $page_title; ?></h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $this->utilitylib->showMsg();?>
                                    <div class="form">
                                        <form class="cmxform form-horizontal tasi-form" id="editForm" method="post" action="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="title" class="control-label col-lg-3 col-md-3 col-sm-4">Title of the Project</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <input type="text" class="form-control" id="project_title" name="project_title" required  placeholder="Title of the Project" value="<?php echo @$project['project_title'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="funding_agency" class="control-label col-lg-3 col-md-3 col-sm-4">Funding Agency</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="funding_agency" name="funding_agency" required  placeholder="Funding Agency" value="<?php echo @$project['funding_agency'] ?>">
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="funding_amount" class="control-label col-lg-3 col-md-3 col-sm-4">Funding Amount</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="funding_amount" name="funding_amount" required  placeholder="Funding Amount" value="<?php echo @$project['funding_amount'] ?>">
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="project_incharge" class="control-label col-lg-3 col-md-3 col-sm-4">PI</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <select class="form-control" id="project_incharge" name="project_incharge">
                                                    <option value="">Choose an Option</option>
                                                    <?php if(!empty($ourteam)) { 
                                                        foreach($ourteam as $row) { ?>
                                                        <option value="<?php echo $row['id']?>"><?php echo $row['fname']?></option>
                                                    <?php  } } else { ?>
                                                        <option value="">No Data</option>
                                                        <?php } ?>
                                                    </select>
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <label for="coproject_incharge" class="control-label col-lg-3 col-md-3 col-sm-4">Co-PI</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <select class="selectpicker form-control" id="coproject_incharge" name="coproject_incharge[]" multiple data-live-search="true" required>
                                                        <?php if(!empty($ourteam)) { 
                                                            foreach($ourteam as $row) { ?>
                                                            <option value="<?php echo $row['id']?>"><?php echo $row['fname']?></option>
                                                        <?php  } } else { ?>
                                                            <option value="">No Data</option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label col-lg-3 col-md-3 col-sm-4">Type of Project</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <select class="form-control" name="project_type">
                                                        <option value="">Choose an option</option>
                                                        <option value="1" <?php if(@$project['project_type']==1){ echo "selected"; } ?>>Research</option>
                                                        <option value="2" <?php if(@$project['project_type']==2){ echo "selected"; } ?>>Consultancy</option>
                                                    </select>
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="starting_year" class="control-label col-lg-3 col-md-3 col-sm-4">Starting year</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <input type="text" class="form-control" id="starting_year" name="starting_year" required  placeholder="Starting year" value="<?php echo @$project['starting_year'] ?>">
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="project_duration" class="control-label col-lg-3 col-md-3 col-sm-4">Duration of the Project</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <input type="text" class="form-control" id="project_duration" name="project_duration" required  placeholder="Project Duration" value="<?php echo @$project['project_duration'] ?>">
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="reference_number" class="control-label col-lg-3 col-md-3 col-sm-4">Reference Number</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <input type="text" class="form-control" id="reference_number" name="reference_number" required  placeholder="Reference Number" value="<?php echo @$project['reference_number'] ?>">
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label col-lg-3 col-md-3 col-sm-4">Brief Description</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <!-- <input type="text" class="form-control" id="description" name="description" required  placeholder="Brief Description" value="<?php echo @$project['description'] ?>"> -->
                                                    <textarea id="description" name="description"><?php echo @$project['description']?></textarea>
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status" class="control-label col-lg-3 col-md-3 col-sm-4">Status</label>
                                                <div class="col-lg-9 col-md-9 col-sm-8">
                                                    <select class="form-control" name="status">
                                                        <option value="">Choose an option</option>
                                                        <option value="1" <?php if(@$project['status']==1){ echo "selected"; } ?>>Ongoing</option>
                                                        <option value="2" <?php if(@$project['status']==2){ echo "selected"; } ?>>Completed</option>
                                                        <option value="3" <?php if(@$project['status']==3){ echo "selected"; } ?>>Transferred</option>
                                                        <option value="4" <?php if(@$project['status']==4){ echo "selected"; } ?>>Closed</option>
                                                    </select>
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-3 col-lg-10">
                                                    <button class="btn btn-success_cust waves-effect waves-light m-b-5" type="submit">Save</button>
                                                    <a href="admin/project"><button class="btn btn-success_cust waves-effect waves-light m-b-5" type="button">Back</button></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
