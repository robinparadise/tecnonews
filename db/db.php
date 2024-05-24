<?php
include 'config.php';

function getPosts($category = null) {
  $conn = connectDB();
  if ($category) {
    $sql = "SELECT * FROM articles WHERE category = '$category'";
  } else {
    $sql = "SELECT * FROM articles";
  }
  $result = mysqli_query($conn, $sql);
  return $result;
}

function getPostsCount() {
  $conn = connectDB();
  $sql = "SELECT COUNT(*) FROM articles";
  $result = mysqli_query($conn, $sql);
  return $result;
}

// return fake user data
function getOneUser() {
  return [
    'id' => 1,
    'name' => 'John Doe',
    'email' => 'doe@gmail.com',
    'bio' => 'I am a software engineer'
  ];
}

