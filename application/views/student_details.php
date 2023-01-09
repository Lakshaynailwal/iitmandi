<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
</style>
<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li>Portfolio Details</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <h3 style="text-align: center; text-transform: capitalize">Welcome <?php echo $about_me[0]['fname'];?></h3>                      
                        <div class="row">
                            <div class="col-3">
                                <!-- Tab navs -->
                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                                    <a class="nav-link active" id="v-pills-link1-tab" data-mdb-toggle="pill" role="tab">About me</a>
                                    <a class="nav-link active" id="v-pills-link2-tab" data-mdb-toggle="pill" role="tab">Education</a>
                                    <a class="nav-link active" id="v-pills-link3-tab" data-mdb-toggle="pill" role="tab">Experience</a>
                                    <a class="nav-link active" id="v-pills-link4-tab" data-mdb-toggle="pill" role="tab">Publications</a>
                                    <a class="nav-link active" id="v-pills-link5-tab" data-mdb-toggle="pill" role="tab">Awards and Honours</a>
                                    <a class="nav-link active" id="v-pills-link6-tab" data-mdb-toggle="pill" role="tab">Photo Gallery</a>
                                </div>
                                <!-- Tab navs -->
                            </div>
                            <div class="col-9">
                            <!-- Tab content -->
                                <div class="container slide_content">
                                    <div class="row" style="overflow: scroll; height: 425px;">
                                        <div class="tab-content1" id="v-pills-tabContent1">
                                            <div class="tab-pane" id="v-pills-link1" role="tabpanel" aria-labelledby="v-pills-link1-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <div class="col-sm-6" style="text-align: right;float: left;display: inline-block;">
                                                                <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $about_me[0]['team_image'];?>" alt=""/>
                                                            </div>
                                                            <div class="col-sm-6" style="float: left;display: inline-block;">
                                                                <p class='bio_text'>Name: <?php echo $about_me[0]['fname'];?></p>
                                                                <p class='bio_text'>Enrolment No.: <?php echo $about_me[0]['enrollno'];?></p>
                                                                <p class='bio_text'>Email: <?php echo $about_me[0]['email'];?></p>
                                                                <p class='bio_text'>Admission year: <?php echo $about_me[0]['admissionyear'];?></p>
                                                                <p class='bio_text'>Research Interests: <?php echo $about_me[0]['research_interest'];?></p>
                                                            </div>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                        <p class='bio_text1'><?php echo $about_me[0]['aboutme'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link2" role="tabpanel" aria-labelledby="v-pills-link2-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Education</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Degree</th>
                                                                        <th>University</th>
                                                                        <th>Year</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($education)) {
                                                                        $i=1; ?>
                                                                    <?php foreach($education as $row1) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row1['degree']?></td>
                                                                        <td><?php echo $row1['university']?></td>
                                                                        <td><?php echo $row1['year']?></td>
                                                                    </tr>
                                                                    <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link3" role="tabpanel" aria-labelledby="v-pills-link3-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Professional Experience</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Position(Company name)</th>
                                                                        <th>Year</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($experience)) {
                                                                        $i=1; ?>
                                                                    <?php foreach($experience as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row['position'];?></td>
                                                                        <td><?php echo $row['year'];?></td>
                                                                    </tr>
                                                                    <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link4" role="tabpanel" aria-labelledby="v-pills-link4-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Publications</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <p>1. Journal article</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title of Paper</th>
                                                                        <th>Journal Name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($journal)) {
                                                                        $i=1; ?>
                                                                    <?php foreach($journal as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['journal_name'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['publisher'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>2. Conference paper</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title of Paper</th>
                                                                        <th>Conference name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Organizer/Publisher</th>
                                                                        <th>location</th>
                                                                        <th>External Link</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($conference)) {
                                                                        $i=1; ?>
                                                                    <?php foreach($conference as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['conference_name'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['publisher'];?></td>
                                                                        <td><?php echo $row['location'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>3. Book chapter</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Book name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Editors</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($book_chapter)) {
                                                                        $i=1; ?>
                                                                    <?php foreach($book_chapter as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['book_name'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['publisher'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>4. Book</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($book)) {
                                                                        $i=1; ?>
                                                                    <?php foreach($book as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['publisher'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>5. Patent</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Publised date</th>
                                                                        <th>Patent Number</th>
                                                                        <th>Highlights</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($patent)) {
                                                                        $i=1; ?>
                                                                    <?php foreach($patent as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['patient_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link5" role="tabpanel" aria-labelledby="v-pills-link5-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Awards and Honours</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link6" role="tabpanel" aria-labelledby="v-pills-link6-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Photo Gallery</h2>
                                                        </div>
                                                        <div class="content">
                                                            <div class='col-sm-12'>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
<?php echo $footer?>