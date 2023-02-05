
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-5 rtlz">
          <H5> <Span class="vrdl"> C-TECH </Span> &nbsp; Certificate</H5>
          <div>

            <div class="d-flex align-items-start responsive-tab-menu">

              <ul class="nav flex-column nav-pills nav-tabs-dropdown me-3" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_course_category ORDER BY category_id ASC");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
                    foreach ($result as $key=> $row) {
                    $category_id = $row['category_id'];
                ?>

                    <li class="nav-item">
                      <a class="nav-link text-start <?php if($key == 0){ echo 'active';} ?>" href="<?php echo $row1['file_name']; ?>.html" id="v-pills-<?php echo $row['category_name'] ?>" data-bs-toggle="pill"
                        data-bs-target="#v-pills-<?php echo $row['category_name'] ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $row['category_name'] ?>
                      </a>
                    </li>
                <?php } ?>

                <!-- <li class="nav-item">
                  <a class="nav-link text-start" href="#" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Metaverse <span class="mblw" style="float:right;"> V </span>

                  </a>
                </li> -->


                <!-- <li class="nav-item">
                  <a class="nav-link text-start" href="#" id="v-pills-contact1-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-contact" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                    Emerging Technologies

                  </a>
                </li> -->


             <!--    <li class="nav-item">
                  <a class="nav-link text-start" href="#" id="v-pills-contact2-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-contact" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                    Cyber Security
                  </a>
                </li> -->
              </ul>

              <div class="tab-content responsive-tab-content" id="v-pills-tabContent" style="width:100%;">

                 <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_course_category ORDER BY category_id ASC");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
                    foreach ($result as $key=> $row) {
                    $category_id = $row['category_id'];
                ?>
                <div class="tab-pane fade show <?php if($key == 0){ echo 'active';} ?>" id="v-pills-<?php echo $row['category_name'] ?>" role="tabpanel"
                  aria-labelledby="v-pills-<?php echo $row['category_name'] ?>" tabindex="0">
                  <ul class="list-unstyled quick-links">
            <?php
                $statement1 = $pdo->prepare("SELECT * FROM tbl_course where category_id = $category_id");
                $statement1->execute();
                $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($result1 as $key1=> $row1) {
            ?>
                    <li><a href="<?php echo $row1['file_name']; ?>.html"><?php echo $row1['title']; ?></a></li>
            <?php } ?>
                    <!-- <li><a href="#">Metaverse</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li> -->
                  </ul>
                </div>
              <?php } ?>
               <!--  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                  tabindex="0">
                  <ul class="list-unstyled quick-links">
                    <li><a href="#"> Infrastructure</a></li>
                    <li><a href="#">Metaverse</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li>
                  </ul>
                </div> -->
           <!--      <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                  tabindex="0">



                  <ul class="list-unstyled quick-links">
                    <li><a href="#">IT Infrastructure</a></li>
                    <li><a href="#">Metaverse</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>


                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li>
                    <li>
                      Technovalley Africa<br> Proprietory Limited,Plot No. 53609/4,First Floor,<a href="#">FAQ</a></li>

                    <li><a href="#">Videos</a></li>
                  </ul>

                </div> -->





                <div class="tab-pane fade" id="v-pills-contact1" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                  tabindex="0">
                  <ul class="list-unstyled quick-links">

                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Get Started</a></li>
                    <li><a href="#">Videos</a></li>
                  </ul>
                </div>





                <div class="tab-pane fade" id="v-pills-contact2" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                  tabindex="0">Contact content</div>

              </div>
            </div>
          </div>



        </div>




        <div class="col-md-1">
        </div>




        <div class="col-md-2 ">
          <h4> Quick Links</h4>
          <ul class="list-styled" style="text-align:left;">
            <li><a href="#" class="text-white">Courses</a></li>
            <div class="mb-2"></div>
            <li><a href="#" class="text-white">Testimonial</a></li>
            <div class="mb-2"></div>
            <li><a href="#" class="text-white">About</a></li>
            <div class="mb-2"></div>
            <li><a href="#" class="text-white">Contact</a></li>
          </ul>
        </div>

        <div class=" col-0  col-md-1 ">

        </div>




        <div class=" col-xs-12  col-md-3 ">
          <img src="assets/img/logo.png">

          <h6>
            Technovalley Africa Proprietory Limited,Plot No. 53609/4,First Floor,<br> Gaborone West, Gaborone, Botswana.
          </h6>
          </ul>

          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a>
            </li>
          </ul>
        </div>

      </div>


    </div>

    <hr>
    <div>
      <h4 class=" text-center"> Copyright © 2023 technovally. All rights reserved</h4>
    </div>
  </section>