<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>TecnoNews</title>
  <?php include 'components/head.php'; ?>
</head>

<body>
  <?php $page = 'index' ?>

  <div class="container-sm text-center mt-4">
    <h1>Tecno <span class="success">News</span></h1>
    <p>Read the latest news from around the world!</p>

    <button class="btn btn-primary">
      <a style="color:white" href="posts.php">Ver news</a>
    </button>
  </div>

  <?php include 'components/scripts.php'; ?>
</body>

</html>