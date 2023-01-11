<script src="<?php echo base_url();?>assets/backend/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/js/app.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/js/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
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
        $('.enrollno').hide();
        $('.pddesignation').hide();
        $('.supervisor').hide();
        $('.cosupervisors').hide();
        $('.post').hide();
        $('.lab').hide();
        $('.mobile').hide();
        $('.office').hide();
        $('.specialization').hide();
        $('.ndesignation').hide();
        $('.admssnyear').hide();
        // For team page
        $('#position').change(function(){
            var selectedPosition = $(this).children("option:selected").val();
            if (selectedPosition == 1) {
                $('.enrollno').hide();
                $('.pddesignation').show();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if (selectedPosition == 2) {
                $('.enrollno').hide();
                $('.pddesignation').show();
                $('.supervisor').show();
                $('.cosupervisors').show();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if (selectedPosition == 3) {
                $('.enrollno').show();
                $('.pddesignation').show();
                $('.supervisor').show();
                $('.cosupervisors').show();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if (selectedPosition == 4) {
                $('.enrollno').hide();
                $('.pddesignation').hide();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').hide();
                $('.ndesignation').hide();
                $('.admssnyear').show();
            } else if (selectedPosition == 5) {
                $('.enrollno').hide();
                $('.pddesignation').hide();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').show();
                $('.lab').show();
                $('.mobile').show();
                $('.office').hide();
                $('.specialization').hide();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if (selectedPosition == 6) {
                $('.enrollno').hide();
                $('.pddesignation').hide();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').show();
                $('.lab').show();
                $('.mobile').show();
                $('.office').show();
                $('.specialization').hide();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else {
                $('.enrollno').hide();
                $('.pddesignation').show();
                $('.supervisor').show();
                $('.cosupervisors').show();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            }
        })
        
        $('#designation').change(function(){
            var selectedDesignation = $(this).children("option:selected").val();
            if (selectedDesignation == 'others') {
                $('.ndesignation').show();
            } else {
                $('.ndesignation').hide();
            }
        })

        if ($('#position').val() == 1) {
                $('.enrollno').hide();
                $('.pddesignation').show();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if ($('#position').val() == 2) {
                $('.enrollno').hide();
                $('.pddesignation').show();
                $('.supervisor').show();
                $('.cosupervisors').show();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if ($('#position').val() == 3) {
                $('.enrollno').show();
                $('.pddesignation').show();
                $('.supervisor').show();
                $('.cosupervisors').show();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if ($('#position').val() == 4) {
                $('.enrollno').hide();
                $('.pddesignation').hide();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').hide();
                $('.ndesignation').hide();
                $('.admssnyear').show();
            } else if ($('#position').val() == 5) {
                $('.enrollno').hide();
                $('.pddesignation').hide();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').show();
                $('.lab').show();
                $('.mobile').show();
                $('.office').hide();
                $('.specialization').hide();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if ($('#position').val() == 6) {
                $('.enrollno').hide();
                $('.pddesignation').hide();
                $('.supervisor').hide();
                $('.cosupervisors').hide();
                $('.post').show();
                $('.lab').show();
                $('.mobile').show();
                $('.office').show();
                $('.specialization').hide();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            } else if ($('#position').val() == 7) {
                $('.enrollno').hide();
                $('.pddesignation').show();
                $('.supervisor').show();
                $('.cosupervisors').show();
                $('.post').hide();
                $('.lab').hide();
                $('.mobile').hide();
                $('.office').hide();
                $('.specialization').show();
                $('.ndesignation').hide();
                $('.admssnyear').hide();
            }
    });
    // CKEDITOR.replace('footer_cntnt');
</script>
<style type="text/css">
    /*.tox-statusbar{display: none !important;}*/
</style>