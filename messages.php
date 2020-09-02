<?php 
function contact_us(){

// Connect to DB
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "quantumLeap";
    $table_messages="messages";
    
    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    else {

    //Form inputs with sanitization 

    $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        // MYSQL query
        $sql="INSERT INTO $table_messages(firstName, lastName, email, msg) 
        VALUES ('$firstName',
        '$lastName', 
        '$email',
        '$msg')"; 
    }

    if ($connection->query($sql)) {
        echo "Form sent!";
    }
    else{
    echo "Error: " .$connection->error; 
    }
    
    $connection->close();

    header("location: contact.php");

}

if (isset($_POST['contact'])){
    contact_us();
}
?>