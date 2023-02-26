<?php include ("includes/header.php"); ?>

<!--Header Section -->

<section id="header-part">

    <div class="container">
       <div class="logo-here">
           <h2>HTML, Basic OOP, and Superglobal Variables in PHP</h2>
       </div>
    </div>

</section>

<!--Main P Section-->
<section id="main-part">
    <div class="container">

      <div class="main-content-start">
          <div class="text-content">
              <h4>HTML, Basic OOP, and Superglobal Variables in PHP</h4>
              <p>
             *** This is an OOP Based Login Form!!!
              </p>
              <div class="button-group">
                  <a href="index.php"><button type="button" class="btn btn-outline-primary">Task - 01 </button></a>
                  <a href="index.php?source=basic-oop"<button type="button" class="btn btn-outline-secondary">Task - 02 </button></a>
                  <a href="index.php?source=super-global-var"> <button type="button" class="btn btn-outline-success">Task - 03 </button></a>
              </div>
          </div>

          <div class="dynamic-content-wrapper">

              <?php

              $source = "";
              if(isset($_GET['source'])){
                  $source = $_GET['source'];
              }
              switch ($source){
                  case "basic-oop":
                      echo "<h4 class='text-center text-success'>*** Task - 02 => This is Basic OOP </h4>";
                      include("includes/basic-oop.php");
                      break;
                  case "super-global-var":
                      echo "<h4 class='text-center text-success'>*** Task - 03 => This is Superglobal  </h4>";
                      include("includes/super-global-var.php");
                      break;
                  default:
                      echo "<h4 class='text-center text-success'>*** Task - 01 => This is HTML Forms </h4>";
                      include ("includes/basic-forms.php");
                      break;
              }

              ?>

          </div>
      </div>

    </div>
</section>


<?php include ("includes/footer.php"); ?>


