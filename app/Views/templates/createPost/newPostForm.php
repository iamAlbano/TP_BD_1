<div class="row new-post-section-row">

  <!-- Editor de texto -->
  <div class="col-md-10">

    <form action="" method="post" accept-charset="utf-8">

      <h4 class="h4 mb-3 fw-normal"> Título </h4>
      <div class="form-group mb-3 new-post-input">
        <input class="form-control form-control-lg" type="text" name="title" id="title">
      </div>

      <h4 class="h4 mb-3 fw-normal"> Post </h4>

      <div class="form-floating panel-body new-post-input">
        <textarea name="text"></textarea>
      </div>

      <div class="form-row">
        <h5 class="h5 mb-3 fw-normal"> Categoria </h5>
        <div class="col-4 new-post-input">
          <div class="input-group mb-3">
            <select class="form-select" id="category" name="category" aria-label="categories">
              <option selected>Selecione uma categoria</option>
              <option value="albums">Albums</option>
              <option value="curiosidades">Curiosidades</option>
              <option value="documentarios">Documentários</option>
              <option value="playlists">PlayLists</option>
              <option value="resenhas">Resenhas</option>
              <option value="shows">Shows</option>

            </select>
          </div>
        </div>

        <hr />

        <div id="input-tags" class="col-9">

        </div>

      </div>



      <script>
        CKEDITOR.replace('text', {
          extraPlugins: 'embed,autoembed, easyimage,editorplaceholder',
          removePlugins: 'image',
          editorplaceholder: 'Start typing here...',
          height: 450,

          // Load the default contents.css file plus customizations for this sample.
          contentsCss: [
            'http://cdn.ckeditor.com/4.16.1/full-all/contents.css',
            'https://ckeditor.com/docs/ckeditor4/4.16.1/examples/assets/css/widgetstyles.css'
          ],
          // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
          embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',


        });
      </script>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
    </form>

  </div>


</div>