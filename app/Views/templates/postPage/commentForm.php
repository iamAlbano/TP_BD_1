<div class="row post-page-row">

  <div class="media text-muted pt-3 new-comment-label">
    <img src="https://github.com/mdo.png" alt="mdo" width="42" height="42" class="rounded-circle">
    <div class="user-data" style="margin-left: 3.3rem;">
      <strong class="d-block text-gray-dark"> <?= session()->get('name') ?></strong>
      <p class="d-block text-gray-dark">@<?= session()->get('username') ?></p>
    </div>
  </div>


  <form action="./Post/new_comment?id=<?= $post->id ?>" method="post">

    <div class="form-floating">
      <textarea name="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label id="new-comment-form" for="floatingTextarea2">Comentar</label>
    </div>

    <div class="row comment-btn-row">
      <button class="w-20 btn btn btn-primary comment-btn" type="submit">Enviar</button>
    </div>
  </form>

</div>