<?php $footer_content=$this->common_model->get_data(SETTINGS,array('id'=>1));?>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-8 mb-4 mb-lg-0">
                    <ul class="list-unstyled" style="font-weight: 600;">
                        <li class="mb-2"><?php echo $footer_content[0]['gmap'];?></li>
                        <li class="mb-2"><?php echo $footer_content[0]['location1'];?></li>
                        <li class="mb-2"><?php echo $footer_content[0]['contact'];?></li>
                        <li class="mb-2"><?php echo $footer_content[0]['email'];?></li>
                    </ul>
                    <a class="logo-footer" href="<?php echo base_url()?>home">
                        <img class="img-fluid mb-4" style="width: 200px" src="<?php echo base_url()?>uploads/site_logo/<?php echo $footer_content[0]['profile_pic'];?>" alt="logo">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-4">Explore</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-color" href="">Administration</a></li>
                        <li class="mb-2"><a class="text-color" href="">Awards and Honours</a></li>
                        <li class="mb-2"><a class="text-color" href="">Depertments</a></li>
                        <li class="mb-2"><a class="text-color" href="">International Students</a></li>
                        <li class="mb-2"><a class="text-color" href="">Tenders and Quotations</a></li>
                        <li class="mb-2"><a class="text-color" href="">RTI</a></li>
                        <li class="mb-2"><a class="text-color" href="">Industry Consultation</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-4">Quick Access</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-color" href="">Donate</a></li>
                        <li class="mb-2"><a class="text-color" href="">Intranet Portal</a></li>
                        <li class="mb-2"><a class="text-color" href="">Webmail</a></li>
                        <li class="mb-2"><a class="text-color" href="">Book quest house</a></li>
                        <li class="mb-2"><a class="text-color" href="">Support @ IITR</a></li>
                        <li class="mb-2"><a class="text-color" href="">Give Feedback</a></li>
                        <li class="mb-2"><a class="text-color" href="">ICC</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <!-- <a class="weatherwidget-io" href="https://forecast7.com/en/31d7877d00/kamand/" data-label_1="IIT Mandi" data-label_2="WEATHER" data-icons="Climacons Animated" data-shadow="#c7c2c2" data-textcolor="#423434" data-highcolor="#e81d1d" data-lowcolor="#1b32cf" data-suncolor="#fba303" data-cloudcolor="#10c9fb" data-cloudfill="#ecf4f8" data-raincolor="#0407fc" data-snowcolor="#dcd9d9" >KAMAND WEATHER</a> -->
                    <a class="weatherwidget-io" href="https://forecast7.com/en/31d7877d00/kamand/" data-label_1="IIT Mandi" data-label_2="WEATHER" data-icons="Climacons Animated" data-textcolor="#fff" data-highcolor="#e81d1d" data-lowcolor="#C8C8DC" data-suncolor="#fba303" data-cloudcolor="#10c9fb" data-cloudfill="#ecf4f8" data-raincolor="#0407fc" data-snowcolor="#dcd9d9" >KAMAND WEATHER</a>
                        <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-color" href="">Meet the team</a></li>   
                    </ul>     
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright . All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/aos/aos.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/slick/slick.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="<?php echo base_url()?>assets/fontend/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/engine1/script.js"></script>
<script src="<?php echo base_url()?>ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- for menu -->
<!-- <script src="<?php echo base_url();?>assets/fontend/js/js_nlm7XvIloyPDi0SaRBYmQtQBChCi536bF5OFGig-VRY.js"></script> -->
<script src="<?php echo base_url();?>assets/fontend/js/primary-nav.nuKHgqPrYVsT.js?v=9.3.21" type="module"></script>
<script>
    $(document).ready(function(){
        // $('.hero-slider').slick({
        //     autoplay: false,
        //     autoplaySpeed: 3000,
        //     arrows : false,
        // });
        //var imageUrl = $(this).data('background');
        //console.log(imageUrl);
        //$('.slick-current').css('background-image', 'url(' + imageUrl + ')');
        $('.number').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        $('#v-pills-tabContent1').show();
        $("#v-pills-link1-tab").click(function() {
            $('.slide_content .row').animate({
                scrollTop: $("#v-pills-link1").offset().top},
                'slow');
        });
        $("#v-pills-link2-tab").click(function() {
            $('.slide_content .row').animate({
                scrollTop: $("#v-pills-link2").offset().top},
                'slow');
        });
        $("#v-pills-link3-tab").click(function() {
            $('.slide_content .row').animate({
                scrollTop: $("#v-pills-link3").offset().top},
                'slow');
        });
        $("#v-pills-link4-tab").click(function() {
            $('.slide_content .row').animate({
                scrollTop: $("#v-pills-link4").offset().top},
                'slow');
        });
        $("#v-pills-link5-tab").click(function() {
            $('.slide_content .row').animate({
                scrollTop: $("#v-pills-link5").offset().top},
                'slow');
        });
        $("#v-pills-link6-tab").click(function() {
            $('.slide_content .row').animate({
                scrollTop: $("#v-pills-link6").offset().top},
                'slow');
        });

        /* save about me */
        $(".about_btn").click(function() {
            $(".about_data").css("opacity", "1");
        });

        $("#form_aboutme").on('submit',(function(e) {
            e.preventDefault();
            var uid = $("#uid").val();
            var fname = $("#fname").val();
            var email = $("#email").val();
            var enrollno = $("#enrollno").val();
            var admissionyear = $("#admissionyear").val();
            var research_interest = $("#research_interest").val();
            var aboutme = CKEDITOR.instances['aboutme'].getData();
            $.ajax({
                url: "<?php echo base_url()?>student/save_aboutme",
                type: "POST",
                data:  {uid: uid,fname: fname, email: email, enrollno: enrollno, admissionyear: admissionyear, research_interest: research_interest, aboutme: aboutme},
                beforeSend : function() {
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data=='invalid') {
                        $("#err").html("Invalid File !").fadeIn();
                    } else {
                        $("#preview").html(data).fadeIn();
                        $("#form_aboutme")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        })); 

        /* save education */
        $(".edu_add_btn").click(function() {
            $(".edu_data").css("opacity", "1");
        });

        $("#form_edu").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo base_url()?>student/save_educate",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data !='invalid') {
                        $("#form_edu")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        }));

        /* save experience */
        $(".exp_add_btn").click(function() {
            $(".exp_data").css("opacity", "1");
        });

        $("#form_exp").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo base_url()?>student/save_experience",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data !='invalid') {
                        $("#form_exp")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        }));

        /* save publication */
        $('.body_content').hide();
        $("select.publication_type").change(function(){
            var selectedPublication = $(this).children("option:selected").val();
            if (selectedPublication == 'Journal Article') {
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').show();
                $('.conference_name').hide();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').show();
                $('.location').hide();
                $('.external_Link').show();
                $('.editors').hide();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
            } else if (selectedPublication == 'Conference Paper') {
                $('.body_content').hide();
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').show();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').show();
                $('.location').show();
                $('.external_Link').show();
                $('.editors').hide();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
            } else if (selectedPublication == 'Book Chapter') {
                $('.body_content').hide();
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').hide();
                $('.book_name').show();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').hide();
                $('.location').hide();
                $('.external_Link').show();
                $('.editors').show();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
            } else if (selectedPublication == 'Book') {
                $('.body_content').hide();
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').hide();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').show();
                $('.location').hide();
                $('.external_Link').show();
                $('.editors').hide();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
            } else if (selectedPublication == 'Patent') {
                $('.body_content').hide();
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').hide();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').show();
                $('.publisher').hide();
                $('.location').hide();
                $('.external_Link').hide();
                $('.editors').hide();
                $('.page_number').hide();
                $('.short_summery').show();
                $('.key_points').show();
            } else {
                $('.body_content').hide();
            }
        });

        $(".pub_add_btn").click(function() {
            $(".pub_data").css("opacity", "1");
        });

        $("#form_pub").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo base_url()?>student/save_publication",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data !='invalid') {
                        $("#form_pub")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        }));

        /* save Award */
        $(".awrd_add_btn").click(function() {
            $(".awrd_data").css("opacity", "1");
        });

        $("#form_awrd").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo base_url()?>student/save_award",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data !='invalid') {
                        $("#form_exp")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        }));

        $("#formf_aboutme").on('submit',(function(e) {
            e.preventDefault();
            var uid = $("#uid").val();
            var aboutme = CKEDITOR.instances['aboutme'].getData();
            $.ajax({
                url: "<?php echo base_url()?>faculty/save_aboutme",
                type: "POST",
                data:  {uid: uid, aboutme: aboutme},
                beforeSend : function() {
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data=='invalid') {
                        $("#err").html("Invalid File !").fadeIn();
                    } else {
                        $("#preview").html(data).fadeIn();
                        $("#formf_aboutme")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        }));

        $("#formf_edu").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo base_url()?>faculty/save_educate",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data !='invalid') {
                        $("#formf_edu")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        }));

        $("#formf_exp").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo base_url()?>faculty/save_experience",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data) {
                    if(data !='invalid') {
                        $("#formf_exp")[0].reset(); 
                        location.reload();
                    }
                },
                error: function(e) {
                    $("#err").html(e).fadeIn();
                }          
            });
        }));
    });

    /* Edit education */
    function EditEduID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>student/student/edit_educate",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $("#dataid").val(response.id);
	            $("#degree").val(response.degree);
	            $("#university").val(response.university);
	            $("#year").val(response.year);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete education */
    function DtlEduID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_educate",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit Experience */
    function EditExpID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>student/student/edit_experience",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $("#expid").val(response.id);
                $("#position").val(response.position);
                $("#exp_year").val(response.year);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete Experience */
    function DtlExpID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_experience",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit Journal */
    function EditjorID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>student/student/edit_publication",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').show();
                $('.conference_name').hide();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').show();
                $('.location').hide();
                $('.external_Link').show();
                $('.editors').hide();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
                $("#pubid").val(response.id);
                $("#publication_type").val(response.publication_type);
                $("#author_name").val(response.author_name);
                $("#paper_title").val(response.paper_title);
                $("#journal_name").val(response.journal_name);
                $("#publish_date").val(response.journal_name);
                $("#publisher").val(response.publisher);
                $("#external_Link").val(response.external_Link);
                $("#page_number").val(response.page_number);
                $("#highlight").val(response.highlight);
                $("#short_summery").val(response.short_summery);
                $("#key_points").val(response.key_points);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete Journal */
    function DtljorID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_publication",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit Conference paper */
    function EditconID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>student/student/edit_publication",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').show();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').show();
                $('.location').show();
                $('.external_Link').show();
                $('.editors').hide();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
                $("#pubid").val(response.id);
                $("#publication_type").val(response.publication_type);
                $("#author_name").val(response.author_name);
                $("#paper_title").val(response.paper_title);
                $("#conference_name").val(response.conference_name);
                $("#publish_date").val(response.publish_date);
                $("#publisher").val(response.publisher);
                $("#location").val(response.location);
                $("#external_Link").val(response.external_Link);
                $("#page_number").val(response.page_number);
                $("#highlight").val(response.highlight);
                $("#short_summery").val(response.short_summery);
                $("#key_points").val(response.key_points);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete Conference paper */
    function DtlconID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_publication",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit Book Chapter */
    function EditBcID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>student/student/edit_publication",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').hide();
                $('.book_name').show();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').hide();
                $('.location').hide();
                $('.external_Link').show();
                $('.editors').show();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
                $("#pubid").val(response.id);
                $("#publication_type").val(response.publication_type);
                $("#author_name").val(response.author_name);
                $("#paper_title").val(response.paper_title);
                $("#book_name").val(response.book_name);
                $("#publish_date").val(response.publish_date);
                $("#external_Link").val(response.external_Link);
                $("#editors").val(response.editors);
                $("#page_number").val(response.page_number);
                $("#highlight").val(response.highlight);
                $("#short_summery").val(response.short_summery);
                $("#key_points").val(response.key_points);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete Book Chapter */
    function DtlBcID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_publication",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit Book */
    function EditBkID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>student/student/edit_publication",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').hide();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').hide();
                $('.publisher').show();
                $('.location').hide();
                $('.external_Link').show();
                $('.editors').hide();
                $('.page_number').show();
                $('.short_summery').show();
                $('.key_points').show();
                $("#pubid").val(response.id);
                $("#publication_type").val(response.publication_type);
                $("#author_name").val(response.author_name);
                $("#paper_title").val(response.paper_title);
                $("#publish_date").val(response.publish_date);
                $("#publisher").val(response.publisher);
                $("#external_Link").val(response.external_Link);
                $("#page_number").val(response.page_number);
                $("#highlight").val(response.highlight);
                $("#short_summery").val(response.short_summery);
                $("#key_points").val(response.key_points);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete Book */
    function DtlBkID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_publication",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit Patent */
    function EditPtID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>student/student/edit_publication",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $('.body_content').show();
                $('.attachment').show();
                $('.author_name').show();
                $('.paper_title').show();
                $('.journal_name').hide();
                $('.conference_name').hide();
                $('.book_name').hide();
                $('.publish_date').show();
                $('.patient_number').show();
                $('.publisher').hide();
                $('.location').hide();
                $('.external_Link').hide();
                $('.editors').hide();
                $('.page_number').hide();
                $('.short_summery').show();
                $('.key_points').show();
                $("#pubid").val(response.id);
                $("#publication_type").val(response.publication_type);
                $("#author_name").val(response.author_name);
                $("#paper_title").val(response.paper_title);
                $("#publish_date").val(response.publish_date);
                $("#patient_number").val(response.patient_number);
                $("#highlight").val(response.highlight);
                $("#short_summery").val(response.short_summery);
                $("#key_points").val(response.key_points);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete Patent */
    function DtlPtID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_publication",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit faculty Academic */
    function EditFEduID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>facultys/facultys/edit_educate",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $("#acaid").val(response.id);
	            $("#degree").val(response.degree);
	            $("#university").val(response.university);
	            $("#year").val(response.year);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete faculty Academic */
    function DtlFEduID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_educate",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    /* Edit faculty Experience */
    function EditFExpID(id) {
        var e_id = id;
        $.ajax({
	        type: "POST",
	        url: "<?php echo base_url()?>facultys/facultys/edit_experience",
	        data: {id:e_id},
	        beforeSend: function () {
	            //$("#preview").fadeOut();
                $("#err").fadeOut();
	        },
	        success: function (response) {
                //console.log(response);
	            response = JSON.parse(response);
                console.log(response);
                $("#expid").val(response.id);
	            $("#organization").val(response.organization);
	            $("#position").val(response.position);
	            $("#exp_year").val(response.year);
	            $("#status").val(response.status);
	        }
	    });
    }

    /* Delete faculty Experience */
    function DtlFExpID(id) {
        if(confirm("Are you sure you want to delete this?")){
            var e_id = id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>student/student/dlt_experience",
                data: {id:e_id},
                beforeSend: function () {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function (response) {
                    console.log(response);
                    alert('Successfuly deleted');
                    location.reload();
                }
            });
        } else {
            return false;
        }
    }

    CKEDITOR.replace('aboutme');
    CKEDITOR.replace('short_summery');
    CKEDITOR.replace('key_points');
</script>
<!-- <?php 
for ($i = 0; $i <= 7; $i++) { ?>
    <script>
    $('#v-pills-link'+<?php echo $i; ?>+'-tab').on("click", function(){
        $('#v-pills-link'+<?php echo $i; ?>+'').addClass("show active");
        $('#v-pills-link'+<?php echo $i-1; ?>+'').removeClass("show active");
    });
    </script>
<?php } ?> -->

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</body>
</html>