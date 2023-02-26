<?php
include "includes/oop-person-class.php";

if(isset($_POST['submit'])){
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];

    if(!empty($name) && !empty($email)){

        $person_1 = new Person();
        $person_1->set_name($name);
        $person_1->set_email($email);
        $person_1->person_details();

    }
}


?>

<section id="basic-forms">


    <div class="container">



        <form action="" method="POST">

            <div class="col-md-8 m-auto">
                <div class="form-group">
                    <input type="text" value="" name="user_name" class="form-control" placeholder="Enter your name">
                </div>
            </div>
            <div class="col-md-8 m-auto">
                <div class="form-group">
                    <input type="email" value="" name="user_email" class="form-control" placeholder="Enter your email">
                </div>
            </div>
            <div class="col-md-8 m-auto">
                <div class="form-group">
                    <input type="submit" class="btn btn btn-outline-primary form-control" name="submit" value="Try to Submit">
                </div>
            </div>


        </form>
    </div>
</section>