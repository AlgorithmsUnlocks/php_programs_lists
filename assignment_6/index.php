<?php include ("includes/header.php"); ?>

<!--Header Section -->

<section id="header-part">

    <div class="container">
       <div class="logo-here">
           <h2>মডিউল ৬ এর এসাইনমেন্ট </h2>
       </div>
    </div>

</section>

<!--Main P Section-->
<section id="main-part">
    <div class="container">

      <div class="main-content-start">
          <div class="text-content">

              <div class="button-group">
                  <a href="index.php"><button type="button" class="btn btn-outline-primary">HTML Forms </button></a>
                  <a href="success.php"><button type="button" class="btn btn-outline-secondary"> View Data</button></a>
              </div>
          </div>

          <div class="dynamic-content-wrapper">

              <section id="basic-forms">

                  <div class="container">

                      <div class="row">
                          <div class="col-md-8 m-auto">
                              <h4 class="text-center">User Registration</h4>
                              <form action="submit.php" method="post" enctype="multipart/form-data">

                                  <div class="form-group">
                                      <label for="name">Full Name</label>
                                      <input type="text" name="name" id="name" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="email">Email Addredd</label>
                                      <input type="email" name="email" id="email" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label for="password">Password</label>
                                      <input type="password" name="password" id="password" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <label for="profile_picture">Profile Picture</label>
                                      <input type="file" name="profile_picture" id="profile_picture" class="form-control">
                                  </div>
                                  <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
                              </form>
                          </div>
                      </div>

                  </div>
              </section>

          </div>
      </div>

    </div>
</section>


<?php include ("includes/footer.php"); ?>


