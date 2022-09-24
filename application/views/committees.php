<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <?php echo $header;?>    
    <div class="post-section section">
        <div class="container">
            <div class="row" style="padding: 60px 0 0 0;">
                <div class="col-lg-12 col-12 mb-501">
                    <div class="post-block-wrapper" style="text-align:center;">
                        <h2 style="color: #ffff !important;text-align: center;margin-top: 5%;border: 1px solid;width: 65%;display: inline-block;background: #ffbc3b;padding: 20px;margin-bottom: 40px;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999;"><?php echo $title;?></h2>
                    </div>
                </div>
                <div class="col-lg-12 col-12 mb-501">
                    <div class="post-block-wrapper">
                        <div class="body" style="padding: 0px 20px;">
                            <div class="contact-info row" style="padding: 0px 10px;">
                                <?php if(!empty($committees)) {
                                    $i = 1;
                                foreach ($committees as $row){ ?>
                                <div class="panel-group">
                                    <div class="panel-heading cstm_cls_click_<?php echo $i?>">
                                        <h4 class="panel-title"><?php echo $row['title']?></h4>
                                    </div>
                                </div>
                                <div class="cstm_accordian cstm_cls_open_<?php echo $i?>">
                                    <div class="panel-body">
                                        <?php echo $row['description']?>
                                    </div>
                                </div>
                                <?php $i++; } } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $footer;?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.cstm_accordian').hide();
            <?php if(!empty($committees)) {
            $i = 1;
            foreach ($committees as $row){ ?>
            $('.cstm_cls_click_<?php echo $i?>').click(function(){
                $('.cstm_cls_open_<?php echo $i?>').toggle();
            })
            <?php $i++; } } ?>
        })
    </script>
</body>
</html>