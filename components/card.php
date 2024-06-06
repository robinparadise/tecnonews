<div class="card m-2" style="width: 18rem;">
  <img class="card-img card-img-top" src="<?= $article['image_url']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $article['title']; ?></h5>
    <p class="card-text"><?= $article['category']; ?></p>
    <div style="display: none;">
      <p class="card-description"><?= $article['description']; ?></p>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      View
    </button>
  </div>
</div>
