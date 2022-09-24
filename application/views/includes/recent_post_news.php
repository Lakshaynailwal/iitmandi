<div class="col-sm-4" style="display: inline-block;">
    <div class="single-sidebar">
        <div class="sidebar-block-wrapper">
            <div class="head feature-head">
                <h4 class="title">Recent Posts</h4>
            </div>
            <div class="body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="latest-news">
                        <div class="post post-small post-list education-post main_cstm_cls post-separator-border col-sm-12">
                            <div class="col-md-12 col-12">
                                <?php 
                                $latest_news = $this->db->query('SELECT * FROM `knosmosdb_newsstorages` WHERE `knosmosdb_newsstorages`.`status` = 1 AND `knosmosdb_newsstorages`.`is_delete` = 1 ORDER BY `knosmosdb_newsstorages`.`add_date` DESC LIMIT 4')->result_array();;
                                if(!empty($latest_news)) {
                                foreach ($latest_news as $row_news){ ?>
                                <div class="post post-small post-list feature-post post-separator-border">
                                    <div class="post-wrap">
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url().'news_details/'.$row_news['news_slug']?>"><?php echo $row_news['title']?></a></h5>
                                            <div class="content">
                                                <div class="meta fix">
                                                    <a href="#" class="meta-item author"><i class="fa fa-user"></i>
                                                        <?php 
                                                        $fa_user = $this->db->query("SELECT * FROM `knosmosdb_users` WHERE `id` = '".$row_news['role_id']."'")->result_array();
                                                        if(!empty($fa_user)){
                                                            if($fa_user[0]['id'] == $row_news['role_id']){
                                                                echo $fa_user[0]['fullname'];
                                                            } else {
                                                                echo "KNOSMOS";
                                                            }
                                                        } else {
                                                            echo "KNOSMOS";   
                                                        }
                                                        ?>
                                                    </a>
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("jS M, Y", strtotime($row_news['add_date']));?></span>
                                                    <a href="#" class="meta-item comment"><i class="fa fa-comments"></i><?php echo $row_news['viewers']?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <?php } } else { ?>
                                    <div >No Record Found!</div>
                                <?php } ?>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    </div>