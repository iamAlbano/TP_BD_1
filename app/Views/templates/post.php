 <?php foreach ($posts as $post) : ?>

   <div class="my-3 p-3 bg-white rounded box-shadow post feed-elements">
    <div class="media text-muted pt-3">
      <span style="float: right"> <?= $post['date'] ?></span>  
      <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
       <div class="user-data">
         <strong class="d-block text-gray-dark"> <?= $post['name'] ?> *[ Deixar clicável]</strong>
         <p class="d-block text-gray-dark">@<?= $post['username'] ?></p>
       </div>
       <h5 style="margin-top: 2rem; margin-bottom: 2rem;"> <?= $post['title'] ?></h5>
  
       <div class="post-preview"> <?= $post['text'] ?> </div>

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