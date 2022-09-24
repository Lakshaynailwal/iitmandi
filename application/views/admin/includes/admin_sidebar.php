<?php
    $uid=$this->session->userdata('uid');
    $get_name = get_admin_name($uid);
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/images/users/thumb/<?php echo @$get_name[0]['profile_pic']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo ucwords($get_name[0]['fname'])." ".ucwords($get_name[0]['lname']); ?></p>
                <a href="javascript:void(0);"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="admin/dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                </a>
            </li>
            <li class="treeview">
                <a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i>
                    <span>Home Page Management</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/banner"><i class="fa fa-circle-o"></i>Banner Management</a></li>
                    <li><a href="admin/news"><i class="fa fa-circle-o"></i>News Management</a></li>
                    <li><a href="admin/events"><i class="fa fa-circle-o"></i>Event management</a></li>
                    <li><a href="admin/notice"><i class="fa fa-circle-o"></i>Notice Board</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:void(0);"><i class="fa fa-files-o"></i>
                    <span>Pages</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/page"><i class="fa fa-circle-o"></i>All Pages</a></li>
                    <!-- <li><a href="admin/page/add_page"><i class="fa fa-circle-o"></i>Add New Page</a></li> -->
                </ul>
            </li>
            <!-- <li class="treeview">
                <a href="admin/gallery"><i class="fa fa-cogs"></i>
                    <span>Gallery</span>
                </a>
            </li> -->
            <li class="treeview">
                <a href="admin/committees"><i class="fa fa-cogs"></i>
                    <span>House & Committees</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/ourteam"><i class="fa fa-cogs"></i>
                    <span>Our Team</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/syllabus"><i class="fa fa-cogs"></i>
                    <span>Syllabus</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/disclosure"><i class="fa fa-cogs"></i>
                    <span>Mandatory disclosure</span>
                </a>
            </li>
            <li class="treeview">
                <a href="admin/settings"><i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </section>
</aside>