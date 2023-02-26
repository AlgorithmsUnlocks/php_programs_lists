<div class="text-center">
    <?php
    class Person{
        public $name;
        public $email;
        function __construct($name="",$email=""){
            $this->name = $name;
            $this->email = $email;
        }
        function get_name(){
            return $this->name;
        }
        function set_name($name){
            $this->name = $name;
        }
        function get_email(){
            return $this->email;
        }
        function set_email($email){
            $this->email = $email;
        }
        function person_details(){
            echo "Person name is : {$this->get_name()} \n";
            echo "Person email is : {$this->get_email()} \n";
        }
    }
    $person_1 = new Person();
    $person_1->set_name("Ruman Ahmed");
    $person_1->set_email("ruma@gmail.com");
    $person_1->person_details();
    ?>
    <img src="images/oop2.png" class="img-fluid" />
</div>