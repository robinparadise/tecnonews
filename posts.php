<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>TecnoNews</title>
  <?php include 'components/head.php'; ?>
</head>

<body>
  <?php $page = 'posts' ?>
  <?php include 'components/navbar.php'; ?>


  <div class="container-sm text-center mt-4">
    <h1>Tecno <span class="success">Posts</span></h1>
  </div>
  <div class="container-sm text-center mt-4">
    <?php $articles = getPosts(); ?>
    <?php include 'components/grid.php'; ?>
  </div>

  <?php include 'components/modal.php'; ?>
  <?php include 'components/scripts.php'; ?>
</body>

</html>