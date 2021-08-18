<div class="row new-post-section-row">

  <!-- Editor de texto -->
  <div class="col-md-10">

    <form action="Home" method="post" role="form" accept-charset="utf-8" id="form-post">

      <h4 class="h4 mb-3 fw-normal"> Título </h4>
      <div class="form-group mb-3 new-post-input">
        <input class="form-control form-control-lg" type="text" name="title" id="title" required>
      </div>

      <h4 class="h4 mb-3 fw-normal"> Post </h4>

      <div class="form-floating panel-body new-post-input">
      <textarea cols="10" id="text" name="text" rows="10" data-sample-short required="true"></textarea>
      </div>

      <div class="form-row">
        <h5 class="h5 mb-3 fw-normal"> Categoria </h5>
        <div class="col-4 new-post-input">
          <div class="input-group mb-3">
            <select class="form-select" id="category" name="category" aria-label="categories" required>
              <option selected value="">Selecione uma categoria</option>
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
        
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['text'].getData().replace(/<[^>]*>/gi, '').length;
            if( messageLength < 25 ) {
                alert( 'O Post deve conter no minimo 50 caracteres' );
                e.preventDefault();
            }
        });
        CKEDITOR.replace('text', {
          extraPlugins: 'embed,autoembed,image2',
          removePlugins: 'image',
          height: 500,

          // Load the default contents.css file plus customizations for this sample.
          contentsCss: [
            'http://cdn.ckeditor.com/4.16.2/full-all/contents.css',
            'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/css/widgetstyles.css'
          ],
          // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
          embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

          // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
          // resizer (because image size is controlled by widget styles or the image takes maximum
          // 100% of the editor width).
          image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
          image2_disableResizer: true,

        });

      </script>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
    </form>

  </div>


</div>