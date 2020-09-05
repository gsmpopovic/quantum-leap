<?php

function messagesJSON(){


    class Customer {
        private $firstName="";
        private $lastName=""; 
        private $email="";
        private $msg=""; 
        
        // Set the properties of the instance to customer's answers
        // in the form 

        public function setProperties(){

            $this->firstName=filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
            $this->lastName=filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
            $this->email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $this->msg=filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
            
        }

        // Return instance's properties 

        public function getfirstName(){
                return $this->firstName; 
            }
            public function getLastName(){
                return $this->lastName; 
            }
            public function getEmail(){
                return $this->email; 
            }
        
        public function getMsg(){
            return $this->msg; 
        }
    }

        $Customer = new Customer(); 
        $Customer->setProperties();

        // Create PHP associative array 

        $array = array(
            'firstName' => $Customer->getfirstName(),
            "lastName" => $Customer->getLastName(),
            "email" => $Customer->getEmail(), 
            "message" => $Customer->getMsg()
        );

        // Create json 

        $json = json_encode($array); 

        print_r($json);

        // Create a json file to store data

        file_put_contents("messages.json", $json); 
        
        header("location: ../../contact.php");

    }

    if (isset($_POST['contact'])){
        messagesJSON();
        // header("location: ../../contact.php");
    }
?>