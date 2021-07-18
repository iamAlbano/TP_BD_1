<?php foreach ($results as $result) : ?>


  <main role="main" class="container post">
    <div class="row" style="justify-content: center;">
      <div class="col-6">
        <ul class="list-group">
          <li class="list-group-item active">User Id: <?= $result->id ?></li>
          <li class="list-group-item">First Name <?= $result->first_name ?></li>
          <li class="list-group-item">Last Name <?= $result->last_name ?></li>
          <li class="list-group-item">email <?= $result->email ?></li>
          <li class="list-group-item">Login <?= $result->login ?></li>
          <li class="list-group-item">Password <?= $result->password_ ?></li>
        </ul>
      </div>
    </div>
  </main>



<?php endforeach; ?>