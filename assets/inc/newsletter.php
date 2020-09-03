<?php

function newsletter(){
    // Connect to database 
$servername = "localhost";
$username="root";
$password="";
$database="quantumLeap";
$table="newsletter";

$connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error){
        die("Whoops! Connection failed: ". $connection->connect_error); 
    }

    else{

        $email = $_POST["newsletter"];
        $query = "INSERT INTO $table(email) VALUES('$email')"; 
        $result = $connection->query($query); 

    }

    if ($result){
        echo " Yay! Form sent!";
    }

    else{
        echo "Error processing query. Query failed: ".$connection->error; 
    }

$connection->close();

header("Location: ../../contact.php");
// Because contact.php is two directories above our current directory

}

if (isset($_POST["letter"])){
newsletter();
}

?>