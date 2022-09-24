<?php $footer_content=$this->common_model->get_data(SETTINGS,array('id'=>1));?>
<footer>
    <!-- <div class="newsletter">
        <div class="container">
          <div class="row">
            <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
              <h3 class="text-white">Subscribe Now</h3>
              <form action="#">
                <div class="input-wrapper">
                  <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
                  <button type="submit" value="send" class="btn btn-primary">Join</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div> -->
    <div class="footer bg-footer section1 border-bottom" style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-8 mb-4 mb-lg-0">
                    <a class="logo-footer" href="<?php echo base_url()?>home"><img class="img-fluid mb-4" style="width: 170px;" src="<?php echo base_url()?>assets/images/site_logo/<?php echo $footer_content[0]['profile_pic'];?>" alt="logo"></a>
                    <ul class="list-unstyled" style="color: #000;font-weight: 600;">
                        <li class="mb-2"><?php echo $footer_content[0]['location1']?></li>
                        <li class="mb-2"><?php echo $footer_content[0]['contact']?></li>
                        <li class="mb-2"><?php echo $footer_content[0]['email']?></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white1 mb-5">About Us</h4>
                    <ul class="list-unstyled" style="color: #000;font-weight: 600;">
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/mission-and-vision">Mission & Vision</a></li>
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/from-the-managing-directors-desk">Chairman's Message</a></li>
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/from-the-ceos-desk">CEO Message</a></li>
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/from-the-principals-desk">Our Principal</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white1 mb-5">Academic</h4>
                    <ul class="list-unstyled" style="color: #000;font-weight: 600;">
                        <!-- <li class="mb-3"><a class="text-color" href="<?php echo base_url()?>page/rules-and-regulations">Rules</a></li> -->
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/fees-structure">Fees Structure</a></li>
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/annual-calender">Calendar</a></li>
                        <!-- <li class="mb-3"><a class="text-color" href="<?php echo base_url()?>page/gallery">Gallery</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white1 mb-5">Others</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/mandatory-disclosure">Mandatory Disclosure</a></li>
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/privacy-policy">Privacy Policy </a></li>
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/terms-of-use">Terms of Use </a></li>
                        <li class="mb-2"><a class="text-color" href="<?php echo base_url()?>page/disclaimer">Disclaimer </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright
                    <script>
                      var CurrentYear = new Date().getFullYear()
                      document.write(CurrentYear)
                    </script> ©</p>
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo $footer_content[0]['facekbook_url'];?>"><i class="ti-facebook text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo $footer_content[0]['twitter_link'];?>"><i class="ti-twitter-alt text-primary"></i></a></li>
                        <!-- <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo $footer_content[0]['linkedin_url'];?>"><i class="ti-linkedin text-primary"></i></a></li> -->
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo $footer_content[0]['instagram_url'];?>"><i class="ti-instagram text-primary"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/slick/slick.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/aos/aos.js"></script>
<script src="<?php echo base_url()?>assets/plugins/venobox/venobox.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/filterizr/jquery.filterizr.min.js"></script>
<script src="<?php echo base_url()?>assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="<?php echo base_url()?>assets/plugins/google-map/gmap.js"></script>
<script src="<?php echo base_url()?>assets/js/script.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function(){
            var name = $('#name').val();
            var email = $('#mail').val();
            var phone = $('#subject').val();
            var message = $('#message').val();
            if(name =='' || email =='' || phone =='' || message ==''){
                $('.success_msg').hide();
                $('.error_msg').show();
                $('.error_msg').append('<p>All fields are required.</p>');
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url()?>Home/contactviamail",
                    data: {name: name, email: email, phone: phone, message: message},
                    cache: false,
                    success: function(html) {
                        if(html == 1) {
                            $('.error_msg').hide();
                            $('.success_msg').append('<p>Mail sent successfuly</p>');
                            $("#myForm").trigger("reset");
                            setTimeout(function() {
                                $('.success_msg').fadeOut('fast'); 
                            }, 10000);
                            $("#contact_form")[0].reset();
                        }else{
                            $('.error_msg').append('<p>Please try again!</p>');
                            setTimeout(function() {
                                $('.error_msg').fadeOut('fast'); 
                            }, 10000);
                        }
                    }
                });
            }
        })
    })
</script>
</body>
</html>