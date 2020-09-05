<?php

function newsletterJSON(){

    // Create a class that will store the user's answers to form fields, 
    // and use its properties to populate a JSON file

    class Customer {

        private $newsletter_email="";
        
        // Set the properties of the instance to customer's answers
        // in the form 

        public function setProperties(){

            $this->newsletter_email=filter_var($_POST["newsletter"], FILTER_SANITIZE_STRING);
            
        }

        // Return instance's properties 

            public function getNewsletterEmail(){
                return $this->newsletter_email; 
            }

    }

        $Customer = new Customer(); 
        $Customer->setProperties();

        // Create PHP associative array 

        $array =  array(
                "newsletter" => $Customer->getNewsletterEmail(), 
            );
        
        

        // Create json 

        $json = json_encode($array); 

        print_r($json);

        // Create a json file to store data if file doesn't already exist
        // OR
        // Append json to already existing file

        if (!file_exists("./newsletter.json")){

            file_put_contents("newsletter.json", $json);

        }

        else{

            file_put_contents("./newsletter.json", $json, FILE_APPEND);
        }
         
        header("location: ../../index.php");

    }

    if (isset($_POST['newsletter'])){

        newsletterJSON();

    }
?>