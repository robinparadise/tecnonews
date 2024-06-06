<div class="container grid col justify-center">
  <div class="card py-4" style="width: 22rem;">
    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
      <!-- avatar -->
      <img src="https://i.pravatar.cc/150?img=43" class="img-thumbnail" alt="...">
    </div>
    <h3 class="fs-2 text-body-emphasis"><?= $user['name']; ?></h3>
    <p><?= $user['bio']; ?></p>
    <a href="#" class="icon-link">
      <?= $user['email']; ?>
    </a>
  </div>
</div>