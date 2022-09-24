<?php
    $uid=$this->session->userdata('uid');
    $role=$this->session->userdata('role');
    $username=$this->session->userdata('username');
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/plugins.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/rypp.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/jquery.multiselect.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="<?php echo base_url();?>assets/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<?php $logo=$this->common_model->get_data_array(SETTINGS,array('id'=>1),'','','','','','');?>
<div id="main-wrapper">
    <div class="header-top section">
        <div class="container">
            <div class="row">
                <div class="header-top-links col-md-9 col-6">
                    <ul class="header-links">
                        <li><a href="<?php echo base_url(); ?>page/aboutus">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>page/forums">Forums</a></li>
                        <?php if($this->session->userdata('uid') != ''){?>
                        <li><p style="width: auto;">
                            <?php if($role == 'author') { ?>
                                <span style="float: left;display: inline-block;">Welcome,</span><a href="<?php echo base_url(); ?>author_dashboard" style="float: left;display: inline-block;line-height: 21px;font-size: 13px;"><?php echo $username; ?></a>
                            <?php } else { ?>
                                <span style="float: left;display: inline-block;">Welcome,</span><a href="<?php echo base_url(); ?>reader_dashboard" style="float: left;display: inline-block;line-height: 21px;font-size: 13px;"><?php echo $username; ?></a>
                            <?php } ?>
                            <a href="<?php echo base_url(); ?>logout" style="width: auto;display: inline-block;margin-left: 10px;">Log Out</a></p>
                        </li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url(); ?>reader">Sign Up as a Reader</a></li>
                            <li><a href="<?php echo base_url(); ?>become-an-author">Become an Author</a></li>
                            <li><a href="<?php echo base_url(); ?>login">Log In</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="header-top-social col-md-3 col-6">
                    <div class="header-social">
                        <a href="<?php echo $logo[0]['facekbook_url']?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $logo[0]['instagram_url']?>"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $logo[0]['twitter_link']?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $logo[0]['vimeo_url']?>"><i class="fa fa-vimeo"></i></a>
                        <a href="<?php echo $logo[0]['youtube_url']?>"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">
                <div class="header-logo col-md-4 d-none d-md-block">
                    <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>assets/images/site_logo/<?php echo $logo[0]['profile_pic']?>" alt="Logo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-section section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">
                        <div class="main-menu float-left d-none d-md-block">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                                    <?php 
                                    $category = $this->db->query('SELECT DISTINCT `knosmosdb_categories`.`category_name`,`knosmosdb_categories`.`slug` FROM `knosmosdb_newsstorages` JOIN `knosmosdb_categories` ON `knosmosdb_newsstorages`.`category` = `knosmosdb_categories`.`slug` WHERE `knosmosdb_newsstorages`.`category` != "uncategorised" AND `knosmosdb_categories`.`status` = 1 AND `knosmosdb_categories`.`is_delete` = 1')->result_array();
                                    if(!empty($category)){ 
                                    foreach($category as $cat){ ?>
                                    <li class=""><a href="<?php echo base_url().'category/'.$cat['slug']?>"><?php echo $cat['category_name']?></a></li>
                                    <?php }} else { ?>
                                        <div>No Category Found</div>
                                <?php } ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-logo d-none d-block d-md-none"><a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>assets/images/site_logo/<?php echo $logo[0]['profile_pic']?>" alt="Logo"></a></div>
                        <!-- <div class="header-search float-right">
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search Here">
                                </form>
                            </div>
                        </div> -->
                        <div class="mobile-menu-wrap d-none">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                                    <?php 
                                    $category = $this->db->query('SELECT DISTINCT `knosmosdb_categories`.`category_name`,`knosmosdb_categories`.`slug` FROM `knosmosdb_newsstorages` JOIN `knosmosdb_categories` ON `knosmosdb_newsstorages`.`category` = `knosmosdb_categories`.`slug` WHERE `knosmosdb_newsstorages`.`category` != "uncategorised" AND `knosmosdb_categories`.`status` = 1 AND `knosmosdb_categories`.`is_delete` = 1')->result_array();
                                    if(!empty($category)){ 
                                        foreach($category as $cat){ ?>
                                        <li class=""><a href="<?php echo base_url().'category/'.$cat['slug']?>"><?php echo $cat['category_name']?></a></li>
                                    <?php }} else { ?>
                                        <div>No Category Found</div>
                                <?php } ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>