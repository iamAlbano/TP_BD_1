


<div class="row post-page-row my-3 p-3 bg-white rounded box-shadow new-post-element feed-elements">

  <div class="media text-muted pt-3">
    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
    <div class="user-data">
      <strong class="d-block text-gray-dark"><?= $post->first_name .' ' . $post->last_name  ?></strong>
      <p class="d-block text-gray-dark">@<?= $post->username ?></p>
    </div>

    <span style="float: right"> <?= $post->date ?></span>
    <h2 style="margin-top: 2rem;"><?= $post->title ?></h2>

    <div class="post-content"> <?= $post->text ?> </div>

  <span class="category-element"><?= $post->category ?></span>

</div>