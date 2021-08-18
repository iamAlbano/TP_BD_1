

<?php foreach ($comments as $comment) : ?>


<div class="row post-page-row">
  
  <div class="my-3 p-3 bg-white rounded box-shadow new-post-element feed-elements">
  
  <div class="media text-muted pt-3">
    <span style="float: right"> <?= $comment['date'] ?></span>  
    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
    <div class="user-data">
        <strong class="d-block text-gray-dark"> <?= $comment['name'] ?>  </strong>
        <p class="d-block text-gray-dark">@<?= $comment['username'] ?></p>
      </div>
    </div>

    <div class="comment-element">
      <p class="text-muted"><?= $comment['text'] ?></p>
    </div>

  </div>
</div>


<?php endforeach; ?>