<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=".">
    <h1>Tecno <span class="success">News</span></h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link <?= $page === 'index' ? 'active' : ''; ?>" href=".">Home</a>
      <a class="nav-item nav-link <?= $page === 'posts' ? 'active' : ''; ?>" href="posts.php">Posts
        <span class="position-absolute translate-middle badge rounded-pill bg-danger">
          <?= getPostsCount(); ?>
          <span class="visually-hidden">unread messages</span>
        </span>
      </a>
      <a class="nav-item nav-link <?= $page === 'profile' ? 'active' : ''; ?>" href="profile.php">
        Profile
      </a>
    </div>
  </div>
</nav>