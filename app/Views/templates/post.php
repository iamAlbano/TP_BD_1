 <?php foreach ($posts as $post) : ?>

    <div class="my-3 p-3 bg-white rounded box-shadow post feed-elements">
      <?php if ($post['id_user'] == session()->get('id')) : ?>
        <div class="media text-muted pt-3" style="padding: 0!important;">
          <a href="Post/delete_post?id=<?= $post['id'] ?>&id_user=<?= $post['id_user']?>" class="delete-btn-link"><span class="fas fa-trash-alt delete-post" style="float: right"></span></a>
        </div>
      <?php endif; ?>
        
      <div class="media text-muted pt-3">
        <span style="float: right;margin-right: 20px;"> <?= $post['date'] ?></span>  
      
        <a class="post-title-feed text-muted " href="Post?id=<?= $post['id'] ?>">
          <img src="https://i.pinimg.com/originals/ff/a0/9a/ffa09aec412db3f54deadf1b3781de2a.png" alt="mdo" width="32" height="32" class="rounded-circle">
          <div class="user-data">
            <strong class="d-block text-gray-dark"> <?= $post['name'] ?></strong>
            <p class="d-block text-gray-dark">@<?= $post['username'] ?></p>
          </div>
            
          <h4 style="margin-top: 2rem; margin-left: 1.5rem;"><?= $post['title'] ?></h4>
        </a>
            
        <div class="post-content post-overflow"> <?= $post['text'] ?> </div>

      </div>
      <div class="row new-post-section-row" style="margin-bottom: 1rem;">
        <div class="col-10" >
        <a  href="Post?id=<?= $post['id'] ?>" style="float:right;">continuar lendo...</a>
        </div>
      </div>
  
      <span class="category-element"><?= $post['category'] ?></span>
      <span class="far fa-comments" style="float:right; margin-right: 1rem">
        <span class="media text-muted pt-3 comment-number-feed "> <?= $post['comments'] ?> </span>
      </span>
 
    </div>
    


 <?php endforeach; ?>