<?php
$data = [];

$key = "thekey";
if($_POST['action']=="pick_movie") {
  $key = $_POST['movie_id'];
 
}
$redis = new Redis();
$redis->connect('redis0-grp', 6379);


//this will need to be added to the db from another 'admin screen' or
//before we spin up the service to begin with
//to go above and beyond, find a movie database with an api so you
//can pull all this info

$tmp_add = array(
  "id" => $key,
  "title" => 'This is the title of the movie ' . $key,
  "description" => "This is the description of the movie " . $key
);
//this is how you save a key and value
$redis->set($key, serialize($tmp_add));

//this is how you pull from the redis cache
$movie = unserialize($redis->get($key));


$data['movie_id'] = $movie["id"];
$data['movie_title'] = $movie['title'];
$data['description'] = $movie['description'];




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