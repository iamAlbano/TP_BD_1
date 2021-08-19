<body class="bg-light">
    
<div class="container " style="padding-top: 8em;">
  <main>

    <div class="row g-6 position-relative">
      
      <div class="col-md-7 col-lg-8 " style="margin: auto;">
        <h4 class="mb-3">Meus dados</h4>
        <form action="changeData" class="needs-validation" method="post" accept-charset="utf-8">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="<?=$user['name']?>" value="<?=$user['name']?>" required style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="<?=$user['last_name']?>" value="<?=$user['last_name']?>" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" name="username"  value="<?=$user['username']?>" placeholder="<?=$user['username']?>" required>
              </div>
              <div >
              <?=$user['usernameText']?>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="<?=$user['email']?>" value="<?=$user['email']?>" required>
              <div>
              <?=$user['emailText']?>
              </div>
            </div>

            <hr class="my-4">

            <div class="col-md-4">
            <button class="w-100 btn btn-success btn-lg" type="submit">Salvar</button>
            </div>
            <div class="col-md-4">
            <a href="/TP_BD_1/public/Home" 
             class="w-100 btn btn-warning btn-lg">Cancelar</a>
            </div>
            <div class="col-md-4">
            <button class="w-100 btn btn-secondary btn-lg">Alterar senha</button>
            </div>

            
          </div>
         
          </form>
      </div>
    </div>
  </main>


</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  

</body>