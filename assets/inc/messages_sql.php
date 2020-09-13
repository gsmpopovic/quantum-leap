<?php 
function contact_us(){

// Connect to DB
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "quantumLeap";
    $table="messages";
    
    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Whoops! Connection failed: " . $connection->connect_error);
    }
    else {

    //Form inputs with sanitization 

    $firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $msg = mysqli_real_escape_string($connection, $_POST['msg']);

        // MYSQL query
        $query="INSERT INTO $table(firstName, lastName, email, msg) 
        VALUES ('$firstName',
        '$lastName', 
        '$email',
        '$msg')";
        
        $result = $connection->query($query); 
    }

    if ($result) {
        echo "Yay! Form sent!";
    }
    else{
    echo "Error processing query. Query failed: " .$connection->error; 
    }
    
    $connection->close();

    header("location: ../../contact.php"); 
    // Because contact.php is two directories above our current directory

}

if (isset($_POST['contact'])){
    contact_us();
}
?>