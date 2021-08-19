<main role="main" class="container">

  <!-- User feed Section  -->
  <div class="row feed-top-elements">
    <div class="col-md-10">
      <!-- Render post -->
      <?= $postContent ?>
      <hr />
    </div>
  </div>

  <div class="row feed-top-elements">
    <div class="col-md-10">
      <!-- New comment -->
      <?= $commentForm ?>
      <hr />


      <!-- Comment List -->
      <?= $commentList ?>


      </div>
  </div>

</main>