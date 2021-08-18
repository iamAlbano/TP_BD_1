 <?php foreach ($posts as $post) : ?>

   <div class="my-3 p-3 bg-white rounded box-shadow post feed-elements">
     <div class="media text-muted pt-3">
       <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
       <div class="user-data">
         <strong class="d-block text-gray-dark"> <?= $post['name'] ?> *[ Deixar clicável]</strong>
         <p class="d-block text-gray-dark">@<?= $post['username'] ?></p>
       </div>

       <span style="float: right"> 07 - ago - 2021</span>
       <p class="media-body pb-3 mb-0 small lh-125 post-text">
         Os Muppets tocando Bohemian Rhapsody kakakaka
       </p>

     </div>
     <div class="row new-post-section-row">
       <div class="col-9 media-link">
         <div class="row new-post-section-row">
           <iframe width="620" height="415" src="<?= $post['link'] ?>"></iframe>
         </div>
       </div>
     </div>
   </div>



 <?php endforeach; ?>