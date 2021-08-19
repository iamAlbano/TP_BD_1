


<div class="row post-page-row my-3 p-3 bg-white rounded box-shadow new-post-element feed-elements">

  <?php if ($post->id_user == session()->get('id')) : ?>
    <div class="media text-muted pt-3" style="padding: 0!important;">
    <a href="/TP_BD_1/public//Post/delete_post?id=<?= $post->id ?>&id_user=<?= $post->id_user?>" class="delete-btn-link"><span class="fas fa-trash-alt delete-post" style="float: right"></span></a>
    </div>
  <?php endif; ?>

  <div class="media text-muted pt-3">
    
  
    <img src="https://i.pinimg.com/originals/ff/a0/9a/ffa09aec412db3f54deadf1b3781de2a.png" alt="mdo" width="32" height="32" class="rounded-circle">
    <div class="user-data">
      <strong class="d-block text-gray-dark"><?= $post->first_name .' ' . $post->last_name  ?></strong>
      <p class="d-block text-gray-dark">@<?= $post->username ?></p>
    </div>

    <span style="float: right"> <?= $post->date ?></span>
    
    
    
    
    
    <h2 style="margin-top: 2rem;"><?= $post->title ?></h2>

    <div class="post-content"> <?= $post->text ?> </div>

    <span class="category-element"><?= $post->category ?></span>

    <span class="far fa-comments" style="float:right; margin-right: 1rem">
        <span class="media text-muted pt-3 comment-number-feed "> <?= $n_comments ?> </span>
    </span>

</div>