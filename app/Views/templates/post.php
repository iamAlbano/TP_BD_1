 <?php foreach ($posts as $post) : ?>

  <p><? echo ($post['id_user']) ?></p>
  <a class="post-title-feed text-muted " href="Post?id=<?= $post['id'] ?>">
   <div class="my-3 p-3 bg-white rounded box-shadow post feed-elements">
      <?php if ($post['id_user'] == session()->get('id')) : ?>
        <div class="media text-muted pt-3" style="padding: 0!important;">
          <a href="Post/delete_post?id=<?= $post['id'] ?>&id_user=<?= $post['id_user']?>" class="delete-btn-link"><span class="fas fa-trash-alt delete-post" style="float: right"></span></a>
        </div>
      <?php endif; ?>
    
      <div class="media text-muted pt-3">
      <span style="float: right;margin-right: 20px;"> <?= $post['date'] ?></span>  
      <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
       <div class="user-data">
         <strong class="d-block text-gray-dark"> <?= $post['name'] ?></strong>
         <p class="d-block text-gray-dark">@<?= $post['username'] ?></p>
       </div>
         
        <h4 style="margin-top: 2rem; margin-left: 1.5rem;"><?= $post['title'] ?></h4>
        
        <div class="post-content"> <?= $post['text'] ?> </div>
      </a>

    </div>
    <div class="row new-post-section-row">
       <div class="col-9 media-link">
         <div class="row new-post-section-row">
           <!-- <iframe width="620" height="415" src=" $post['link'] ?>"></iframe> -->
         </div>
       </div>
    </div>
 
    <span class="category-element"><?= $post['category'] ?></span>
 
  </div>



 <?php endforeach; ?>