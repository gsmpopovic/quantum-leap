<?php

function messagesJSON(){

    // Create a class that will store the user's answers to form fields, 
    // and use its properties to populate a JSON file

    class Customer {
        private $firstName="";
        private $lastName=""; 
        private $email="";
        private $message=""; 
        
        // Set the properties of the instance to customer's answers
        // in the form 

        public function setProperties(){

            $this->firstName=filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
            $this->lastName=filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
            $this->email=filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $this->message=filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
            
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
        
        public function getMessage(){
            return $this->message; 
        }
    }

        $Customer = new Customer(); 
        $Customer->setProperties();

        // Create PHP associative array 

        $array =  array(
                "firstName" => $Customer->getfirstName(),
                "lastName" => $Customer->getLastName(),
                "email" => $Customer->getEmail(), 
                "message" => $Customer->getMessage()
            );

        // Create a json file to store data if file doesn't already exist
        // OR
        // Append json to already existing file

        if (!file_exists('messages.json')){

            // Create an array to store json objects if one doesn't exist 

            $json_array = array(); 

            // Add to that array 

            array_push($json_array, $array); 
            // Store it in a file 

            $json_array=json_encode($json_array);

            file_put_contents('messages.json', $json_array);

        }

        else{
            // If one does exist, grab it

            $json_array=file_get_contents('messages.json');

            // Decode from JSON to PHP formatting 

            $json_array=json_decode($json_array);

            // Add to the container array 

            array_push($json_array, $array); 

            // Encode the array with appended data 

            $json_array=json_encode($json_array, true);

            // Write to file 

            file_put_contents("messages.json", $json_array);
        }
        
        // Redirect user to contact page 
       header("location: ../../contact.php");

    }

    if (isset($_POST['contact'])){

        messagesJSON();
        // header("location: ../../contact.php");
    }
?>