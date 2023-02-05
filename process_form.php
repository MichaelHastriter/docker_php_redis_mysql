<?php
$data = [];
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
  echo json_encode($data);
  exit;
}



$key = "thekey";
if($_POST['action']=="register") {
  $key = $_POST['email'];
 
}
$redis = new Redis();
$redis->connect('redis0-grp', 6379);


//this will need to be added to the db from another 'admin screen' or
//before we spin up the service to begin with
//to go above and beyond, find a movie database with an api so you
//can pull all this info
//no checking for existing entries happens yet
$tmp_add = array(
  "id" => $key,
  "name" => $_POST['name'],
  "email" => $_POST['email']
);
//this is how you save a key and value
$redis->set($key, serialize($tmp_add));

//this is how you pull from the redis cache
$person = unserialize($redis->get($key));


$data['name'] = $person["name"];
$data['email'] = $person['email'];



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

//this is how you insert a new record into the DB
$sql = "INSERT INTO Users (name, email)
VALUES ('".$data['name']."', '".$data['email']."')";



if ($conn->query($sql) === TRUE) {
    $data['record_entry'] = "New record created successfully";
    $data['success'] = true;

  } else {
    $data['record_entry'] =  "Error: " . $sql . "<br>" . $conn->error;
  }
  

  //$data['message'] = 'Welcome '.$data['name'].'!';

  $conn->close();







echo json_encode($data);