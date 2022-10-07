<script src="<?php echo base_url();?>assets/backend/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/js/app.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/js/demo.js" type="text/javascript"></script>
<!-- <script language="JavaScript" type="text/javascript" src="tiny_mce/tiny_mce.js"></script> -->
<script src="<?php echo base_url();?>assets/backend/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url();?>ckeditor5/ckeditor.js" type="text/javascript"></script>-->
<!--<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>-->
<!--<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>-->
<!-- <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="<?php echo base_url();?>ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css"> -->
<!--<script src="https://cdn.tiny.cloud/1/gss6pfle0zg1a31vgsoj1blsymnrht3ai9q8190hcsfhil6t/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<script type="text/javascript">
    $("#calendar").datepicker('show');
    $.widget.bridge('uibutton', $.ui.button);
    $(document).ready(function() {
        $('.dat_tbl').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
        });
        //$("#editForm").validate();
        $('#editForm').submit(function(){
            if(tinymce.get('page_description').getContent()=='') {
                alert('Please Add Page Description');
                return false;
            }
        });
        $('#editForm').submit(function(){
            if(tinymce.get('description').getContent()=='') {
                alert('Please Add News Description');
                return false;
            }
        });
        $('#gallery_image').change(function(e){
            var fileName = e.target.files[0].name;
            $('#image_name1').html(fileName);
        });
        $('#frm').submit(function(){});
        $(".pagination a").click(function(){
            var url=$(this).attr('href');
            $("#frm").attr('action',url);
            $("#frm").submit();
            return false;
        });
    });
    // tinymce.init({
    //   selector: 'textarea',
    //   plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments link',
    //   toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table link',
    //   toolbar_mode: 'floating',
    //   tinycomments_mode: 'embedded',
    //   tinycomments_author: 'Author name',
    // });
    // CKEDITOR.replace('context');
    // CKEDITOR.replace('overview');
    // CKEDITOR.replace('description');
    // CKEDITOR.replace('conclusion');
    // CKEDITOR.replace('reference');
    // CKEDITOR.replace('page_description');
    // CKEDITOR.replace('aboutus');
    // CKEDITOR.replace('footer_cntnt');
</script>
<style type="text/css">
    /*.tox-statusbar{display: none !important;}*/
</style>