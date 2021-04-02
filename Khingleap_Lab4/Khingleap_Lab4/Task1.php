<?php 
    /**
     * Advantage of multi-inheritance
     * 
     * + Reduce rewriting code
     * + Reusable
     
     * Disadvantage of multi-inheritance
     * 
     * + It's take abit more time to execute the child class becuase it will leap 
     * through to all parents class of its child class and then execute the child class
     * Example: child class inheritance from 10 parents it will go lean through 10 parents class and then it
     * will execute the child class
     */
    class Person{
        public  $name;
        public  $age;
        
        function __construct($name,$age)
        {
            $this->name = $name;
            $this->age = $age;
        }
        public function getPersonInfo(){
            echo $this->name ." "."is"." ".$this->age." "."years old.<br>";
        }
    }
    interface PersonAction{
        public function speak();
    }
    class Jack extends Person implements PersonAction{
        public function status(){
            echo "Currently single<br>";
        }
        public function speak(){
            echo "Soursdey<br>";
        }    
    }
    $person = new Jack("Jack",30);
    $person ->getPersonInfo();
    $person ->speak(); 
    $person ->status();
?>