<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table> 

<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Message</th>
</tr>

<?php
$json=file_get_contents("./messages.json");

print_r($json);

$json_decoded = json_decode($json, true);

echo var_dump($json_decoded);

print_r($json_decoded);

// foreach($json_decoded as $k => $v){
//     echo'<tr>
//     <td>'.$v['firstName'].'</td>
//     </tr>';}

?>
</body>
</html>