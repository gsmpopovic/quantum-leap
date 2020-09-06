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

        if (!file_exists('newsletter.json')){

            // Create an array to store json objects if one doesn't exist 

            $json_array = array(); 

            // Add to that array 

            array_push($json_array, $array); 
            // Store it in a file 

            $json_array=json_encode($json_array);

            file_put_contents('newsletter.json', $json_array);

        }

        else{
            // If one does exist, grab it

            $json_array=file_get_contents('newsletter.json');

            // Decode from JSON to PHP formatting 

            $json_array=json_decode($json_array);

            // Add to the container array 

            array_push($json_array, $array); 

            // Encode the array with appended data 

            $json_array=json_encode($json_array, true);

            // Write to file 

            file_put_contents("newsletter.json", $json_array);
        }
        
        // Redirect user to contact page 
       header("location: ../../index.php");

    }

    if (isset($_POST['newsletter'])){

        newsletterJSON();
        // header("location: ../../contact.php");
    }