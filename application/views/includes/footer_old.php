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
<script src="<?php echo base_url()?>assets/fontend/vendor/aos/aos.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/slick/slick.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/fontend/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="<?php echo base_url()?>assets/fontend/js/main.js"></script>

<!-- for menu -->
<script src="<?php echo base_url();?>assets/fontend/js/js_nlm7XvIloyPDi0SaRBYmQtQBChCi536bF5OFGig-VRY.js"></script>
<script src="<?php echo base_url();?>assets/fontend/js/primary-nav.nuKHgqPrYVsT.js?v=9.3.21" type="module"></script>
<script>
    $(document).ready(function(){
        $('.hero-slider').slick({
            autoplay: false,
            autoplaySpeed: 3000,
            arrows : false,
        });
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
    })
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</body>
</html>