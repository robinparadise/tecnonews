<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>TecnoNews</title>
  <?php include 'components/head.php'; ?>
</head>

<body>
  <?php $page = 'profile' ?>
  <?php include 'components/navbar.php'; ?>


  <div class="container-sm text-center mt-4">
    <h1>Tecno <span class="success">Profile</span></h1>

    <?php $user = getOneUser(); ?>
    <?php include 'components/user-card.php'; ?>
  </div>

  <?php include 'components/modal.php'; ?>
  <?php include 'components/scripts.php'; ?>
</body>

</html>