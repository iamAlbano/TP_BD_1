<header class="p-3 mb-3 border-bottom fixed-top bg-light menu">

  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/TP_BD_1/public/Home" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <h3>SongBook</h3>
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/TP_BD_1/public/UserInfo/myData" class="nav-link px-2 link-secondary">Meu perfil</a></li>
        <li><a href="/TP_BD_1/public/Home" class="nav-link px-2 link-dark">Timeline</a></li>
        <li><a href="/TP_BD_1/public/UserInfo/myData" class="nav-link px-2 link-dark">Configurações</a></li>
        <li style="padding-left: 26em"><a href="/TP_BD_1/public/UserInfo/myData" class="nav-link px-2 link-dark">Olá <b><?=session()->get('name')?></b> !</a></li>
      </ul>

      

      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://i.pinimg.com/originals/ff/a0/9a/ffa09aec412db3f54deadf1b3781de2a.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="/TP_BD_1/public/CreatePost">Novo post</a></li>
          <li><a class="dropdown-item" href="/TP_BD_1/public/UserInfo/myData">Meu perfil</a></li>
          <li><a class="dropdown-item" href="/TP_BD_1/public/UserInfo/myData">Configurações</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="/TP_BD_1/public/Home/logout">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>