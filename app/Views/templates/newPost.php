<div class="my-3 p-3 bg-white rounded box-shadow new-post-element feed-elements">
  <div class="media text-muted pt-3">
    <img src="https://github.com/mdo.png" alt="mdo" width="42" height="42" class="rounded-circle">
    <div class="user-data" style="margin-left: 3.2rem;">
      <strong class="d-block text-gray-dark"><?= session()->get('name') ?></strong>
      <p class="d-block text-gray-dark">@<?= session()->get('username') ?></p>
    </div>

    <div class="row new-post-btn-row">
      <div class="col-6">
        <a href="CreatePost">
          <button class="w-100 btn btn-lg btn-primary">Novo Post</button>
        </a>
      </div>
    </div>

  </div>

</div>