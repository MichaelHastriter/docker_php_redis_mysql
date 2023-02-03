<?php
$data = [];

$redis = new Redis();
$redis->connect('redis0-grp', 6379);

$key = "thekey";
$redis->set($key, serialize("the products"));
$products = unserialize($redis->get($key));
$data['redis_return'] = $products;




$servername = "db0-grp";
$username = "root";
$password = "example";

// Create connection
$conn = new mysqli($servername, $username, $password, "path");


// Check connection
if ($conn->connect_error) {
  $data['db_conn'] = "connection fail";
}
else {
    $data['db_conn'] = "db connected successfully";
}

$sql = "INSERT INTO Movies (title, description)
VALUES ('The Title', 'The description')";

if ($conn->query($sql) === TRUE) {
    $data['record_entry'] = "New record created successfully";
  } else {
    $data['record_entry'] =  "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


$errors = [];



if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}



if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);