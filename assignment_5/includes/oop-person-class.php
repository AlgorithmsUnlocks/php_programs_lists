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
        echo "<ul class='text-center bg-success text-white p-3'>";
        echo "<li> Person name is : {$this->get_name()} </li>\n";
        echo "<li> Person email is : {$this->get_email()} </li>\n";
        echo "</ul>";
    }
}
?>