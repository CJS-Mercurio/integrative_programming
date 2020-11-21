<?php
    class User {
        //Properties
        public $name;
        public $username;
        public $email;

        //Methods

        function __construct($name, $username, $email){
            $this->name = $name;
            $this->username = $username;
            $this->email = $email;
        }
    }
    class User1 extends User{

        function addFriend(){
            echo "{$this->name} . Added a Friend";
        }
        
        function postStatus(){
            echo "{$this->name} . Posted a Status";
        }
    }

    $user1 = new User1("Christ John Mercurio", "iSkull04", "christjohn.mercurio04@gmail.com");
    $user1->addFriend();
    echo "<br>";
    $user1->postStatus();

?>